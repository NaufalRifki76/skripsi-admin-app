@extends('layout.index')
@php
    use App\Models\RefundHours;
@endphp
@section('content')
    <style>
        .background-img-riwayat {
            background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url("Assets/bg/bg.jpg");
        }
    </style>
    @include('pengembalian-dana.modal-bukti-pembayaran')
    <div class="container">
        <div class="py-3">
            {{-- <div class="mb-3">
            @include('session-flash')
        </div> --}}
            <p class="h1 fw-bold text-center" style="color: #439A97">Detail Data Pengembalian Dana</p>
            <p class="h5 fw-normal text-center" style="color: #FCE700">Halaman ini menampilkan detail data pengembalian dana dari user yang anda pilih!</p>
        </div>
        <div class="row">
            <div class="card shadow">
                <div class="card-body">
            <form action="">
                <div class="row mb-3">
                    <h4 class="fw-bold"> Data Diri Pemesan</h4>
                    <div class="col-md-6 mb-3">
                        <label for="inputState" class="form-label h5">Nama Pemesan</label>
                        <input type="text" class="form-control bg-white" disabled id="" value="{{$refund->name}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="h5">Status</label><br>
                        @if ($refund->status == 0)
                            <h5><span class="badge bg-warning text-white">Pending</span></h5>
                        @elseif ($refund->status == 1)
                            <h5><span class="badge bg-info text-white">Dalam Proses</span></h5>
                        @elseif ($refund->status == 2)
                            <h5><span class="badge bg-success text-white">Diterima</span></h5>
                        @elseif ($refund->status == 3)
                            <h5><span class="badge bg-danger text-white">Ditolak</span></h5>
                        @endif
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="h5">Bukti Transfer</label><br>
                        <button class="btn btn-primary text-white" type="button" data-bs-toggle="modal" data-bs-target="#bukti-transfer"><i class="fa-solid fa-eye"></i></button>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="inputState" class="form-label h5">No. Telepon</label>
                            <input type="text" class="form-control bg-white" disabled id="" value="{{$refund->no_telephone}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="inputState" class="form-label h5">Email</label>
                            <input type="text" class="form-control bg-white" disabled id="" value="{{$refund->email}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="inputState" class="form-label h5">Nama Bank </label>
                            <input type="text" class="form-control bg-white" disabled id="" value="{{$refund->bank}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="inputState" class="form-label h5">No Rekening </label>
                            <input type="text" class="form-control bg-white" disabled id="" value="{{$refund->bank_acc_no}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="inputState" class="form-label h5">Atas Nama Rekening </label>
                            <input type="text" class="form-control bg-white" disabled id="" value="{{$refund->bank_acc_name}}">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <h4 class="fw-bold">Lapangan Yang Dipesan</h4>
                    <div class="col-md-6">
                        <label for="nama-tempat" class="form-label h5">Nama Tempat </label>
                        <select id="nama-tempat" disabled class="form-select bg-white">
                            <option selected disabled>Pilih tempat melakukan pemesanan...</option>
                            <option value="1">Naufal Futsal</option>
                            <option value="2">Faris Futsal</option>
                            <option value="3">Ernest Futsal</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama-lapangan" class="form-label h5">Lapangan Yang Di Pilih
                                </label>
                            <select id="nama-lapangan" disabled class="form-select bg-white">
                                <option selected disabled>Pilih lapangan...</option>
                                <option value="1">Lapangan A</option>
                                <option value="2">Lapangan B</option>
                                <option value="3">Lapangan C</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputState" class="form-label h5">Tanggal Pemesanan
                            Lapangan </label>
                        <input type="date" class="form-control bg-white" disabled id="ExpiredDate" value="{{$refund->order_date}}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="inputJam" class="form-label h5">Jam Bermain </label>
                        <select id="inputJam" disabled class="form-select bg-white">
                            <option selected>Pilih jam anda bermain...</option>
                            <option selected value="1">09.00 - 10.00</option>
                            <option value="2">10.00 - 11.00</option>
                            <option value="3">11.00 - 12.00</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputState" class="form-label h5">Harga Sewa</label>
                        <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputState" class="form-label h5">Biaya Pemesanan</label>
                        <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputState" class="form-label h5">Total Biaya Yang Harus
                            Dibayar</label>
                        <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="{{$refund->price_sum}}">
                    </div>
                </div>
                <div class="text-center mt-4 mb-3">
                    <a href="{{ route('index-refund') }}"
                        class="btn btn-danger text-decoration-none">kembali</a>
                </div>
            </form>
                </div>
            </div>
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
                $('#nama-tempat').select2({
                    theme: "bootstrap-5",
                });
            });

            $(document).ready(function() {
                $('#nama-lapangan').select2({
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
