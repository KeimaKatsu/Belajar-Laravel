<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Input Berita</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/admin/home">Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link active" aria-current=" page" href="{{ route('admin.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/input_berita') }}">Input Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/input_lulusan') }}">Input Profil lulusan</a>
                </li>
                <li class="navbar-nav ml-auto">
                    <a class="nav-link" aria-current=" page" href="{{ route('admin.buku') }}">Buku</a>
                </li>
                <li class="navbar-nav ml-auto">
                    <a class="nav-link" aria-current=" page" href="#">Peminjaman</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h2>Tambah Berita Baru</h2>
        <form method="POST" action="{{ route('submit_berita') }}" enctype="multipart/form-data">
            <div class="csrf-input">
                @csrf
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
            </div>
            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Berita</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Berita</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>