@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Edit Kompetisi Umur</h3>
                <p class="fs-6" style="color: #FCE700;">Edit daftar kompetisi antar umur dengan mengisi formulir di
                    bawah!</p>
                <form action="{{ route('tournament.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark">Nama Kompetisi <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" required id="tournament_name"
                                    name="tournament_name" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="entry_fee" class="form-label text-dark">Biaya Pendaftaran (per-tim) <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" required id="entry_fee" name="entry_fee"
                                    placeholder="">
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="registration_start" class="form-label text-dark">Awal Pendaftaran <span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" required id="registration_start"
                                            name="registration_start">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="registration_end" class="form-label text-dark">Akhir Pendaftaran <span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" required id="registration_end"
                                            name="registration_end">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="team_pool" class="form-label text-dark">Jumlah Tim Berpartisipasi <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" required id="team_pool" name="team_pool"
                                    placeholder="Tuliskan jumlah tim berpartisipasi...">
                            </div>
                            <div class="mb-3">
                                <label for="tournament_address" class="form-label text-dark">Alamat Kompetisi <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" required id="tournament_address" name="tournament_address" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_photo_base64" class="form-label text-dark">Logo Kompetisi</label>
                                <input type="file" class="form-control" id="tournament_photo_base64"
                                    name="tournament_photo_base64" placeholder="Gambar logo kompetisi anda">
                            </div>
                            <div class="mb-3">
                                <label class="text-dark" for="age_category">Pilih Kategori Umur <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" required id="age_category" name="age_category"
                                    aria-label="Default select example">
                                    <option selected disabled>kategori yang dipilih</option>
                                    <option value="U-16">U-16</option>
                                    <option value="U-19">U-19</option>
                                    <option value="U-23">U-23</option>
                                    <option value="Tidak ada batasan usia">Tidak Ada Batasan Usia</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="start_date" class="form-label text-dark">Mulai Kompetisi <span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" required id="start_date"
                                            name="start_date">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="end_date" class="form-label text-dark">Akhir Kompetisi <span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" required id="end_date"
                                            name="end_date">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="contact_person" class="form-label text-dark">Kontak Info Pendaftaran <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" required id="contact_person"
                                    name="contact_person" placeholder="Tuliskan nomor telpon untuk mendaftar...">
                            </div>
                            <div class="mb-3">
                                <label for="tournament_detail" class="form-label text-dark">Detail Kompetisi</label>
                                <textarea class="form-control" id="tournament_detail" name="tournament_detail" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3 mb-2">
                        <div class="mr-3">
                            <a class="btn btn-danger" href="{{ route('tournament.umur') }}" role="button">Kembali</a>
                        </div>
                        <div class="">
                            <button type="button" class="btn-green-hover edit2">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @push('scripts')
            {{-- Sweet Alert --}}
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                $(document).ready(function() {
                    //melakukan proses multiple input 
                    $("form .edit2").click(function(e) {
                        let $form = $(this).closest('form');
                        Swal.fire({
                            title: 'Apakah data yang anda edit sudah benar?',
                            text: "Pastikan formulir sudah diisi dengan benar!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#62B6B7',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya, Edit!',
                            cancelButtonText: 'Kembali',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $form.submit();
                            } else {
                                Swal.fire({
                                    position: 'center',
                                    icon: 'error',
                                    title: 'Batal edit data!',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        });
                    });
                });
            </script>
        @endpush
    @endsection
