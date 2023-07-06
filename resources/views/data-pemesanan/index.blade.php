@extends('layout.index')

@section('content')
    @include('session-flash')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Daftar Data Pemesanan</h3>
                <br>
                <table id="table_orders" class="table table-striped table-bordered display text-center" width="100%" cellspacing="0">
                    <thead style="background-color: #439a97">
                        <tr>
                            <th>Nama Pemesan</th>
                            <th>Nama Tempat</th>
                            <th>Tanggal Pemesanan</th>
                            {{-- <th>Jam</th> --}}
                            <th>Harga Sewa</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $table_orders = $('#table_orders').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: {
                    url: "{{route('index-orders')}}",
                    type: 'GET',
                },
                columns: [
                    {data: 'cust_name', name: 'cust_name'},
                    {data: 'venue_name', name: 'venue_name'},
                    {data: 'order_date', name: 'order_date'},
                    {data: 'price_sum', name: 'price_sum'},
                    {data: 'confirmation', name: 'confirmation'},
                    {data: 'action', name: 'action'}
                ],
                
                order: [
                    [0, 'asc']
                ],
            });
        });
    </script>

    @push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap5.min.css">
    @endpush

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click', '#delBtn', function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var delete_id = $(this).data('id');
                Swal.fire({
                    title: 'Apakah anda yakin ingin menghapus data ini?',
                    text: "Data yang telah dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Ya, hapus data!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: "POST",
                            dataType: "json",
                            url: '{{ route("delete-orders") }}',
                            data: {
                                'id': delete_id,
                            }
                        }).done(function(data, textStatus, jqXHR) {
                            Swal.fire(
                                'Berhasil!',
                                'Data berhasil dihapus!',
                                'success'
                            )
                            table_orders.ajax.reload();
                        })
                    } else {
                        console.log('Hapus data gagal!');
                    }
                });
            });
        });
    </script>
        
    @endpush
@endsection

