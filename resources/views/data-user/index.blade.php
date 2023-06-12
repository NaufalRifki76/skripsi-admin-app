@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Data User</h3>
                <br>
                <table id="tabel-user" class="table table-striped table-bordered display text-center" width="100%" cellspacing="0">
                    <thead style="background-color: #439a97">
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Jenis Akun</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>Koe Futsal</td>
                            <td>koefutsal@google.com</td>
                            <td>021659365448</td>
                            <td>Mitra</td>
                            <td>Normal</td>
                            <td class="d-flex justify-content-center text-center">
                              <a href="{{ route('data-user.edit') }}"><button class="btn btn-sm btn-warning text-white me-2 px-3">Edit</button></a> 
                          </td>
                          </tr>
                        <tr>
                            <td>2</td>
                            <td>Faris Hakim</td>
                            <td>faris@google.com</td>
                            <td>081265996988</td>
                            <td>User</td>
                            <td>Normal</td>
                            <td class="d-flex justify-content-center text-center">
                              <a href="{{ route('data-user.edit') }}"><button class="btn btn-sm btn-warning text-white me-2 px-3">Edit</button></a> 
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
            $('#tabel-user').DataTable();
        });
    </script>
        
    @endpush
@endsection

