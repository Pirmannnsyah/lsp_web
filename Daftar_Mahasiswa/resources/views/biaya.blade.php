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
           <h2>Biaya Pendidikan</h2>
    <table>
        <thead>
            <tr>
                <th>Program Studi</th>
                <th>Uang Kuliah (Pagi)</th>
                <th>Uang Kuliah (Malam)</th>
                <th>Biaya Pembangunan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sistem Informasi</td>
                <td>Rp 6.000.000</td>
                <td>Rp 5.000.000</td>
                <td>Rp 2.000.000</td>
            </tr>
            </tbody>
    </table>
        </div>
    </section>
</body>
@endsection
