<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.c
ss">
    <title>Buku</title>
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
                    <a class="nav-link" aria-current=" page" href="{{ route('admin.peminjaman') }}">Peminjaman</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
    <div class="row mt-4">
        <div class="col"></div>
        <div class="col-6">
            <form action="{{ route('admin.buku') }}" method="GET">
                @csrf
                <div class="input-group">
                    <input type="search" name="search" class="formcontrol rounded" placeholder="Cari nama buku"
                        aria-label="Search" aria-describedby="searchaddon" />
                    <button type="submit" class="btn btn-outlineprimary">search</button>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
    <div class="row mt-5">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col-2">
            <a class="btn btn-success" href="{{route('admin.tambahBuku') }}"
                style="text-decoration: none; margin-left: 30px">Tambah Data +</a>
        </div>
    </div>
    <table class="table" style="margin-top: 10px">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Kode Buku</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($data as $index => $buku)
            <tr>
                <td scope="row">{{ $index + $data->firstItem() }}</td>
                <td>
                    <img style="width: 50px" src="{{asset('/img/' . $buku->gambar) }}" alt="cover buku">
                </td>
                <td>{{ $buku->kode_buku }}</td>
                <td>{{ $buku->judul_buku }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ $buku->penerbit }}</td>
                <td>{{ $buku->kategori }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
                <td>
                    <a class="btn btn-outline-warning" href="/admin/editBuku/{{ $buku->id }}">Edit</a>
                    <a class="btn btn-outline-danger" href="/admin/deleteBuku/{{ $buku->id }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table><br>
    {{ $data->links() }}
    </div><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>