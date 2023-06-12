@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Daftar Pertanyaan dan Jawaban FAQ</h3>
                <div class="newbtn">
                    <div class="row">
                        <div class="col-8">
                            <!-- BUTTON New -->
                            <a class="btn-green-hover" type="button"
                            style="text-decoration: none; color: white;" href="{{ route('faq.tambah') }}"><i
                            class="fa-solid fa-file-circle-plus"></i> Tambah FAQ</a>
                    </div>
                </div>
                <br>

                <table id="tabel-faq" class="table table-striped table-bordered display text-center" width="100%" cellspacing="0">
                    <thead style="background-color: #439a97">
                        <tr>
                            <th class="text-center">Pertanyaan</th>
                            <th class="text-center">Jawaban</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                          <td>Bagaimana cara melakukan pemesanan lapangan di Main Bola?</td>
                          <td>Cara melakukan pesanan lapangan di Main Bola Pertama klik booking lapangan yang ada di menu navigasi atau halaman home website Main Bola. Kemudian pilih lapangan yang diinginkan, lalu klik card lapangan tersebut. Setelah itu, klik tombol cari lapangan untuk memilih lapangan yang diinginkan di tempat futsal tersebut. Kemudianuser memilih lapangan yang tersedia di tempat tersebut dengan menekan tombol pesan lapangan. Setelah itu isi formulir yang diminta untuk melanjutkan pemesanan. Langkah terakhir pengguna harus upload bukti pembayaran secara trasfer yang dilakukan ke nomor rekening tertera di menu pembayaran. Pesan berhasil dilakukan ketika pengguna sudah klik tombol pesan lapangan dan upload bukti pembayaran atau tarnsfer.</td>
                          <td class="d-flex justify-content-center text-center">
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap5.min.css">
    @endpush

    @push('scripts')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#tabel-faq').DataTable();
        });
    </script>
        
    @endpush
@endsection

