@extends('layouts.layouts')

@section('Content')
    <section id="hero">
        <div class="container text-center text-dark">
            <div class="hero-title" data-aos="fade-up">
                <h1 class="hero-title-2">Selamat Datang</h1>
                <h1 class="hero-title-3">di Program Studi Teknik Informatika</h1>
                <h1 class="hero-title-4">Universitas Muhammadiyah Riau</h1>
            </div>
        </div>
    </section>

    <section id="program" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-3" data-aos="fade-up">
                    <div class="program-2 bg-white rounded-3 p-3 d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="px-3">Kurikulum Berkualitas</h2>
                        </div>
                        <img src="{{ asset('assets/icons/assets (6).png') }}" height="150" width="150" alt="">
                    </div>
                </div>
                <div class="col-lg-4 mb-3" data-aos="fade-up">
                    <div class="program-2 bg-white rounded-3 p-3 d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="px-3">Lulusan Kompeten</h2>
                        </div>
                        <img src="{{ asset('assets/icons/assets (7).png') }}" height="150" width="150" alt="">
                    </div>
                </div>
                <div class="col-lg-4 mb-3" data-aos="fade-up">
                    <div class="program-2 bg-white rounded-3 p-3 d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="px-3">Dosen Terlatih</h2>
                        </div>
                        <img src="{{ asset('assets/icons/assets (1).png') }}" height="150" width="150" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Berita Start --}}
    <section id="berita" data-aos="zoom-in">
        <div class="container">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Berita Kegiatan Prodi Teknik Informatika</h2>
            </div>
            <div class="row py-5">
                @foreach ($artikels as $item)
                    <div class="col-lg-4 mb-5">
                        <div class="card-border-0">
                            <div class="image-card1  mb-3">
                                <img src="{{ asset('storage/artikel/' . $item->image) }}" class="berita-1 img-fluid"
                                    alt="">
                            </div>
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">{{ $item->create_at }}</p>
                                <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                                <p class="text-secondary">#beritaprodi #beasiswa</p>
                                <a href="/detail/{{ $item->slug }}"
                                    class="fw-bold text-danger text-decoration-none">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="footer-berita text-center">
                <a href="/berita" class="btn btn-outline-dark">Berita Lainnya</a>
            </div>
        </div>
    </section>
    {{-- Berita End --}}

    {{-- Join Start --}}
    <section id="join" class="py-5" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stripe me-2"></div>
                        <h5>Daftar Mahasiswa</h5>
                    </div>
                    <h3>
                        <h1 class="fw-bold mb-2">
                            Gabung bersama kami,
                            mewujudkan generasi
                            yang faham teknologi modern
                        </h1>
                        <p class="mb-3">
                            Program Studi Teknik Informatika telah banyak melahirkan generasi-generasi yang menjadi
                            pondasi kuat untuk Indonesia Maju tahun 2045.
                        </p>
                        <button class="btn btn-outline-dark">Register</button>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/Group 5.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Join End --}}

    {{-- Video Start --}}
    <section id="video" class="py-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="container py-5">
            <div class="text-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Aedbs6-3eKM?si=853u-yj74T5eSPY1"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section id="video_youtube" class="py-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">
                    Video Kegiatan Program Studi Teknik Informatika
                </h2>
            </div>
            <div class="row py-5">
                @foreach ($videos as $item)
                    <div class="col-lg-4 mb-5">
                        <iframe width="100%" height="255" src="https://www.youtube.com/embed/{{ $item->youtube_code }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                @endforeach
                <div class="footer-berita text-center mt-5">
                    <a href="" class="btn btn-outline-dark">Video Lainnya</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Video End --}}

    {{-- Foto Start --}}
    <section id="foto" class="section-foto parallax" data-aos="fade-right">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-3"></div>
                    <h5 class="fw-bold text-white mt-1">Foto Kegiatan</h5>
                </div>
                <div>
                    <a href="/foto" class="btn btn-outline-light">Foto Lainnya</a>
                </div>
            </div>

            <div class="row">
                @foreach ($photos as $photo)
                    <div class="col-lg-4 col-md-4 col-6">
                        <a class="image-link" href="{{ asset('storage/photo/' . $photo->image) }}">
                            <img src="{{ asset('storage/photo/' . $photo->image) }}" class="img-fluid rounded-2"
                                alt="">
                        </a>
                        <p class="mt-2">{{ $photo->judul }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Foto End --}}

    {{-- Fasilitas Start --}}
    <section id="fasilitas" class="py-5" data-aos="fade-right">
        <div class="container py-5">
            <div class="text-center">
                <h3 class="fw-bold">Fasilitas Program Studi Teknik Informatika</h3>
            </div>
            <img src="{{ asset('assets/images/Group 7.png') }}" class="img-fluid py-5" alt="">
            <div class="text-center">
                <a href="" class="btn btn-outline-dark">Fasilitas Lainnya</a>
            </div>
        </div>
    </section>
    {{-- Fasilitas End --}}
@endsection
