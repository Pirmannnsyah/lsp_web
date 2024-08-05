<!-- resources/views/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h2>Formulir Pendaftaran Mahasiswa</h2>
        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="/register" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="asal">Asal Sekolah</label>
                <input type="text" id="asal" name="asal" required>
            </div>
            <button type="submit" class="btn">Daftar</button>
        </form>
    </div>
</body>
</html>
