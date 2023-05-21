@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Tambah Daftar FAQ</h3>
                <p class="fs-6" style="color: #FCE700;">Tambahkan daftar FAQ dengan mengisi formulir di
                    bawah!</p>
                <form action="" method="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark h6 fw-bold">Pertanyaan <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" required placeholder="" id="" name=""
                                    rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark h6 fw-bold">Jawaban <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" required placeholder="" id="" name=""
                                    rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3 mb-2">
                        <div class="mr-3">
                            <a class="btn btn-danger" href="{{ route('faq.index') }}"
                                role="button">Kembali</a>
                        </div>
                        <div class="">
                            <button type="submit" class="btn-green-hover">Tambahkan</button>
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
                $('#nama_tempat').select2({
                    theme: "bootstrap-5",
                });
            });

            $(document).ready(function() {
                $('#nama_perlengkapan').select2({
                    theme: "bootstrap-5",
                });
            });
        </script>
    @endpush
@endsection
