@extends('layouts.layouts')

@section('Content')
    <section style="margin-top: 100px">
        <div class="container col-xxl-8 py-5">
            <h3 class="fw-bold">Halaman Dashboard Admin</h3>
            <p>Selamat datang di halaman Dashboard Admin</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <div class="overflow-hidden position-relative" style="height: 180px">
                            <img src="{{ asset('assets/images/images-1.jpg') }}" class="card-img-top img-fluid"
                                alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Blog Artikel</h5>
                            <p class="card-text">Atur dan Kelola Artikel Kegiatan Program Studi Teknik Informatika</p>
                            <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <div class="overflow-hidden position-relative" style="height: 180px">
                            <img src="{{ asset('assets/images/images-2.jpg') }}" class="card-img-top img-fluid"
                                alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Photo Kegiatan</h5>
                            <p class="card-text">Atur dan Kelola Photo Kegiatan Program Studi Teknik Informatika</p>
                            <a href="{{ route('photo') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <div class="overflow-hidden position-relative" style="height: 180px">
                            <img src="{{ asset('assets/images/images-2.jpg') }}" class="card-img-top img-fluid"
                                alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Video Kegiatan</h5>
                            <p class="card-text">Atur dan Kelola Video Kegiatan Program Studi Teknik Informatika</p>
                            <a href="{{ route('video') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
