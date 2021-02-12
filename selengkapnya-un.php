<!doctype html>
<html lang="en">
<?php
include 'koneksi.php'; // panggil perintah koneksi database
if (isset($_POST['visitor'])) { // mengecek apakah form variabelnya ada isinya

$nama = $_POST['nama_pengunjung']; // isi varibel dengan mengambil data username pada form
$email = $_POST['email']; // isi varibel dengan mengambil data username pada form


$data = $conn->prepare('INSERT INTO pengunjung (nama_pengunjung, email) VALUES (?, ?)');

$data->bindParam(1, $nama);
$data->bindParam(2, $email);


$data->execute();
echo "<script>alert('Terima kasih atas minatnya !');</script>";
}
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Adzan Alam Alfaraby Wonderfull Papua</title>
  </head>
  <body>
  
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <a class="navbar-brand font-weight-bold">Wonderfull Papua</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hubungikami.php">Hubungi Kami</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>
    </header>

    <!-- Awal Jumbroton -->
      <div class="jumbotron warna-bg">
        <h1 class="display-4"><span class="font-weight-bold">Hello, Papua</span></h1>
    </div>
    <!-- Akhir Jumbroton -->

    <!-- Awal Content -->
    <div class="container">
      <div class="row">
        <div class="col-md-8 mb-4"><!-- Awal Col 8 -->
          <div class="card">
            <div class="card-body">
                <h2>Profil Wonderfull Papua</h2><br><br><br>
                <p style="text-align: justify;">Wonderfull Papua adalah aplikasi wisata yang akan membantu Anda dalam 
                    menjelajahi Papua. Wonderfull Papua akan membuat Anda menemukan tempat cantik di Papua. 
                    Dengan aplikasi ini Anda bisa mendapatkan aneka kemudahan saat menjelajah. Mulai dari Taman 
                    Nasional Teluk Cendrawasih, Raja Ampat, Danau Sentani, Danau Paniai, Lembah Baliem, Desa Wisata 
                    Sauwandarek, Pantai Amai dan ragam rekomendasi foto dan video wisata, agenda tahunan Indonesia, 
                    hingga etika berkegiatan di alam bebas serta peta wisata alam.</p>
            </div>
          </div> 
        </div><!-- Akhir Col 8 -->
        <div class="col-md-4 mb-4"><!-- Awal Col 4 -->
          <div class="card">
            <div class="card-body bg-light">
              <h5>Ingin tempat wisata lainnya ?</h5>
              <p>Dapatkan tips ekslusif dari wonderfull Papua untuk membantu menemukan tempat wisata yang menarik </p>
              <form method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="*Nama" id="nama_pengunjung" name="nama_pengunjung"><br>
                    <input type="email" class="form-control" placeholder="*Email" id="email" name="email">
                  </div>
                  <button class="btn btn-primary" type="submit" name="visitor" id="visitor">Ya, Saya Mau</button>
              </form>
            </div>
          </div>
        </div><!-- Awal Col 4 -->
      </div>
    </div>
    <!-- Akhir Content -->

    <div class="container-fluid">
      <div class="row" style="background: #53c653; ">
        <div class="col-md-12">
            <p class="text-center">@Copyright by 18111002_AdzanAlamAlFaraby_TIFRP18CIDA</p>
        </div>
      </div>
      </div>

  </body>
</html>
