<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>aselole</title>
  </head>
  <body>
    <nav class ="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Ini navbar</a>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
         <p class="text-lg">Ini adalah halaman beranda yang hanya bisa diakses oleh pengguna yang sudah login.</p>
            <p class="text-lg">Jika Anda melihat pesan ini, berarti Anda telah berhasil login.</p>
            <p class="text-lg">Silakan gunakan menu di atas untuk navigasi ke halaman lain.</p>
            <p class="text-lg">Jika Anda ingin logout, silakan klik tombol di bawah ini:</p>
           <a href="{{ route('logout') }}" class="text-red-600 hover:underline">Logout</a>
            <p class="text-lg">Jika Anda ingin mengubah data diri, silakan klik tombol di bawah ini:</p>
            <p class="text-lg">Jika Anda ingin mengubah password, silakan klik tombol di bawah ini:</p>
            <form action="/password/reset" method="GET">
                @csrf
                <button type="submit" class="btn btn-warning">Ubah Password</button>
            </form>
            <p class="text-lg">Jika Anda ingin mengubah email, silakan klik tombol di bawah ini:</p>
            <form action="/email/reset" method="GET">
                @csrf
                <button type="submit" class="btn btn-info">Ubah Email</button>
            </form>
            <p class="text-lg">Jika Anda ingin mengubah nama, silakan klik tombol di bawah ini:</p>
            <form action="/name/reset" method="GET">
                @csrf
                <button type="submit" class="btn btn-success">Ubah Nama</button>
            </form>
            <p class="text-lg">Jika Anda ingin mengubah foto profil, silakan klik tombol di bawah ini:</p>
            <form action="/profile/reset" method="GET">
                @csrf
                <button type="submit" class="btn btn-primary">Ubah Foto Profil</button>
            </form>
            <p class="text-lg">Jika Anda ingin mengubah nomor telepon, silakan klik tombol di bawah ini:</p>
            <form action="/phone/reset" method="GET">
                @csrf
                <button type="submit" class="btn btn-secondary">Ubah Nomor Telepon</button>
            </form>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>