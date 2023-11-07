<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Sertakan stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Curriculum Vitae</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/biodata') }}">biodata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/aktifitas_mahasiswa') }}">aktivitas mahasiswa</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <section id="home   " class="text-center py-5">
        <img src="{{ ('img/iqbal.jpg')}}" width="150" alt="Your name" class="rounded-circle">
        <h1>Iqbal</h1>
        <p>Mahasiswa</p>
        <p>Hidup adalah Sebuah perjalanan yang tak akan pernah habis sampai nyawan yang kita miliki tidak ada,
            jalani hidup ini seperti sudah yang di naskah kan oleh Tuhan, itulah Penggambaran diri saya
        </p>
    </section>

    <section id="cv" class="container py-5">
        <h2 class="text-center">Pengalaman dan Skill</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Skill</th>
                        <th>Pengalaman</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bisa menguasai MC Word </td>
                        <td>Mengikuti organisaisi Pramuka</td>
                    </tr>
                    <tr>
                        <td>Bisa Bermain Valorant </td>
                        <td>Pernah mengikuti organisaisi Osis</td>
                    </tr>
                    <!-- Tambahkan baris-baris tambahan sesuai dengan pengalaman Anda -->
                </tbody>
            </table>
        </div>
    </section>
    <section id="contact">
        <!-- Tambahkan informasi kontak Anda di sini -->
    </section>
    <section id="about">
        <!-- Tambahkan informasi tentang diri Anda di sini -->
    </section>
    <section id="login">
        <!-- Tambahkan form login atau informasi login di sini -->
    </section>
    <footer class="bg-dark text-white text-center py-3">
        Copyright 2023 @keima_Katsuragi
    </footer>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>