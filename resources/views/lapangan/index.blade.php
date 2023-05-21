@extends('layout.index')

@section('content')
    <div class="card shadow">
        @include('session-flash')
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Daftar Lapangan</h3>
                <div class="newbtn">
                    <div class="row">
                        <div class="col-8">
                            <!-- BUTTON New -->
                            <a class="btn-green-hover" style="text-decoration: none; color: white;"
                                href="{{ route('lapangan.jam-operasional') }}"><i class="fa-solid fa-file-circle-plus"></i>
                                Atur Jam Operasional</a>
                        </div>
                    </div>
                    <br>

                    <table id="tabel-lapangan" class="table table-striped table-bordered display" width="100%"
                        cellspacing="0">
                        <thead style="background-color: #439a97">
                            <tr>
                                <th class="text-center">Nama Tempat</th>
                                <th class="text-center">Jumlah Lapangan</th>
                                <th class="text-center">Jam Buka</th>
                                <th class="text-center">Jam Tutup</th>
                                <th class="text-center">Harga Sewa (Mulai Dari)</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>Vini Vidi Vici</td>
                                <td>3</td>
                                <td>09.00</td>
                                <td>00.00</td>
                                <td>150000</td>
                                <td class="d-flex justify-content-center text-center">
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                    <a href="{{ route('lapangan.edit') }}"><button
                                            class="btn btn-sm btn-warning text-white ms-2 px-3">Edit</button></a>
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
                    $('#tabel-lapangan').DataTable();
                });
            </script>
        @endpush
    @endsection
