@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Edit Data User</h3>
                <p class="fs-6" style="color: #FCE700;">Edit data user dengan mengisi formulir di bawah!</p>
                <form action="" method="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Nama Pengguna <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" required id="" name=""
                                    placeholder="Claudio">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" required id="" name=""
                                    placeholder="claudio@gmail.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">No Telepon <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" required id="" name=""
                                    placeholder="081269555699">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Role <span
                                        class="text-danger">*</span></label>
                                <select id="role_user" class="form-select" required>
                                    <option selected>Pengguna</option>
                                    <option value="1">Mitra</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Jenis Akun <span
                                        class="text-danger">*</span></label>
                                <select id="jenis_user" class="form-select" required>
                                    <option selected>Vip</option>
                                    <option value="1">Normal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3 mb-2">
                        <div class="mr-3">
                            <a class="btn btn-danger" href="{{ route('data-user.index') }}"
                                role="button">Kembali</a>
                        </div>
                        <div class="">
                            <button type="submit" class="btn-green-hover">Simpan</button>
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
