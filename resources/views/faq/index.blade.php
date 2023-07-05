@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Daftar Pertanyaan dan Jawaban FAQ</h3>
                <div class="newbtn">
                    <div class="row">
                        <div class="col-8">
                            <!-- BUTTON New -->
                            <a class="btn-green-hover" type="button" style="text-decoration: none; color: white;"
                                href="{{ route('create-faq') }}"><i class="fa-solid fa-file-circle-plus"></i> Tambah FAQ</a>
                        </div>
                    </div>
                    <br>

                    <table id="tabel-faq" class="table table-striped table-bordered display text-center" width="100%"
                        cellspacing="0">
                        <thead style="background-color: #439a97">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Pertanyaan</th>
                                <th class="text-center">Jawaban</th>
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
                    var table_faq = $('#tabel-faq').DataTable({
                        processing: true,
                        serverSide: true,
                        responsive: true,
                        ajax: {
                            url: "{{ route('index-faq') }}",
                            type: 'GET',
                        },
                        columns: [{
                                data: 'id',
                                name: 'id'
                            },
                            {
                                data: 'question',
                                name: 'question'
                            },
                            {
                                data: 'answer',
                                name: 'answer'
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
                    $(document).on('click', '#deleteBtn', function() {
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
                                    url: '{{ route("delete-faq") }}',
                                    data: {
                                        'id': delete_id,
                                    }
                                }).done(function(data, textStatus, jqXHR) {
                                    Swal.fire(
                                        'Berhasil!',
                                        'Data berhasil dihapus!',
                                        'success'
                                    )
                                    table_faq.ajax.reload();
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
