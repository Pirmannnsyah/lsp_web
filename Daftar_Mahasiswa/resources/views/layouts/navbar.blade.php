<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home">Penerimaan Mahasiswa Baru</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="home">Jalur Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="informasi">Informasi Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="biaya">Biaya Kuliah</a>
                </li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-success me-2" type="button">Daftar</button>
                <button class="btn btn-outline-primary" type="button">Login</button>
            </form>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenUwwE6p5v/5G7W0h2v7NQ6T4w9BHp8pKhf4x+0hB/3ebtPEok0x3ujWcS4Q2jz" crossorigin="anonymous"></script>
</body>
</html>
