@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Data Pengembalian Dana</h3>
                <br>
                <table id="table_refund" class="table table-striped table-bordered display text-center" width="100%"
                    cellspacing="0">
                    <thead style="background-color: #439a97">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Nama Tempat</th>
                            <th class="text-center">Tanggal Pemesanan</th>
                            <th class="text-center">Harga Sewa</th>
                            <th class="text-center">Status</th>
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
        <script>
            $(document).ready(function() {
                var table_refund = $('#table_refund').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    ajax: {
                        url: '{{route("index-refund")}}',
                        type: 'GET',
                    },
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'venue_id',
                            name: 'venue_id'
                        },
                        {
                            data: 'order_date',
                            name: 'order_date'
                        },
                        {
                            data: 'price_sum',
                            name: 'price_sum'
                        },
                        {
                            data: 'confirmation',
                            name: 'confirmation'
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

                // alert button proses
                $(document).on('click', '#procBtn', function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var proc_id = $(this).data('id');
                    Swal.fire({
                        title: 'Apakah anda yakin ingin untuk memproses data ini?',
                        text: "Anda harus bertanggung jawab untuk mengambil tugas ini!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: 'Batal',
                        confirmButtonText: 'Ya, proses data!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                method: "POST",
                                dataType: "json",
                                url: '{{ route("process-refund") }}',
                                data: {
                                    'id': proc_id,
                                }
                            }).done(function(data, textStatus, jqXHR) {
                                Swal.fire(
                                    'Berhasil!',
                                    'Data berhasil diproses! Silahkan hubungi vendor dan customer yang terkait untuk melanjutkan proses pengembalian dana.',
                                    'success'
                                )
                                table_refund.ajax.reload();
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
                                url: '{{ route("deny-refund") }}',
                                data: {
                                    'id': reject_id,
                                }
                            }).done(function(data, textStatus, jqXHR) {
                                Swal.fire(
                                    'Berhasil!',
                                    'Data berhasil ditolak!',
                                    'success'
                                )
                                table_refund.ajax.reload();
                            })
                        } else {
                            console.log('Penolakan data gagal!');
                        }
                    });
                });

                // alert button acc
                $(document).on('click', '#accBtn', function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var acc_id = $(this).data('id');
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
                            url: '{{route("acc-refund")}}',
                            data: {
                                'id': acc_id,
                            }
                        }).done(function(data, textStatus, jqXHR) {
                            Swal.fire(
                            'Berhasil!',
                            'Data berhasil diterima!',
                            'success'
                            )
                            table_refund.ajax.reload();
                        })
                    }
                    else{
                        console.log('Penerimaan data gagal!');
                    }
                });
            });
            });
        </script>
    @endpush
@endsection
