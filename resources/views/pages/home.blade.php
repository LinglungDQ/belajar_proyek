@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<div class="p-5 mb-4 bg-dark text-white rounded-3">
    <div class="container-fluid py-3">

        <h1 class="display-5 fw-bold text-danger">
            🎓 Belajar Laravel 13
        </h1>

        <p class="col-md-8 fs-4">
            Selamat datang di modul praktikum Laravel.
        </p>

        <a class="btn btn-danger btn-lg" href="#">
            Mulai Belajar →
        </a>

    </div>
</div>

<div class="row g-4">

    @foreach ($fitur as $item)

        <div class="col-md-4">

            <div class="card h-100 shadow-sm">

                <div class="card-body">

                    <h5 class="card-title">
                        {{ $item['icon'] }}
                        {{ $item['judul'] }}
                    </h5>

                    <p class="card-text">
                        {{ $item['desc'] }}
                    </p>

                </div>

            </div>

        </div>

    @endforeach

</div>

@endsection
