<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Input Profil Lulusan</title>
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
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-12">
                <h1 class="text-primary">Input Profil Lulusan</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="foto">Foto Lulusan</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lulusan</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Deskripsi Angkatan</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="batch" class="form-label">Angkatan</label>
                        <input type="text" class="form-control" id="batch" name="batch" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>