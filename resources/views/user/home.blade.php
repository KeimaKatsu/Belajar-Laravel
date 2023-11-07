<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h4 class="text-secondary">Selamat Datang {{
Auth::user()->name }}</h4>
            </div>
            <div class="col"></div>
            <div class="col-1"><a href="{{ route('logout') }}" style="text-decoration: none">
                    <p class="text-end text-black fw-semibold">Logout</p>
                </a></div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col"></div>
            <div class="col-6">
                <form action="" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" placeholder="Cari nama buku" aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary">search</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
        @foreach ($data as $buku)
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-2"><img style="width: 150px" src="{{ asset('img/' . $buku->gambar) }}" alt="cover buku"></div>
                    <div class="col-2">
                        <p class="fw-bold">Judul</p>
                        <p class="fw-bold">Penulis</p>
                        <p class="fw-bold">Penerbit</p>
                        <p class="fw-bold">Tahun Terbit</p>
                        <p class="fw-bold">Deskripsi Buku</p>
                    </div>
                    <div class="col-8">
                        <p>{{ $buku->judul_buku }}</p>
                        <p>{{ $buku->penulis }}</p>
                        <p>{{ $buku->penerbit }}</p>
                        <p>{{ $buku->tahun_terbit }}</p>
                        <p>{{ $buku->deskripsi }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{ $data->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>