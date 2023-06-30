@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Daftar Kompetisi Umur</h3>
                <div class="newbtn">
                    <div class="row">
                        <div class="col-8">
                            <!-- BUTTON New -->
                            <a class="btn-green-hover" type="button" style="text-decoration: none; color: white;"
                                href="{{ route('add.tournament.umur') }}"><i class="fa-solid fa-file-circle-plus"></i>
                                Tambah Data Kompetisi</a>
                        </div>
                    </div>
                    <br>

                    <table id="tabel-kompetisi-umur" class="table table-striped table-bordered display text-center"
                        width="100%" cellspacing="0">
                        <thead style="background-color: #439a97">
                            <tr>
                                <th class="text-center">Nama Kompetisi</th>
                                <th class="text-center">Biaya Pendaftaran</th>
                                <th class="text-center">Mulai Pendaftaran</th>
                                <th class="text-center">Mulai Kompetisi</th>
                                <th class="text-center">Jumlah Tim</th>
                                <th class="text-center">Kategori Umur</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

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
            <script type="text/javascript">
                $(document).ready(function() {
                    var table_competition = $('#tabel-kompetisi-umur').DataTable({
                        processing: true,
                        serverSide: true,
                        responsive: true,
                        ajax: {
                            url: "{{ route('tournament.umur') }}",
                            type: 'GET',
                        },
                        columns: [{
                                data: 'tournament_name',
                                name: 'tournament_name'
                            },
                            {
                                data: 'entry_fee',
                                name: 'entry_fee'
                            },
                            {
                                data: 'registration_start',
                                name: 'registration_start'
                            },
                            {
                                data: 'start_date',
                                name: 'start_date'
                            },
                            {
                                data: 'team_pool',
                                name: 'team_pool'
                            },
                            {
                                data: 'age_category',
                                name: 'age_category'
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

                    // alert button hapus
                    $(document).on('click', '#deleteBtn2', function() {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var delete_id = $(this).data('id');
                        console.log('delete_id:', delete_id);
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
                                    // url: '{{ route('acc-mitra') }}',
                                    data: {
                                        'id': reject_id,
                                    }
                                }).done(function(data, textStatus, jqXHR) {
                                    Swal.fire(
                                        'Berhasil!',
                                        'Data berhasil dihapus!',
                                        'success'
                                    )
                                    table_mitra.ajax.reload();
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
