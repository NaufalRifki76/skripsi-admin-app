@extends('layout.index')

@section('content')

<div class="card shadow">
    <div class="card-body">
        <div class="row">
            <h3 class="mb-3">Tambah Daftar Jam Operasional Lapangan</h3>
            <p class="fs-6" style="color: #FCE700;">Tambahkan daftar jam operasional lapangan yang diingin dengan mengisi formulir di bawah!</p>
            <form action="{{route('store-hours-venue')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="tournament_name" class="form-label fw-bold text-dark h6">Nama Tempat Futsal <span
                                class="text-danger">*</span></label>
                            <select id="nama_tempat" class="form-select" name="venue_id" required>
                                <option selected disabled>Pilih nama tempat futsal...</option>
                                @foreach ($venue as $key => $venues)
                                <option value="{{$venues->id}}">{{$venues->venue_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold text-dark h6">Ceklis jam operasional yang diinginkan!</label>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up00">
                                    <label class="form-check-label" for="">
                                        00.00 - 01.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up01">
                                    <label class="form-check-label" for="">
                                        01.00 - 02.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up02">
                                    <label class="form-check-label" for="">
                                        02.00 - 03.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up03">
                                    <label class="form-check-label" for="">
                                        03.00 - 04.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up04">
                                    <label class="form-check-label" for="">
                                        04.00 - 05.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up05">
                                    <label class="form-check-label" for="">
                                        05.00 - 06.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up06">
                                    <label class="form-check-label" for="">
                                        06.00 - 07.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up07">
                                    <label class="form-check-label" for="">
                                        07.00 - 08.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up08">
                                    <label class="form-check-label" for="">
                                        08.00 - 09.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up09">
                                    <label class="form-check-label" for="">
                                        09.00 - 10.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up10">
                                    <label class="form-check-label" for="">
                                        10.00 - 11.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up11">
                                    <label class="form-check-label" for="">
                                        11.00 - 12.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up12">
                                    <label class="form-check-label" for="">
                                        12.00 - 13.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up13">
                                    <label class="form-check-label" for="">
                                        13.00 - 14.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up14">
                                    <label class="form-check-label" for="">
                                        14.00 - 15.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up15">
                                    <label class="form-check-label" for="">
                                        15.00 - 16.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up16">
                                    <label class="form-check-label" for="">
                                        16.00 - 17.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up17">
                                    <label class="form-check-label" for="">
                                        17.00 - 18.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up18">
                                    <label class="form-check-label" for="">
                                        18.00 - 19.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up19">
                                    <label class="form-check-label" for="">
                                        19.00 - 20.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up20">
                                    <label class="form-check-label" for="">
                                        20.00 - 21.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up21">
                                    <label class="form-check-label" for="">
                                        21.00 - 22.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up22">
                                    <label class="form-check-label" for="">
                                        22.00 - 23.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="" name="up23">
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
                        <a class="btn btn-danger" href="{{ route('index-venue') }}" role="button">Kembali</a>
                    </div>
                    <div class="">
                        <button type="button" class="btn-green-hover jamOperasional">Tambahkan</button>
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
        $("form .jamOperasional").click(function(e) {
            let $form = $(this).closest('form');
            Swal.fire({
                title: 'Apakah data yang anda tambahkan sudah benar?',
                text: "Pastikan jam operasional yang anda pilih sudah benar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#62B6B7',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Tambahkan!',
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