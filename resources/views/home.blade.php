<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Home</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/biodata') }}">biodata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('auth.login')}}">berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('auth.login')}}">Profil lulusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('auth.login') }}">aktivitas mahasiswa</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top:150px">
        <div class="col-12 text-center">
            <h1 class="text-secondary">Selamat Datang</h1>
            <h4 class="text-secondary"> Di Perpustakaan Politeknik Negeri Bengkalis </h4>
            <h6 class="mt-3">
                Silahkan
                <a href="{{ route('auth.login')}}" style="text-decoration: none">Masuk</a>
                atau <a href="{{ route('auth.register') }}" style="text-decoration: none;">Daftar</a>
                jika anda belum punya akun
            </h6>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>