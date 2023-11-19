@extends('layouts.layouts')

@section('Content')
    <section id="detail" style="margin-top: 20px" class="py-5">
        <div class="container col-xxl-8">
            <div style="margin-top: 100px">
                <h1 class="card-title mb-3 text-center fw-bold">{{ $artikel->judul }}</h1>
                <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="card-img-top rounded-3 mb-3"
                    alt="...">
                <div class="card-body text-justify">
                    <p class="card-text">{!! $artikel->desc !!}
                    </p>
                    <p class="card-text"><small class="text-body-secondary">{{ $artikel->create_at }}</small></p>
                </div>
            </div>
        </div>
    </section>
@endsection
