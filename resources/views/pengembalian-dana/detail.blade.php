@extends('layout.index')
@php
    use App\Models\RefundHours;
    use App\Models\Venue;
    use App\Models\FieldDetail;
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
                        @if ($refund->confirmation == 0)
                            <h5><span class="badge bg-warning text-white">Pending</span></h5>
                        @elseif ($refund->confirmation == 1)
                            <h5><span class="badge bg-info text-white">Dalam Proses</span></h5>
                        @elseif ($refund->confirmation == 2)
                            <h5><span class="badge bg-success text-white">Diterima</span></h5>
                        @elseif ($refund->confirmation == 3)
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
                        @php
                            $venue = Venue::where('id', $refund->venue_id)->first();
                        @endphp
                        <input type="text" disabled class="form-control bg-white" id="" value="{{$venue->venue_name}}" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama-lapangan" class="form-label h5">Lapangan Yang Di Pilih</label>
                            @php
                                $field = FieldDetail::where('id', $refund->field_detail_id)->first();
                            @endphp
                            <input type="text" disabled class="form-control bg-white" id="" value="{{$field->field_name}}" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputState" class="form-label h5">Tanggal Pemesanan
                            Lapangan </label>
                        <input type="date" class="form-control bg-white" disabled id="ExpiredDate" value="{{$refund->order_date}}">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputJam" class="form-label h5">Jam Bermain </label>
                            @php
                                $hours = RefundHours::where('refund_id', $refund->id)->get();
                                for ($i=0; $i<count($hours) ; $i++) {
                                    if ($hours[$i]->hours_initial == 0) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">00.00 - 01.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 1) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">01.00 - 02.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 2) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">02.00 - 03.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 3) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">03.00 - 04.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 4) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">04.00 - 05.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 5) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">05.00 - 06.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 6) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">06.00 - 06.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 7) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">07.00 - 08.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 8) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">08.00 - 09.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 9) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">09.00 - 10.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 10) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">10.00 - 11.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 11) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">11.00 - 12.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 12) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">12.00 - 13.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 13) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">13.00 - 14.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 14) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">14.00 - 15.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 15) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">15.00 - 16.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 16) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">16.00 - 17.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 17) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">17.00 - 18.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 18) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">18.00 - 19.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 19) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">19.00 - 20.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 20) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">20.00 - 21.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 21) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">21.00 - 22.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 22) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">22.00 - 23.00</option>
                                        </select>';
                                    } elseif ($hours[$i]->hours_initial == 23) {
                                        echo '
                                        <select class="form-control mb-1" id="inputJam" disabled class="form-select bg-white">
                                            <option value="">23.00 - 00.00</option>
                                        </select>';
                                    }
                                }
                            @endphp
                            {{-- <select  id="inputJam" disabled class="form-select bg-white">
                                <option value="">00.00 - 01.00</option>
                            </select> --}}
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputState" class="form-label h5">Harga Sewa</label>
                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="{{$field->field_cost_hour}}">
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="inputState" class="form-label h5">Biaya Pemesanan</label>
                        <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="{{$refund->price_sum - 5000}}">
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
        </script>
    @endpush
@endsection
