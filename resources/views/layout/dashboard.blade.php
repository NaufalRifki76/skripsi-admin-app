@extends('layout.index')

@section('content')

<div class="card shadow">
    @include('session-flash')
    <div class="card-body">
        <div class="row">
            <h3>Halaman Dashboard</h3>
            <p class="h5 fw-normal mb-5" style="color: #FCE700">Menampilkan data menyeluruh jumlah mitra, pengguna, dan transaksi pemesanan!</p>
            <div class="col-md-4 mb-3">
                <div class="card shadow-lg text-center" style="border: none; border-top-right-radius: 24px; border-bottom-left-radius: 24px; background-color: #439A97;">
                    <div class="card-body">
                        <h5 class="fw-bold text-white"><u>Jumlah Lapangan (Mitra)</u></h5>
                        <h4 class="mt-3 text-white">10</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-lg text-center" style="border: none; border-top-right-radius: 24px; border-bottom-left-radius: 24px; background-color: #439A97;">
                    <div class="card-body">
                        <h5 class="fw-bold text-white"><u>Jumlah Pengguna Website</u></h5>
                        <h4 class="mt-3 text-white">10</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-lg text-center" style="border: none; border-top-right-radius: 24px; border-bottom-left-radius: 24px; background-color: #439A97;">
                    <div class="card-body">
                        <h5 class="fw-bold text-white"><u>Jumlah Transaksi Pemesanan</u></h5>
                        <h4 class="mt-3 text-white">10</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection