@extends('layouts.layouts')

@section('Content')
    {{-- Berita Start --}}
    <section id="berita"style="margin-top: 20px" data-aos="zoom-in">
        <div class="container">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Berita Kegiatan Prodi Teknik Informatika</h2>
            </div>
            <div class="row py-5">
                <div class="col-lg-6 mb-5">
                    @foreach ($artikels as $item)
                        <div class="col-lg-6 mb-5">
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
            </div>
        </div>
    </section>
    {{-- Berita End --}}
@endsection
