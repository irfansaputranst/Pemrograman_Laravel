@extends('layouts.layouts')

@section('Content')
    <section style="margin-top: 150px" class="mb-5">
        <div class="container col-xxl-6">
            <h3 class="mb-3 fw-bold">Halaman Login Admin Prodi TI</h3>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Masukan Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Masukan Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-dark">Login</button>
            </form>
        </div>
    </section>
@endsection
