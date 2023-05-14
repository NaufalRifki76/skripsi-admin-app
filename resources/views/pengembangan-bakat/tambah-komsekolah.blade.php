@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Tambah Kompetisi Sekolah</h3>
                <p class="fs-6" style="color: #FCE700;">Tambahkan daftar kompetisi antar sekolah dengan mengisi formulir di
                    bawah!</p>
                <form action="{{route('tournament.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark">Nama Kompetisi</label>
                                <input type="text" class="form-control" id="tournament_name" name="tournament_name"
                                    placeholder="Tuliskan nama kompetisi...">
                            </div>
                            <div class="mb-3">
                                <label for="entry_fee" class="form-label text-dark">Biaya Pendaftaran (per-tim)</label>
                                <input type="number" class="form-control" id="entry_fee" name="entry_fee"
                                    placeholder="Tuliskan biaya pendaftaran kompetisi...">
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">        
                                        <label for="registration_start" class="form-label text-dark">Awal Pendaftaran</label>
                                        <input type="date" class="form-control" id="registration_start" name="registration_start">         
                                    </div>
                                    <div class="col-md-6">
                                            <label for="registration_end" class="form-label text-dark">Akhir Pendaftaran</label>
                                            <input type="date" class="form-control" id="registration_end" name="registration_end"> 
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="team_pool" class="form-label text-dark">Jumlah Tim Berpartisipasi</label>
                                <input type="number" class="form-control" id="team_pool" name="team_pool"
                                    placeholder="Tuliskan jumlah tim berpartisipasi...">
                            </div>
                            
                            <div class="mb-3">
                                <label for="tournament_address" class="form-label text-dark">Alamat Kompetisi</label>
                                <textarea class="form-control" id="tournament_address" name="tournament_address" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_photo_base64" class="form-label text-dark">Logo Kompetisi</label>
                                <input type="file" class="form-control" id="tournament_photo_base64" name="tournament_photo_base64" placeholder="Gambar logo kompetisi anda">
                            </div>
                            <div class="mb-3">
                                <label class="text-dark" for="education_category">Pilih Kategori Sekolah</label>
                                <select class="form-select" id="education_category" name="education_category" aria-label="Default select example">
                                    <option selected disabled>Pilih kategori sekolah yang anda inginkan</option>
                                    <option value="Sekolah Dasar (SD)">Sekolah Dasar (SD)</option>
                                    <option value="Sekolah Menengah Pertama (SMP)">Sekolah Menengah Pertama (SMP)</option>
                                    <option value="Sekolah Menengah Atas / Kejuruan (SMA/SMK)">Sekolah Menengah Atas / Kejuruan (SMA/SMK)</option>
                                    <option value="Universitas">Universitas</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">        
                                            <label for="start_date" class="form-label text-dark">Mulai Kompetisi</label>
                                            <input type="date" class="form-control" id="start_date" name="start_date">         
                                    </div>
                                    <div class="col-md-6">
                                            <label for="end_date" class="form-label text-dark">Akhir Kompetisi</label>
                                            <input type="date" class="form-control" id="end_date" name="end_date"> 
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="contact_person" class="form-label text-dark">Kontak Info Pendaftaran</label>
                                <input type="number" class="form-control" id="contact_person" name="contact_person"
                                    placeholder="Tuliskan nomor telpon untuk mendaftar...">
                            </div>
                            <div class="mb-3">
                                <label for="tournament_detail" class="form-label text-dark">Detail Kompetisi</label>
                                <textarea class="form-control" id="tournament_detail" name="tournament_detail" rows="5"></textarea>
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
    </div>
@endsection
