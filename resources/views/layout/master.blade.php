<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@yield('title','Sistem Informasi Mahasiswa')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @yield('menuMahasiswa')" href="/mahasiswa">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menuDosen')" href="/dosen">Data Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menuGallery')" href="/gallery">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>

    @section('content')
    <div class="alert alert-primary text-center">Sistem Informasi Mahasiswa</div>
    @show

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi Mahasiswa | Copyright © {{ date("y") }} Teknik Informatika
        </div>
    </footer>
</body>
</html>
