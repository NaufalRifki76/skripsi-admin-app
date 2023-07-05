@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3>Edit Data Lapangan</h3>
                <p class="fs-6 mb-3" style="color: #FCE700;">Edit data lapangan dengan mengisi formulir di
                    bawah!</p>
                <form action="{{route('editvenue-store', ['id' => $id])}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark fw-bold h6">Nama Tempat Futsal
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control bg-white" value="{{$data->venue_name}}" required id="venue_name"
                                    name="venue_name" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark fw-bold h6">Foto Lapangan</label>
                                <input type="file" class="form-control bg-white" accept=".jpg, .jpeg, .png"
                                    id="venue_photo_base64" name="venue_photo_base64">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark fw-bold h6">Alamat <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" required id="venue_address" name="venue_address"
                                    rows="3">{{$data->venue_address}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark fw-bold h6">Deskripi <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" required id="venue_desc" name="venue_desc"
                                    rows="3">{{$data->venue_desc}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark fw-bold h6">Jam Buka <span
                                        class="text-danger">*</span></label>
                                <input type="time" required value="{{$data->open_hour}}" class="form-control bg-white" id="open_hour" name="open_hour">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark fw-bold h6">Jam Tutup <span
                                        class="text-danger">*</span></label>
                                <input type="time" required value="{{$data->close_hour}}" class="form-control bg-white" id="close_hour"
                                    name="close_hour">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="inputState" class="form-label h6 text-dark fw-bold">Nama Rekening <span
                                        class="text-danger">*</span></label>
                                <input type="text" required value="{{$data->bank}}" class="form-control bg-white" id="bank" name="bank">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="inputState" class="form-label h6 text-dark fw-bold">Nomor Rekening <span
                                        class="text-danger">*</span></label>
                                <input type="number" required value="{{$data->bank_acc_no}}" class="form-control bg-white" id="bank_acc_no"
                                    name="bank_acc_no">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="inputState" class="form-label h6 text-dark fw-bold">Atas Nama Rekening <span
                                        class="text-danger">*</span></label>
                                <input type="text" required value="{{$data->bank_acc_name}}" class="form-control bg-white" id="bank_acc_name"
                                    name="bank_acc_name">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h6 text-dark fw-bold">Fasilitas Lapangan (Ceklis
                                fasilitas yang
                                tersedia di tempat anda).</label>
                            <div class="row px-4">
                                <div class="col-md-4">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="1" id="drinks"
                                        @if ($data->drinks  == 1)
                                            checked
                                        @endif    
                                        name="drinks">
                                        <label class="form-check-label" for="">
                                            Minuman
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="1" id="locker_room"
                                        @if ($data->locker_room  == 1)
                                            checked
                                        @endif    
                                        name="locker_room">
                                        <label class="form-check-label" for="">
                                            Ruang Ganti
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="1" id="toilet"
                                        @if ($data->toilet  == 1)
                                            checked
                                        @endif    
                                        name="toilet">
                                        <label class="form-check-label" for="">
                                            Toilet
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="1"
                                        @if ($data->parking_space  == 1)
                                            checked
                                        @endif    
                                        id="parking_space" name="parking_space">
                                        <label class="form-check-label" for="">
                                            Parkir Kendaraan
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="1" id="wifi"
                                        @if ($data->wifi  == 1)
                                            checked
                                        @endif    
                                        name="wifi">
                                        <label class="form-check-label" for="">
                                            Wifi
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="1" id="rent_equipments"
                                        @if ($data->rent_equipments  == 1)
                                            checked
                                        @endif    
                                        name="rent_equipments">
                                        <label class="form-check-label" for="">
                                            Sewa Perlengkapan
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Data Lapangan Tersedia --}}
                        {{-- <div class="row mb-3">
                            <div class="col-md-12">
                                <h5 class="fw-bold mb-3 mt-2">Data Lapangan Tersedia</h5>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="inputState" class="form-label h6 text-dark fw-bold">Nama Lapangan <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-white" required id="field_name"
                                        name="field_name[]" placeholder="Nama lapangan anda...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="inputState" class="form-label h6 text-dark fw-bold">Foto Lapangan (.jpg,
                                        .png)</label>
                                    <input type="file" class="form-control bg-white" accept=".jpg, .jpeg, .png"
                                        id="field_photo_base64" name="field_photo_base64[]" required
                                        placeholder="Jumlah lapangan tersedia...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="inputState" class="form-label h6 text-dark fw-bold">Harga Sewa
                                        Per-Jam <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="">Rp</span>
                                        <input type="number" class="form-control" required id="field_cost_hour"
                                            name="field_cost_hour[]" aria-describedby="">
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- Perlengkapan Tersedia --}}
                        {{-- <div class="row mb-3">
                            <div class="col-md-12">
                                <h5 class="fw-bold mb-3 mt-2">Data Perlengkapan Tersedia</h5>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="namaPerlengkapan" class="form-label h6 text-dark fw-bold">Nama Perlengkapan
                                        <span class="text-danger">*</span></label>
                                    <select id="namaPerlengkapan" name="item_id[]" required class="form-select">
                                        <option disabled selected>Pilih perlengkapan...</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="inputState" class="form-label h6 text-dark fw-bold">Jumlah <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-white" required id="item_qty"
                                        name="item_qty[]" placeholder="Jumlah perlengkapan...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="inputState" class="form-label h6 text-dark fw-bold">Harga Sewa
                                        Per-Jam <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="">Rp</span>
                                        <input type="number" class="form-control" required id="item_rent_cost"
                                            name="item_rent_cost[]" aria-describedby="">
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- Data Jam Operasional --}}
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h5 class="fw-bold mb-3 mt-2">Data Jam Operasional (centang jam operasional anda.)</h5>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up00"
                                    @if ($hours->up00  == 1)
                                        checked
                                    @endif
                                        name="up00">
                                    <label class="form-check-label" for="">
                                        00.00 - 01.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up01"
                                    @if ($hours->up01  == 1)
                                        checked
                                    @endif
                                        name="up01">
                                    <label class="form-check-label" for="">
                                        01.00 - 02.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up02"
                                    @if ($hours->up02  == 1)
                                        checked
                                    @endif
                                        name="up02">
                                    <label class="form-check-label" for="">
                                        02.00 - 03.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up03"
                                    @if ($hours->up03  == 1)
                                        checked
                                    @endif
                                        name="up03">
                                    <label class="form-check-label" for="">
                                        03.00 - 04.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up04"
                                    @if ($hours->up04  == 1)
                                        checked
                                    @endif
                                        name="up04">
                                    <label class="form-check-label" for="">
                                        04.00 - 05.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up05"
                                    @if ($hours->up05  == 1)
                                        checked
                                    @endif
                                        name="up05">
                                    <label class="form-check-label" for="">
                                        05.00 - 06.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up06"
                                    @if ($hours->up06  == 1)
                                        checked
                                    @endif
                                        name="up06">
                                    <label class="form-check-label" for="">
                                        06.00 - 07.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up07"
                                    @if ($hours->up07  == 1)
                                        checked
                                    @endif
                                        name="up07">
                                    <label class="form-check-label" for="">
                                        07.00 - 08.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up08"
                                    @if ($hours->up08  == 1)
                                        checked
                                    @endif
                                        name="up08">
                                    <label class="form-check-label" for="">
                                        08.00 - 09.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up09"
                                    @if ($hours->up09  == 1)
                                        checked
                                    @endif
                                        name="up09">
                                    <label class="form-check-label" for="">
                                        09.00 - 10.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up10"
                                    @if ($hours->up10  == 1)
                                        checked
                                    @endif
                                        name="up10">
                                    <label class="form-check-label" for="">
                                        10.00 - 11.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up11"
                                    @if ($hours->up11  == 1)
                                        checked
                                    @endif
                                        name="up11">
                                    <label class="form-check-label" for="">
                                        11.00 - 12.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up12"
                                    @if ($hours->up12  == 1)
                                        checked
                                    @endif
                                        name="up12">
                                    <label class="form-check-label" for="">
                                        12.00 - 13.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up13"
                                    @if ($hours->up13  == 1)
                                        checked
                                    @endif
                                        name="up13">
                                    <label class="form-check-label" for="">
                                        13.00 - 14.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up14"
                                    @if ($hours->up14  == 1)
                                        checked
                                    @endif
                                        name="up14">
                                    <label class="form-check-label" for="">
                                        14.00 - 15.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up15"
                                    @if ($hours->up15  == 1)
                                        checked
                                    @endif
                                        name="up15">
                                    <label class="form-check-label" for="">
                                        15.00 - 16.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up16"
                                    @if ($hours->up16  == 1)
                                        checked
                                    @endif
                                        name="up16">
                                    <label class="form-check-label" for="">
                                        16.00 - 17.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up17"
                                    @if ($hours->up17  == 1)
                                        checked
                                    @endif
                                        name="up17">
                                    <label class="form-check-label" for="">
                                        17.00 - 18.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up18"
                                    @if ($hours->up18  == 1)
                                        checked
                                    @endif
                                        name="up18">
                                    <label class="form-check-label" for="">
                                        18.00 - 19.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up19"
                                    @if ($hours->up19  == 1)
                                        checked
                                    @endif
                                        name="up19">
                                    <label class="form-check-label" for="">
                                        19.00 - 20.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up20"
                                    @if ($hours->up20  == 1)
                                        checked
                                    @endif
                                        name="up20">
                                    <label class="form-check-label" for="">
                                        20.00 - 22.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up21"
                                    @if ($hours->up21  == 1)
                                        checked
                                    @endif
                                        name="up21">
                                    <label class="form-check-label" for="">
                                        21.00 - 22.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up22"
                                    @if ($hours->up22  == 1)
                                        checked
                                    @endif
                                        name="up22">
                                    <label class="form-check-label" for="">
                                        22.00 - 23.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="up23"
                                    @if ($hours->up23  == 1)
                                        checked
                                    @endif
                                        name="up23">
                                    <label class="form-check-label" for="">
                                        23.00 - 00.00
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3 mb-2">
                        <div class="mr-3">
                            <a class="btn btn-danger" href="{{ route('index-venue') }}" role="button">Kembali</a>
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
