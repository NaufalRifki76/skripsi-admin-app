@extends('layout.index')

@section('content')
    <style>
        .background-img-riwayat {
            background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url("Assets/bg/bg.jpg");
        }
    </style>

    <div class="container">
        <div class="py-5">
            <p class="h1 fw-bold text-center" style="color: #439A97">Detail Informasi Pendaftaran Mitra</p>
            <p class="h5 fw-normal text-center" style="color: #FCE700">Detail informasi formulir pendaftaran mitra terdapat di bawah!</p>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card shadow-lg background-img-riwayat mb-5" style="border: none; border-radius: 12px">
                    <div class="card-body">
                        <form action="" method="" enctype="">
                            {{-- Data Venue --}}
                            <div class="row">
                                <h3 class="fw-bold text-white mb-3">Informasi Lapangan Yang Anda Daftarkan</h3>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Nama Lapangan <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-white" disabled id="venue_name" value="{{$mitra->venue_name}}"
                                            name="venue_name" placeholder="Nama lapangan anda...">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label h5 text-white">Alamat <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" disabled placeholder="Alamat lapangan anda..." id="venue_address" name="venue_address"
                                            rows="3">{{$mitra->venue_address}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Jam Buka <span
                                                class="text-danger">*</span></label>
                                        <input type="time" disabled class="form-control bg-white" id="open_hour" value="{{$mitra->open_hour}}"
                                            name="open_hour" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Foto Lapangan (.jpg,
                                            .png)</label>
                                        {{-- <input type="file" class="form-control bg-white" disabled accept=".jpg, .jpeg, .png"
                                            id="venue_photo_base64" name="venue_photo_base64"
                                            placeholder="Jumlah lapangan tersedia..."> --}}
                                            <div class="card-image card-circular">
                                                <img class="rounded img-fluid" src="data:image/png;base64,{{$venue_photo->venue_photo_base64}}">
                                            </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label h5 text-white">Deskripsi Lapangan <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" disabled placeholder="Deskripsi lapangan anda..." id="venue_desc" name="venue_desc"
                                            rows="3">{{$mitra->venue_desc}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Jam Tutup <span
                                                class="text-danger">*</span></label>
                                        <input type="time" disabled class="form-control bg-white" id="close_hour" value="{{$mitra->close_hour}}"
                                            name="close_hour" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Nama Rekening <span
                                                class="text-danger">*</span></label>
                                        <input type="text" disabled class="form-control bg-white" id="" value="{{$mitra->bank}}"
                                            name="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Nomor Rekening <span
                                                class="text-danger">*</span></label>
                                        <input type="number" disabled class="form-control bg-white" id="" value="{{$mitra->bank_acc_no}}"
                                            name="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Atas Nama Rekening <span
                                                class="text-danger">*</span></label>
                                        <input type="text" disabled class="form-control bg-white" id="" value="{{$mitra->bank_acc_name}}"
                                            name="" placeholder="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label h5 text-white">Fasilitas Lapangan (Ceklis
                                        fasilitas yang
                                        tersedia di tempat anda).</label>
                                    <div class="row px-4">
                                        <div class="col-md-4">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" disabled type="checkbox" value=""
                                                @if ($mitra->drinks != null)
                                                    @checked(true)
                                                @endif
                                                    id="drinks" name="drinks">
                                                <label class="form-check-label text-white" for="">
                                                    Minuman
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" disabled type="checkbox" value=""
                                                @if ($mitra->locker_room != null)
                                                    @checked(true)
                                                @endif
                                                    id="locker_room" name="locker_room">
                                                <label class="form-check-label text-white" for="">
                                                    Ruang Ganti
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" disabled type="checkbox" value=""
                                                @if ($mitra->toilet != null)
                                                    @checked(true)
                                                @endif
                                                    id="toilet" name="toilet">
                                                <label class="form-check-label text-white" for="">
                                                    Toilet
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" disabled type="checkbox" value=""
                                                @if ($mitra->parking_space != null)
                                                    @checked(true)
                                                @endif
                                                    id="parking_space" name="parking_space">
                                                <label class="form-check-label text-white" for="">
                                                    Parkir Kendaraan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check mb-3"> 
                                                <input class="form-check-input" disabled type="checkbox" value=""
                                                @if ($mitra->wifi != null)
                                                    @checked(true)
                                                @endif
                                                    id="wifi" name="wifi">
                                                <label class="form-check-label text-white" for="">
                                                    Wifi
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" disabled type="checkbox" value=""
                                                @if ($mitra->rent_equipments != null)
                                                    @checked(true)
                                                @endif
                                                    id="perlengkapan" name="rent_equipments">
                                                <label class="form-check-label text-white" for="">
                                                    Sewa Perlengkapan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Data Lapangan Tersedia --}}
                            @foreach ($field_detail as $key => $detail)
                                <div class="row fieldGroup mb-3">
                                    <div class="col-md-10">
                                        <h3 class="fw-bold mb-3 mt-2 text-white">Data Lapangan Tersedia</h3>
                                    </div>
                                    {{-- <div class="col-md-2 text-end">
                                        <button disabled type="button" class="btn-green2-hover addMore shadow-lg"
                                            style="margin-top: 10px;"><i class="fa-solid fa-plus"></i></button>
                                    </div> --}}
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="inputState" class="form-label h5 text-white">Nama Lapangan <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control bg-white" disabled id="field_name" value="{{$detail->field_name}}"
                                                name="field_name[]" placeholder="Nama lapangan anda...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="inputState" class="form-label h5 text-white">Foto Lapangan (.jpg,
                                                .png)</label>
                                            {{-- <input type="file" class="form-control bg-white" disabled accept=".jpg, .jpeg, .png"
                                                id="field_photo_base64" name="field_photo_base64[]"
                                                placeholder="Jumlah lapangan tersedia..."> --}}
                                                <div class="card-image card-circular">
                                                    <img class="rounded img-fluid" src="data:image/png;base64,{{$field_photo[$key]}}">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="inputState" class="form-label h5 text-white">Harga Sewa
                                                Per-Jam <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="">Rp</span>
                                                <input type="number" class="form-control" disabled id="field_cost_hour" value="{{$detail->field_cost_hour}}"
                                                    name="field_cost_hour[]" aria-describedby="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- Perlengkapan Tersedia --}}
                            @foreach ($rent_items as $flag => $rent)
                                <div class="row fieldGroup2 showthis-upload">
                                    <div class="col-md-10">
                                        <h3 class="fw-bold mb-3 mt-2 text-white">Data Perlengkapan Tersedia</h3>
                                    </div>
                                    <div class="col-md-2 text-end">
                                        <button disabled type="button" class="btn-green2-hover addMore2 shadow-lg"
                                            style="margin-top: 10px;"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="namaPerlengkapan" class="form-label h5 text-white">Nama Perlengkapan
                                                <span class="text-danger">*</span></label>
                                            <select id="namaPerlengkapan" name="item_id[]" disabled class="form-select">
                                                <option disabled value="{{$rent->id}}">{{$rent->item_name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="inputState" class="form-label h5 text-white">Jumlah <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control bg-white" disabled id="item_qty" value="{{$rent->item_qty}}"
                                                name="item_qty[]" placeholder="Jumlah perlengkapan...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="inputState" class="form-label h5 text-white">Harga Sewa
                                                Per-Jam <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="">Rp</span>
                                                <input type="number" class="form-control" disabled id="item_rent_cost" name="item_rent_cost[]" value="{{$rent->item_rent_cost}}"
                                                    aria-describedby="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="text-center">
                                <a href="{{ route('index-view') }}">
                                    <button type="button" class="btn btn-danger mt-4">Kembali</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    @push('css')
        {{-- Select --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    @endpush

    @push('script')
        {{-- Select2 --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            // select
            $(document).ready(function() {
                $('#namaPerlengkapan').select2({
                    theme: "bootstrap-5",
                });
            });

            // script untuk Data Lapangan Tersedia
            $(document).ready(function() {
                // membatasi jumlah inputan
                var maxGroup = 10;

                //melakukan proses multiple input 
                $(".addMore").click(function() {
                    if ($('body').find('.fieldGroup').length < maxGroup) {
                        var fieldHTML = '<div class="row fieldGroup">' + $(".fieldGroupCopy").html() +
                            '</div>';
                        $('body').find('.fieldGroup:last').after(fieldHTML);
                    } else {
                        alert('Maximum ' + maxGroup + ' groups are allowed.');
                    }
                });

                //remove fields group
                $("body").on("click", ".remove", function() {
                    $(this).parents(".fieldGroup").remove();
                });
            });

            // Script untuk data perlengkapan
            $(document).ready(function() {
                // membatasi jumlah inputan
                var maxGroup2 = 10;

                //melakukan proses multiple input 
                $(".addMore2").click(function() {
                    if ($('body').find('.fieldGroup2').length < maxGroup2) {
                        var fieldHTML = '<div class="row fieldGroup2">' + $(".fieldGroupCopy2").html() +
                            '</div>';
                        $('body').find('.fieldGroup2:last').after(fieldHTML);
                    } else {
                        alert('Maximum ' + maxGroup2 + ' groups are allowed.');
                    }
                });

                //remove fields group
                $("body").on("click", ".remove2", function() {
                    $(this).parents(".fieldGroup2").remove();
                });
            });
            // Cek box perlengkapan
            $(document).ready(function() {
                $('.showthis-upload').hide();

                //show it when the checkbox is clicked
                $('#perlengkapan').on('click', function() {
                    if ($(this).prop('checked')) {
                        $('.showthis-upload').fadeIn();
                    } else {
                        $('.showthis-upload').hide();
                    }
                });
            });
        </script>
    @endpush
@endsection
