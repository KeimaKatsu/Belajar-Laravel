<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Berita RPL</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link active" aria-current=" page" href="{{ url('/user/home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/berita') }}">berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/aktifitas_mahasiswa') }}">Aktivitas Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile_lulusan') }}">Profil lulusan</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-12">
                <h1 class="text-primary">Berita RPL</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="gambar_berita1.jpg" class="card-img-top" alt="Gambar Berita 1">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita 1</h5>
                        <p class="card-text">Deskripsi singkat tentang berita 1.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="gambar_berita2.jpg" class="card-img-top" alt="Gambar Berita 2">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita 2</h5>
                        <p class="card-text">Deskripsi singkat tentang berita 2.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="gambar_berita3.jpg" class="card-img-top" alt="Gambar Berita 3">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita 3</h5>
                        <p class="card-text">Deskripsi singkat tentang berita 3.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>