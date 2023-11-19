<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/icons/assets(11).ico') }}">

    {{-- Meta untuk tampil di Whatsapp --}}
    @if (Request::segment(1) == '')
        <meta property="og:title" content="Teknik Informatika" />
        <meta name="description" content="Program Studi Teknik Informatika Moderan dengan Fasilitas Lengkap" />
        <meta property="og:url" content="http://teknikinformatika.com" />
        <meta property="og:description" content="Teknik Informatika" />
        <meta property="og:image" content="{{ asset('assets/icons/ic-logo.png') }}" />
        <meta property="og:type" content="article" />
        <title>Teknik Informatika</title>
    @elseif (Request::segment(1) == 'detail')
        <meta property="og:title" content="{{ $artikel->judul }}" />
        <meta name="description" content="{{ $artikel->judul }}" />
        <meta property="og:url" content="http://teknikinformatika.com/detail/{{ $artikel->slug }}" />
        <meta property="og:description" content="{{ $artikel->judul }}" />
        @if ($artikel->image)
            <meta property="og:image" content="{{ asset('storage/artikel/' . $artikel->image) }}" />
        @else
            <meta property="og:image" content="{{ asset('assets/icons/ic-logo.png') }}" />
        @endif
        <meta property="og:type" content="article" />

        <title>Teknik Informatika | {{ $artikel->title }}</title>
    @endif

    {{-- Meta untuk tampil di Whatsapp --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Summernote CSS di antara Head --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Content --}}
    @yield('Content')

    {{-- Footer Start --}}
    <section id="footer" class="bg-white">
        <div class="container py-4">
            <footer>
                <div class="row">
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Profil</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Berita</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Gallery</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Prestasi</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kontak</a>
                                </li>
                            </ul>
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Alumni</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Info
                                        Beasiswa</a></li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Prestasi</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Video
                                        Kegiatan</a></li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Dosen</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Follow Kami</h5>
                        <div class="d-flex mb-3">
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/icons/assets (5).png') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/icons/assets (9).png') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>

                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/icons/assets (10).png') }}" height="28" width="40"
                                    class="me-4" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Kontak Kami</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href=""
                                        class="nav-link p-0 text-muted">teknikinformatika.ac.id</a>
                                </li>
                                <li class="nav-item mb-2"><a href=""
                                        class="nav-link p-0 text-muted">08-22xx-xxx-xxxx (alex)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Alamat Kampus</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Jalan
                                        Ahmad Dahlan No. 96</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    <section class="bg-dark border-top">
        <div class="container py-4">
            <div class="text-center">
                <h6 class="fw-bold text-white">Program Studi Teknik Informatika - Universitas Muhammadiyah
                    Riau</h6>
            </div>
        </div>
    </section>
    {{-- Footer End --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/magnific.js') }}"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    {{-- JQUERY --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script> --}}
    {{-- Summernote JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image',
                retina: {
                    ration: 1,
                    replaceSrc: function(item, ratio) {
                        return item.src.replace(/\.\w+$/, function(m) {
                            return '@2x' + m;
                        })
                    }
                }
            })
        })
    </script>

    <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
                navbar.classList.add("navbar-dark")
            }
        }
    </script>

</body>

</html>
