@extends('layouts.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <section class="hero">
        <div class="container">
            <h2>Jalur Penerimaan Universitas MDP</h2>
            <p>Universitas MDP memberikan beasiswa kepada calon mahasiswa berprestasi</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header">Pascasarjana Magister Sistem Informasi (S2)</h3>
                        <div class="card-body">
                            <p class="card-text">Program Magister Sistem Informasi Universitas MDP memberikan kesempatan studi lanjut bagi lulusan S1 Semua Program Studi.</p>
                            <a href="#" class="btn btn-primary">DAFTAR SEKARANG</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header">Pascasarjana Magister Sistem Informasi (S2)</h3>
                        <div class="card-body">
                            <p class="card-text">Program Magister Sistem Informasi Universitas MDP memberikan kesempatan studi lanjut bagi lulusan S1 Semua Program Studi.</p>
                            <a href="#" class="btn btn-primary">DAFTAR SEKARANG</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header">Pascasarjana Magister Sistem Informasi (S2)</h3>
                        <div class="card-body">
                            <p class="card-text">Program Magister Sistem Informasi Universitas MDP memberikan kesempatan studi lanjut bagi lulusan S1 Semua Program Studi.</p>
                            <a href="#" class="btn btn-primary">DAFTAR SEKARANG</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
