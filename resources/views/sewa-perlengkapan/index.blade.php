@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Daftar Tempat Sewa Perlengkapan</h3>
                <br>

                <table id="tabel-sewa-perlengkapan" class="table table-striped table-bordered display text-center" width="100%" cellspacing="0">
                    <thead style="background-color: #439a97">
                        <tr>
                            <th>Nama Tempat</th>
                            <th>Nama Perlengkapan</th>
                            <th>Jumlah</th>
                            <th>Harga Sewa</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                          <td>Vini Vidi Vici</td>
                          <td>Sepatu</td>
                          <td>10</td>
                          <td>15000<br></td>
                          <td class="d-flex justify-content-center text-center">
                            <button class="btn btn-sm btn-danger">Hapus</button>
                            <a href="{{ route('sewa-perlengkapan.edit') }}"><button class="btn btn-sm btn-warning text-white ms-2 px-3">Edit</button></a> 
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
        $(document).ready(function(){
            $('#tabel-sewa-perlengkapan').DataTable();
        });
    </script>
        
    @endpush
@endsection

