@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Tambah Kompetisi Sekolah</h3>
                <p class="fs-6" style="color: #FCE700;">Tambahkan daftar kompetisi antar sekolah dengan mengisi formulir di
                    bawah!</p>
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama-kompetisi-sekolah" class="form-label text-dark">Nama Kompetisi</label>
                                <input type="text" class="form-control" id="nama-kompetisi-sekolah"
                                    placeholder="Tuliskan nama kompetisi...">
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">        
                                            <label for="mulai-kompetisi-sekolah" class="form-label text-dark">Mulai Kompetisi</label>
                                            <input type="date" class="form-control" id="mulai-kompetisi-sekolah">         
                                    </div>
                                    <div class="col-md-6">
                                            <label for="akhir-kompetisi-sekolah" class="form-label text-dark">Akhir Kompetisi</label>
                                            <input type="date" class="form-control" id="akhir-kompetisi-sekolah"> 
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat-kompetisi-sekolah" class="form-label text-dark">Alamat Kompetisi</label>
                                <textarea class="form-control" id="alamat-kompetisi-sekolah" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="logo-kompetisi-sekolah" class="form-label text-dark">Logo Kompetisi</label>
                                <input type="file" class="form-control" id="logo-kompetisi-sekolah"
                                    placeholder="Gambar logo kompetisi anda">
                            </div>
                            <div class="mb-3">
                                <label class="text-dark" for="sekolah">Pilih Kategori Sekolah</label>
                                <select class="form-select" id="sekolah" aria-label="Default select example">
                                    <option selected disabled>Pilih kategori sekolah yang anda inginkan</option>
                                    <option value="1">Sekolah Dasar (SD)</option>
                                    <option value="2">Sekolah Menengah Pertama (SMP)</option>
                                    <option value="3">Sekolah Menengah Atas / Kejuruan (SMA/SMK)</option>
                                    <option value="4">Universitas</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="detail-kompetisi-sekolah" class="form-label text-dark">Detail Kompetisi</label>
                                <textarea class="form-control" id="detail-kompetisi-sekolah" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3 mb-2">
                        <div class="mr-3">
                            <a class="btn btn-danger" href="{{ route('tournament.sekolah') }}" role="button">Kembali</a>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-green-hover">Tambahkan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
