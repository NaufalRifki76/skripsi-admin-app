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
                                    value="Naufal Faris">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">No Telpon Pemesan</label>
                                <input type="number" class="form-control" disabled id="" name=""
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Email Pemesan</label>
                                <input type="email" class="form-control" disabled id="" name=""
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Nama Tempat</label>
                                <input type="text" class="form-control" disabled id="" name=""
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Lapangan Yang Dipilih</label>
                                <input type="text" class="form-control" disabled id="" name=""
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Tanggal pemesanan</label>
                                <input type="date" class="form-control" disabled id="" name=""
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Jam Bermain</label>
                                <input type="time" class="form-control" disabled id="" name=""
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Total Biaya</label>
                                <input type="number" class="form-control" disabled id="" name=""
                                    value="">
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
                                    value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label text-dark">Catatan (Jika Ada)</label>
                                <textarea class="form-control" disabled placeholder="Leave a comment here" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3 mb-2">      
                            <a class="btn btn-danger" href="{{ route('data-pemesanan.index') }}"
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
