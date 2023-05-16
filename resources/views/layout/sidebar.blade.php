<nav id="sidebar">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
    </div>
    <div class="p-4">
        <h1><a href="index.html" class="logo">Main Bola <span>Website Admin</span></a></h1>
        <ul class="list-unstyled components mb-5">
            <li class="">
                <a href="/"><i class="fa-solid fa-home mr-3 ml-2"></i></span></span> Home</a>
            </li>
            <li>
                <a href="{{ route('data-user.index') }}"><i class="fa-solid fa-user mr-3 ml-2"></i></span> Data User</a>
            </li>
            <li>
                <a href="{{ route('lapangan.index') }}"><i class="fa-solid fa-user mr-3 ml-2"></i></span> Lapangan</a>
            </li>
            <li>
                <a href="{{ route('persetujuan-mitra.index') }}"><i class="fa-solid fa-person-circle-check mr-3 ml-2"></i></span> Persetujuan Mitra</a>
            </li>
            <li>
                <a href="{{ route('sewa-perlengkapan.index') }}"><i class="fa-solid fa-briefcase mr-3 ml-2"></i> Sewa Perlengkapan</a>
            </li>
            <li>
                <a href="{{ route('tournament.sekolah') }}"><i class="fa-solid fa-school fa-sm mr-3 ml-2"></i> Kompetisi Sekolah</a>
            </li>
            <li>
                <a href="{{ route('tournament.umur') }}"><i class="fa-solid fa-user mr-3 ml-2"></i> Kompetisi Umur</a>
            </li>
        </ul>

        <ul class="list-unstyled components mb-5">
            <li>
                <a href="{{route('logout')}}"><i class="fa-solid fa-right-from-bracket mr-3 ml-2"></i></span> Logout</a>
            </li>
        </ul>
        <div class="footer">
            <p>
                Main Bola &copy; 2023
            </p>
        </div>

    </div>
</nav>