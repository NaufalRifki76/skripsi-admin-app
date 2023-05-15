@extends('layout.index')

@section('content')

<div class="card shadow">
    <div class="card-body">
        <div class="row">
            <h3 class="mb-3">Edit Daftar Tempat Sewa Perlengkapan</h3>
            <p class="fs-6" style="color: #FCE700;">Edit daftar tempat sewa perlengkapan dengan mengisi formulir di
                bawah!</p>
            <form action="" method="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tournament_name" class="form-label text-dark">Nama Tempat Futsal <span
                                class="text-danger">*</span></label>
                            <select id="nama_tempat" class="form-select" required disabled>
                                <option selected disabled>Champion Futsal</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tournament_name" class="form-label text-dark">Nama Perlengkapan <span
                                class="text-danger">*</span></label>
                            <select id="nama_perlengkapan" class="form-select" required>
                                <option selected disabled>Perlengkapan yang dipilih</option>
                                <option value="1">Sepatu</option>
                                <option value="2">Rompi</option>
                                <option value="3">Sarung Tangan</option>
                                <option value="4">Jersey Tim</option>
                                <option value="5">Kaos Kaki</option>
                                <option value="6">Deker</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jumlah_perlengkapan" class="form-label text-dark">Jumlah <span
                                class="text-danger">*</span></label>
                            <input type="number" class="form-control" required id="jumlah_perlengkapan" name="jumlah_perlengkapan"
                                placeholder="jumlah yang diinput">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="harga_sewa_perlengkapan" class="form-label text-dark">Harga Sewa <span
                                class="text-danger">*</span></label>
                            <input type="number" class="form-control" required id="harga_sewa_perlengkapan" name="harga_sewa_perlengkapan"
                                placeholder="harga yang diinput">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3 mb-2">
                    <div class="mr-3">
                        <a class="btn btn-danger" href="{{ route('sewa-perlengkapan.index') }}" role="button">Kembali</a>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-green-hover">Simpan</button>
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