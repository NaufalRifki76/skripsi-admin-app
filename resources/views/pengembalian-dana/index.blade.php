@extends('layout.index')

@section('content')
    @include('pengembalian-dana.modal-bukti-pembayaran')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Data Pengembalian Dana</h3>
                <br>
                <table id="pengembalian-dana" class="table table-striped table-bordered display text-center" width="100%"
                    cellspacing="0">
                    <thead style="background-color: #439a97">
                        <tr>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Nama Tempat</th>
                            <th class="text-center">Tanggal Pemesanan</th>
                            <th class="text-center">Harga Sewa</th>
                            <th class="text-center">Bukti Pembayaran</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>Claudio</td>
                            <td>Koe Futsal</td>
                            <td>19/05/2023</td>
                            <td>150000</td>
                            <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#bukti-transfer"><i class="fa-solid fa-eye"></i></button></td>
                            <td>Pending</td>
                            <td class="d-flex justify-content-center text-center">
                                <a href="{{ route('pengembalian-dana.detail') }}"
                                    class="btn-sm btn-warning text-white me-2">Detail</a>
                                <button class="btn btn-sm btn-danger me-2" id="rejectBtn">Tolak</button>
                                <button class="btn btn-sm btn-primary" id="accBtn">Terima</button>
                            </td>
                        </tr>
                    </tbody>
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
        <script>
            $(document).ready(function() {
                $('#pengembalian-dana').DataTable();

                // alert button terima
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
                                // url: '{{ route('acc-mitra') }}',
                                data: {
                                    'id': acc_id,
                                }
                            }).done(function(data, textStatus, jqXHR) {
                                Swal.fire(
                                    'Berhasil!',
                                    'Data berhasil diterima!',
                                    'success'
                                )
                                table_mitra.ajax.reload();
                            })
                        } else {
                            console.log('Penerimaan data gagal!');
                        }
                    });
                });

                // alert button tolak
                $(document).on('click', '#rejectBtn', function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var reject_id = $(this).data('id');
                    console.log('reject_id:', reject_id);
                    Swal.fire({
                        title: 'Apakah anda yakin ingin menolak data ini?',
                        text: "Data yang telah ditolak tidak dapat diubah statusnya!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: 'Batal',
                        confirmButtonText: 'Ya, tolak data!'
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
                                    'Data berhasil ditolak!',
                                    'success'
                                )
                                table_mitra.ajax.reload();
                            })
                        } else {
                            console.log('Penolakan data gagal!');
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
