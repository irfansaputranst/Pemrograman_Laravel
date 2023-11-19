@extends('layouts.layouts')

@section('Content')
    <section id="detail" style="margin-top: 20px" class="py-5">
        <div class="container col-xxl-8">
            <div style="margin-top: 50px">
                <h1 class="card-title mb-4 text-center fw-bold mb-4">Foto Kegiatan</h1>
                <div class="row">
                    @foreach ($photos as $photo)
                        <div class="col-lg-4 col-md-6 col-4">
                            <a class="image-link" href="{{ asset('storage/photo/' . $photo->image) }}">
                                <img src="{{ asset('storage/photo/' . $photo->image) }}" class="img-fluid" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
