{{-- Navbar Start --}}
<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top bg-white">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/icons/assets (8).png') }}" height="55" width="55" alt="">
        </a>
        <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-dark">
                <li class="nav-item">
                    <a class="nav-link active text-dark text-bold" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="#">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="#">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="#">Kontak</a>
                </li>
            </ul>
            <div class="d-flex">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-dark">Logout</button>
                    </form>
                @else
                    <button class="btn btn-dark">Register</button>
                @endauth
            </div>
        </div>
    </div>
</nav>
{{-- Navbar End --}}
