@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Edit Kompetisi Sekolah</h3>
                <p class="fs-6" style="color: #FCE700;">Edit daftar kompetisi antar sekolah dengan mengisi formulir di
                    bawah!</p>
                <form action="{{route('edit-sekolah-store', ['id' => $id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_name" class="form-label text-dark">Nama Kompetisi <span
                                    class="text-danger">*</span></label>
                                <input type="text" class="form-control" required value="{{$data->tournament_name}}" id="tournament_name" name="tournament_name">
                            </div>
                            <div class="mb-3">
                                <label for="entry_fee" class="form-label text-dark">Biaya Pendaftaran (per-tim) <span
                                    class="text-danger">*</span></label>
                                <input type="number" class="form-control" required value="{{$data->entry_fee}}" id="entry_fee" name="entry_fee">
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">        
                                        <label for="registration_start" class="form-label text-dark">Awal Pendaftaran <span
                                            class="text-danger">*</span></label>
                                        <input type="date" class="form-control" required value="{{$data->registration_start}}" id="registration_start" name="registration_start">         
                                    </div>
                                    <div class="col-md-6">
                                        <label for="registration_end" class="form-label text-dark">Akhir Pendaftaran <span
                                            class="text-danger">*</span></label>
                                        <input type="date" class="form-control" required value="{{$data->registration_end}}" id="registration_end" name="registration_end"> 
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="team_pool" class="form-label text-dark">Jumlah Tim Berpartisipasi <span
                                    class="text-danger">*</span></label>
                                <input type="number" class="form-control" required value="{{$data->team_pool}}" id="team_pool" name="team_pool">
                            </div>
                            
                            <div class="mb-3">
                                <label for="tournament_address" class="form-label text-dark">Alamat Kompetisi <span
                                    class="text-danger">*</span></label>
                                <textarea class="form-control" required id="tournament_address" name="tournament_address" rows="5">{{$data->tournament_address}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tournament_photo_base64" class="form-label text-dark">Logo Kompetisi</label>
                                <input type="file" class="form-control" id="tournament_photo_base64" name="tournament_photo_base64">
                            </div>
                            <div class="mb-3">
                                <label class="text-dark" for="education_category">Pilih Kategori Sekolah <span
                                    class="text-danger">*</span></label>
                                <select class="form-select" required id="education_category" name="education_category" aria-label="Default select example">
                                    <option selected disabled>Kategori yang dipilih</option>
                                    <option value="Sekolah Dasar (SD)">Sekolah Dasar (SD)</option>
                                    <option value="Sekolah Menengah Pertama (SMP)">Sekolah Menengah Pertama (SMP)</option>
                                    <option value="Sekolah Menengah Atas / Kejuruan (SMA/SMK)">Sekolah Menengah Atas / Kejuruan (SMA/SMK)</option>
                                    <option value="Universitas">Universitas</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">        
                                        <label for="start_date" class="form-label text-dark">Mulai Kompetisi <span
                                            class="text-danger">*</span></label>
                                        <input type="date" class="form-control" required value="{{ \Carbon\Carbon::parse($data->start_date)->format('Y-m-d') }}" id="start_date" name="start_date">         
                                    </div>
                                    <div class="col-md-6">
                                        <label for="end_date" class="form-label text-dark">Akhir Kompetisi <span
                                            class="text-danger">*</span></label>
                                        <input type="date" class="form-control" required value="{{ \Carbon\Carbon::parse($data->end_date)->format('Y-m-d') }}" id="end_date" name="end_date"> 
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="contact_person" class="form-label text-dark">Kontak Info Pendaftaran <span
                                    class="text-danger">*</span></label>
                                <input type="number" class="form-control" required value="{{$data->contact_person}}" id="contact_person" name="contact_person">
                            </div>
                            <div class="mb-3">
                                <label for="tournament_detail" class="form-label text-dark">Detail Kompetisi</label>
                                <textarea class="form-control" id="tournament_detail" name="tournament_detail" rows="5">{{$data->tournament_detail}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3 mb-2">
                        <div class="mr-3">
                            <a class="btn btn-danger" href="{{ route('tournament.sekolah') }}" role="button">Kembali</a>
                        </div>
                        <div class="">
                            <button type="button" class="btn-green-hover edit">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        {{-- Sweet Alert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function() {
                //melakukan proses multiple input 
                $("form .edit").click(function(e) {
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
