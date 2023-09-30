<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampilan Utama</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .pale {
            padding: 8px
        }
        body{
            /* background-color:#006CFF; */
        }
        .puwa{
            text-align: center;
        }
        .din{
            margin-top: 100px;
            /* margin-bottom: 100px; */
            margin-left: 45%;
            

        }
    </style>
</head>
<body>
    {{-- navbar awal --}}
    <nav class="navbar bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Menu Utama</a>
    <form class="d-flex" role="search">
    <div class="pale">
      <button href="#" class="btn" role="button" data-bs-toggle="button">Login</button>
      <button type"button" class="btn btn-outline-light" href="">Daftar</button>
    </div>
    </form>
  </div>
</nav>
{{-- navbar akhir --}}
<div class="puwa">
    <h1>Layanan Pengaduan Masyarakat</h1>
    <h3>Anda Melapor Anda Hebat</h3>
</div>
<div class="din" style="height: 100px;">
    
    <button type"button" class="btn btn-outline-dark">Tulis Laporan Anda</button>
</div>

</body>
</html>