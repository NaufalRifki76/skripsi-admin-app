@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Tambah Kompetisi Umur</h3>
                <p class="fs-6" style="color: #FCE700;">Tambahkan daftar kompetisi antar umur dengan mengisi formulir di
                    bawah!</p>
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama-kompetisi-umur" class="form-label text-dark">Nama Kompetisi</label>
                                <input type="text" class="form-control" id="nama-kompetisi-umur"
                                    placeholder="Tuliskan nama kompetisi...">
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">        
                                            <label for="mulai-kompetisi-umur" class="form-label text-dark">Mulai Kompetisi</label>
                                            <input type="date" class="form-control" id="mulai-kompetisi-umur">         
                                    </div>
                                    <div class="col-md-6">
                                            <label for="akhir-kompetisi-umur" class="form-label text-dark">Akhir Kompetisi</label>
                                            <input type="date" class="form-control" id="akhir-kompetisi-umur"> 
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat-kompetisi-umur" class="form-label text-dark">Alamat Kompetisi</label>
                                <textarea class="form-control" id="alamat-kompetisi-umur" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="logo-kompetisi-umur" class="form-label text-dark">Logo Kompetisi</label>
                                <input type="file" class="form-control" id="logo-kompetisi-umur"
                                    placeholder="Gambar logo kompetisi anda">
                            </div>
                            <div class="mb-3">
                                <label class="text-dark" for="umur">Pilih Kategori Umur</label>
                                <select class="form-select" id="umur" aria-label="Default select example">
                                    <option selected disabled>Pilih kategori umur yang anda inginkan</option>
                                    <option value="1">U-16</option>
                                    <option value="2">U-19</option>
                                    <option value="3">U-23</option>
                                    <option value="4">Tidak Ada Batasan Usia</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="detail-kompetisi-umur" class="form-label text-dark">Detail Kompetisi</label>
                                <textarea class="form-control" id="detail-kompetisi-umur" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3 mb-2">
                        <div class="mr-3">
                            <a class="btn btn-danger" href="{{ route('tournament.umur') }}" role="button">Kembali</a>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-green-hover">Tambahkan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
