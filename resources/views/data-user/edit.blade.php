@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Edit Data User</h3>
                <p class="fs-6" style="color: #FCE700;">Edit data user dengan mengisi formulir di bawah!</p>
                <form action="{{route('edituser-store', ['id' => $id])}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Nama Pengguna <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" required value="{{$data->name}}" id="name" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" required value="{{$data->email}}" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">No Telepon <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" required value="{{$data->no_telephone}}" id="no_telephone" name="no_telephone">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Role <span
                                        class="text-danger">*</span></label>
                                <select id="role_user" name="role_user" class="form-select" required>
                                    <option selected>Pilih role user...</option>
                                    @foreach ($role as $key => $roles)
                                        <option value="{{$roles->id}}">{{$roles->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Jenis Akun <span
                                        class="text-danger">*</span></label>
                                <select id="vip_status" name="vip_status" class="form-select" required>
                                    <option value="0" selected>Pilih status VIP user...</option>
                                    <option value="0">Biasa</option>
                                    <option value="1">VIP</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3 mb-2">
                        <div class="mr-3">
                            <a class="btn btn-danger" href="{{ route('index-user') }}" role="button">Kembali</a>
                        </div>
                        <div class="">
                            <button type="button" class="btn-green-hover simpan">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('css')
        {{-- Select --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    @endpush

    @push('scripts')
        {{-- Sweet Alert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function() {
                //melakukan proses multiple input 
                $("form .simpan").click(function(e) {
                    let $form = $(this).closest('form');
                    Swal.fire({
                        title: 'Apakah anda yakin ingin edit data ini?',
                        text: "Pastikan data yang anda edit sudah benar!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#62B6B7',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, edit!',
                        cancelButtonText: 'Kembali',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $form.submit();
                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Batal !',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    });
                });
            });
        </script>

        {{-- Select2 --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#role_user').select2({
                    theme: "bootstrap-5",
                });
            });

            $(document).ready(function() {
                $('#jenis_user').select2({
                    theme: "bootstrap-5",
                });
            });
        </script>
    @endpush
@endsection
