@extends('layouts.layouts')

@section('Content')
    <section style="margin-top: 80px">
        <div class="container col-xxl-8 py-5">
            <h4>Halaman Video Kegiatan</h4>
            <a href="" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahVideo">Tambah Photo</a>

            {{-- Pesan Sukses --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade-show" role="alert">
                    <strong>Informasi</strong> {{ session('sucess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Menampilkan Error --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </ul>
                </div>
            @endif

            <div class="table-responsive py-3">
                <table class="table table-bordered rounded-3 text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Video</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($videos as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    {{ $item->judul }}
                                </td>
                                <td>
                                    <iframe height="150" src="https://www.youtube.com/embed/{{ $item->youtube_code }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-warning" data-bs-target="#editVideo{{ $item->id }}"
                                        data-bs-toggle="modal">Edit</a>
                                    <form action="{{ route('video.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                            onclick="alert(Apakah yakin dihapus?)">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            <div class="modal fade" id="editVideo{{ $item->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="editVideo" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editVideoLabel">Modal Edit</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('video.update', $item->id) }}" method="POST">
                                                @csrf

                                                <input type="hidden" name="id_video" value="{{ $item->id }}">

                                                <div class="form-group mb-3">
                                                    <label for="">Judul Video</label>
                                                    <input type="text" name="judul" class="form-control"
                                                        value="{{ $item->judul }}">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Youtueb Code</label>
                                                    <input type="text" name="youtube_code" class="form-control"
                                                        value="{{ $item->youtube_code }}">
                                                </div>

                                                <button type="submit" class="btn btn-dark">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="tambahVideo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="tambahVideo" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahVideoLabel">Modal Video</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('video.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Judul</label>
                            <input type="text" name="judul" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Youtube Code</label>
                            <input type="text" name="youtube_code" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-dark">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
