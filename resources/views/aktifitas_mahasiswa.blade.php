<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Aktivitas Mahasiswa RPL</title>
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
                <h1 class="text-primary">Aktivitas Mahasiswa RPL</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h3>Mahasiswa Terbaru</h3>
                <ul>
                    <li>Nama Mahasiswa 1</li>
                    <li>Nama Mahasiswa 2</li>
                    <li>Nama Mahasiswa 3</li>
                </ul>
            </div>
            <div class="col-6">
                <h3>Kegiatan Mahasiswa</h3>
                <ul>
                    <li>Kegiatan 1</li>
                    <li>Kegiatan 2</li>
                    <li>Kegiatan 3</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>