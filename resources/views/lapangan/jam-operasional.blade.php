@extends('layout.index')

@section('content')

<div class="card shadow">
    <div class="card-body">
        <div class="row">
            <h3 class="mb-3">Tambah Daftar Jam Operasional Lapangan</h3>
            <p class="fs-6" style="color: #FCE700;">Tambahkan daftar jam operasional lapangan yang diingin dengan mengisi formulir di bawah!</p>
            <form action="" method="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="tournament_name" class="form-label fw-bold text-dark h6">Nama Tempat Futsal <span
                                class="text-danger">*</span></label>
                            <select id="nama_tempat" class="form-select" required>
                                <option selected disabled>Pilih nama tempat futsal...</option>
                                <option value="1">Champion Futsal</option>
                                <option value="2">Elang Futsal</option>
                                <option value="3">Vini Vidi Vici FUtsal</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold text-dark h6">Ceklis jam operasional yang diinginkan!</label>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        00.00 - 01.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        01.00 - 02.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        02.00 - 03.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        03.00 - 04.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        04.00 - 05.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        05.00 - 06.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        06.00 - 07.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        07.00 - 08.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        08.00 - 09.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        09.00 - 10.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        10.00 - 11.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        11.00 - 12.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        12.00 - 13.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        13.00 - 14.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        14.00 - 15.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        15.00 - 16.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        16.00 - 17.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        17.00 - 18.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        18.00 - 19.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        19.00 - 20.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        21.00 - 22.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        22.00 - 23.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="">
                                    <label class="form-check-label" for="">
                                        23.00 - 00.00
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3 mb-2">
                    <div class="mr-3">
                        <a class="btn btn-danger" href="{{ route('lapangan.index') }}" role="button">Kembali</a>
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