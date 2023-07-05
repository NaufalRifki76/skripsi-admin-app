@extends('layout.index')

@section('content')
@include('data-pemesanan.modal-bukti-pembayaran')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Data Pemesanan</h3>
                <p class="fs-6" style="color: #FCE700;">Detail data pemesanan ada di bawah!</p>
                <form action="" method="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Nama Pemesan</label>
                                <input type="text" class="form-control" disabled id="" name=""
                                    value="{{$data->cust_name}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">No Telpon Pemesan</label>
                                <input type="number" class="form-control" disabled id="" name=""
                                    value="{{$data->cust_number}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Email Pemesan</label>
                                <input type="email" class="form-control" disabled id="" name=""
                                    value="{{$data->cust_email}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Nama Tempat</label>
                                <input type="text" class="form-control" disabled id="" name=""
                                    value="{{$data->venue_name}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Lapangan Yang Dipilih</label>
                                <input type="text" class="form-control" disabled id="" name=""
                                    value="{{$data->field}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Tanggal pemesanan</label>
                                <input type="date" class="form-control" disabled id="" name=""
                                    value="{{$data->order_date}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Jam Bermain</label>
                                @if ($hours->up00 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="00.00 - 01.00">
                                @endif
                                @if ($hours->up01 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="01.00 - 02.00">
                                @endif
                                @if ($hours->up02 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="02.00 - 03.00">
                                @endif
                                @if ($hours->up03 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="03.00 - 04.00">
                                @endif
                                @if ($hours->up04 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="04.00 - 05.00">
                                @endif
                                @if ($hours->up05 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="05.00 - 06.00">
                                @endif
                                @if ($hours->up06 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="06.00 - 07.00">
                                @endif
                                @if ($hours->up07 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="07.00 - 08.00">
                                @endif
                                @if ($hours->up08 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="08.00 - 09.00">
                                @endif
                                @if ($hours->up09 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="09.00 - 10.00">
                                @endif
                                @if ($hours->up10 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="10.00 - 11.00">
                                @endif
                                @if ($hours->up11 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="11.00 - 12.00">
                                @endif
                                @if ($hours->up12 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="12.00 - 13.00">
                                @endif
                                @if ($hours->up13 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="13.00 - 14.00">
                                @endif
                                @if ($hours->up14 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="14.00 - 15.00">
                                @endif
                                @if ($hours->up15 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="15.00 - 16.00">
                                @endif
                                @if ($hours->up16 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="16.00 - 17.00">
                                @endif
                                @if ($hours->up17 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="17.00 - 18.00">
                                @endif
                                @if ($hours->up18 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="18.00 - 19.00">
                                @endif
                                @if ($hours->up19 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="19.00 - 20.00">
                                @endif
                                @if ($hours->up20 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="20.00 - 21.00">
                                @endif
                                @if ($hours->up21 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="21.00 - 22.00">
                                @endif
                                @if ($hours->up22 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="22.00 - 23.00">
                                @endif
                                @if ($hours->up23 == 1)
                                    <input type="text" class="form-control" disabled id="" name="" value="23.00 - 00.00">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Total Biaya</label>
                                <input type="number" class="form-control" disabled id="" name=""
                                    value="{{$data->price_sum}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Bukti Pembayaran</label><br>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#data-pemesanan"><i class="fa-solid fa-eye"></i></button>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Status Pemesanan</label>
                                <input type="text" class="form-control" disabled id="" name=""
                                @if ($data->confirmation == 0)
                                    value="Pending"
                                @elseif ($data->confirmation == 1)
                                    value="Diterima"
                                @elseif ($data->confirmation == 2)
                                    value="Ditolak"
                                @endif
                                >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Catatan (Jika Ada)</label>
                                <textarea class="form-control" disabled rows="3">{{$data->cancel_reason}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3 mb-2">      
                            <a class="btn btn-danger" href="{{ route('index-orders') }}"
                                type="button">Kembali</a>
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
