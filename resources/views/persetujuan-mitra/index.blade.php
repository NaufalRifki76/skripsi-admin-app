@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Data Pendaftaran Mitra</h3>
                <br>
                <table id="table-mitra" class="table table-striped table-bordered display text-center" width="100%"
                    cellspacing="0">
                    <thead style="background-color: #439a97">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Nama Venue</th>
                            <th class="text-center">Jam Buka</th>
                            <th class="text-center">Jumlah Lapangan</th>
                            <th class="text-center">Mulai Harga Sewa Lapangan</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    
    @push('css')
        {{-- Select --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />


        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap5.min.css">
    @endpush

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
        {{-- Select2 --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            var table_mitra = $('#table-mitra').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: {
                    url: "{{ route('index-sewa') }}",
                    type: 'GET',
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'venue_name',
                        name: 'venue_name'
                    },
                    {
                        data: 'open_hour',
                        name: 'open_hour'
                    },
                    {
                        data: 'field_qty',
                        name: 'field_qty'
                    },
                    {
                        data: 'starting_fee',
                        name: 'starting_fee'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ],

                order: [
                    [0, 'asc']
                ],
            });

            $(document).on('click', '#accBtn', function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var acc_id = $(this).data('id');
                console.log('acc_id:', acc_id);
                Swal.fire({
                title: 'Apakah anda yakin ingin menerima data ini?',
                text: "Data yang telah diterima tidak dapat diubah statusnya!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Ya, terima data!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: "POST",
                        dataType: "json",
                        url: '{{route("acc-mitra")}}',
                        data: {
                            'id': acc_id,
                        }
                    }).done(function(data, textStatus, jqXHR) {
                        Swal.fire(
                        'Berhasil!',
                        'Venue berhasil diapprove!',
                        'success'
                        )
                        table_mitra.ajax.reload();
                    })
                }
                else{
                    console.log('Penghapusan data gagal!');
                }
                });
            });
        });
    </script>
    @endpush
@endsection
