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
                            <a class="btn btn-green-hover btn-sm" type="button"
                            style="text-decoration: none; color: white;" href="{{ route('add.tournament.umur') }}"><i
                            class="fa-solid fa-file-circle-plus"></i> Tambah Data Kompetisi</a>
                    </div>
                </div>
                <br>

                <table id="tabel-kompetisi-umur" class="table table-striped table-bordered display" width="100%" cellspacing="0">
                    <thead style="background-color: #439a97">
                        <tr>
                            <th>Nama Kompetisi</th>
                            <th>Logo Kompetisi</th>
                            <th>Biaya Pendaftaran</th>
                            <th>Mulai Pendaftaran</th>
                            <th>End Pendaftaran</th>
                            <th>Mulai Kompetisi</th>
                            <th>End Kompetisi</th>
                            <th>Alamat Kompetisi</th>
                            <th>Detail Kompetisi</th>
                            <th>Kontak Info</th>
                            <th>Jumlah Tim</th>
                            <th>Kategori Umur</th>
                            <th>Action</th>
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
            $('#tabel-kompetisi-umur').DataTable();
        });
    </script>
        
    @endpush
@endsection

