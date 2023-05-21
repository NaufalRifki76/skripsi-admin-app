@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3>Edit Data Lapangan</h3>
                <p class="fs-6 mb-3" style="color: #FCE700;">Edit data lapangan dengan mengisi formulir di
                    bawah!</p>
                <form action="" method="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark fw-bold h6">Nama Tempat Futsal
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control bg-white" required id="venue_name"
                                    name="venue_name" placeholder="Nama lapangan anda...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark fw-bold h6">Foto Lapangan
                                    <span class="text-danger">*</span></label>
                                <input type="file" class="form-control bg-white" accept=".jpg, .jpeg, .png"
                                    id="venue_photo_base64" name="venue_photo_base64" required
                                    placeholder="Jumlah lapangan tersedia...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark fw-bold h6">Alamat <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" required placeholder="Alamat lapangan anda..." id="venue_address" name="venue_address"
                                    rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark fw-bold h6">Deskripi <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" required placeholder="Deskripsi lapangan anda..." id="venue_desc" name="venue_desc"
                                    rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark fw-bold h6">Jam Buka <span
                                        class="text-danger">*</span></label>
                                <input type="time" required class="form-control bg-white" id="open_hour" name="open_hour"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark fw-bold h6">Jam Tutup <span
                                        class="text-danger">*</span></label>
                                <input type="time" required class="form-control bg-white" id="close_hour"
                                    name="close_hour" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="inputState" class="form-label h6 text-dark fw-bold">Nama Rekening <span
                                        class="text-danger">*</span></label>
                                <input type="text" required class="form-control bg-white" id="bank" name="bank"
                                    name="" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="inputState" class="form-label h6 text-dark fw-bold">Nomor Rekening <span
                                        class="text-danger">*</span></label>
                                <input type="number" required class="form-control bg-white" id="bank_acc_no"
                                    name="bank_acc_no" name="" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="inputState" class="form-label h6 text-dark fw-bold">Atas Nama Rekening <span
                                        class="text-danger">*</span></label>
                                <input type="text" required class="form-control bg-white" id="bank_acc_name"
                                    name="bank_acc_name" name="" placeholder="">
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
                                            name="drinks">
                                        <label class="form-check-label" for="">
                                            Minuman
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="1" id="locker_room"
                                            name="locker_room">
                                        <label class="form-check-label" for="">
                                            Ruang Ganti
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="1" id="toilet"
                                            name="toilet">
                                        <label class="form-check-label" for="">
                                            Toilet
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="1"
                                            id="parking_space" name="parking_space">
                                        <label class="form-check-label" for="">
                                            Parkir Kendaraan
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="1" id="wifi"
                                            name="wifi">
                                        <label class="form-check-label" for="">
                                            Wifi
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="1" id="perlengkapan"
                                            name="rent_equipments">
                                        <label class="form-check-label" for="">
                                            Sewa Perlengkapan
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Data Lapangan Tersedia --}}
                        <div class="row mb-3">
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
                        </div>

                        {{-- Perlengkapan Tersedia --}}
                        <div class="row mb-3">
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
                        </div>

                        {{-- Data Jam Operasional --}}
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h5 class="fw-bold mb-3 mt-2">Data Jam Operasional (centang jam operasional anda.)</h5>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        00.00 - 01.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        01.00 - 02.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        02.00 - 03.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        03.00 - 04.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        04.00 - 05.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        05.00 - 06.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        06.00 - 07.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        07.00 - 08.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        08.00 - 09.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        09.00 - 10.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        10.00 - 11.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        11.00 - 12.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        12.00 - 13.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        13.00 - 14.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        14.00 - 15.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        15.00 - 16.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        16.00 - 17.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        17.00 - 18.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        18.00 - 19.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        19.00 - 20.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        21.00 - 22.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
                                    <label class="form-check-label" for="">
                                        22.00 - 23.00
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id=""
                                        name="">
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
