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
                <a href="/"><span class="fa fa-home mr-3" style="color: white"></span> Home</a>
            </li>
            <li>
                <a href="{{ route('lapangan.index') }}"><span class="fa fa-user mr-3" style="color: white"></span> Lapangan</a>
            </li>
            <li>
                <a href="{{ route('sewa-perlengkapan.index') }}"><span class="fa fa-briefcase mr-3" style="color: white"></span> Sewa Perlengkapan</a>
            </li>
            <li>
                <a href="{{ route('tournament.index') }}"><span class="fa fa-sticky-note mr-3" style="color: white"></span> Kompetisi Sekolah</a>
            </li>
        </ul>

        <ul class="list-unstyled components mb-5">
            <li class="">
                <a href="{{route('logout')}}"><span class="fa-solid fa-plug-circle-xmark" style="color: white"></span> Logout</a>
            </li>
        </ul>
        <div class="footer">
            <p>
                Main Bola &copy; 2023
            </p>
        </div>

    </div>
</nav>