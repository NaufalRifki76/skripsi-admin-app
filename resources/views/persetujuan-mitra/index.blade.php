@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Data Pendaftaran Mitra</h3>
                <div class="newbtn">
                    <div class="row">
                        <div class="col-8">
                            <!-- BUTTON New -->
                            <a class="btn btn-green-hover btn-sm" type="button" style="text-decoration: none; color: white;"
                                href="{{ route('sewa-perlengkapan.tambah') }}"><i class="fa-solid fa-file-circle-plus"></i>
                                Tambah Mitra</a>
                        </div>
                    </div>
                    <br>

                    <table id="tabel-sewa-perlengkapan" class="table table-striped table-bordered display text-center"
                        width="100%" cellspacing="0">
                        <thead style="background-color: #439a97">
                            <tr>
                                <th class="text-center">Nama Tempat</th>
                                <th class="text-center">Jam Buka</th>
                                <th class="text-center">Lapangan Tersedia</th>
                                <th class="text-center">Harga Sewa</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>Vini Vidi Vici</td>
                                <td>09.00</td>
                                <td>2</td>
                                <td>150000<br></td>
                                <td><span class="badge bg-warning p-2 text-white">Menunggu</span></td>
                                <td class="d-flex justify-content-center text-center">
                                    <a href="{{ route('persetujuan-mitra.detail') }}">
                                        <button class="btn btn-sm btn-warning text-white">Detail</button>
                                    </a>
                                    <button class="btn btn-sm btn-primary text-white ms-2">Terima</button>
                                    <button class="btn btn-sm btn-danger text-white ms-2 px-2">Tolak</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Vini Vidi Vici</td>
                                <td>09.00</td>
                                <td>1</td>
                                <td>250000<br></td>
                                <td><span class="badge bg-success p-2 text-white">Diterima</span></td>
                                <td class="d-flex justify-content-center text-center">
                                    <a href="{{ route('persetujuan-mitra.detail') }}">
                                        <button class="btn btn-sm btn-warning text-white">Detail</button>
                                    </a>
                                    <button class="btn btn-sm btn-danger ms-2">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Vini Vidi Vici</td>
                                <td>09.00</td>
                                <td>1</td>
                                <td>250000<br></td>
                                <td><span class="badge bg-danger p-2 text-white">Ditolak</span></td>
                                <td class="d-flex justify-content-center text-center"> 
                                    <a href="{{ route('persetujuan-mitra.detail') }}">
                                        <button class="btn btn-sm btn-warning text-white">Detail</button>
                                    </a>
                                    <button class="btn btn-sm btn-danger ms-2">Hapus</button>
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
                    $('#tabel-sewa-perlengkapan').DataTable();
                });
            </script>
        @endpush
    @endsection
