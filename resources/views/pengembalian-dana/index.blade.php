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
                            <td>Faris Futsal</td>
                            <td>19/02/2023</td>
                            <td>150000</td>
                            <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#bukti-transfer"><i
                                        class="fa-solid fa-eye"></i></button></td>
                            <td>Diterima, Ditolak, Pending</td>
                            <td class="d-flex justify-content-center text-center">
                                <a href="{{ route('pengembalian-dana.detail') }}" class="btn btn-sm btn-warning text-white me-2">Detail</a>
                                <button class="btn btn-sm btn-danger me-2">Tolak</button>
                                <button class="btn btn-sm btn-primary">Terima</button>
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
                $('#pengembalian-dana').DataTable();
            });
        </script>
    @endpush
@endsection
