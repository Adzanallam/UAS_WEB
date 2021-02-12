<!doctype html>
<html lang="en">
<?php
// $id = $_GET['id'];
include 'koneksi.php';

if (isset($_SESSION['id']) == 0) { /* Halaman ini tidak dapat diakses jika belum ada yang login */
    header('Location: login.php');

}

$id = $_GET['id'];
$data = $conn->prepare("SELECT * FROM wisata WHERE id_wisata = $id");
$data->execute();
$wisata = $data->fetch();
?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/colors/colors_picker.asp">
        <title>Adzan Alam Alfaraby Wonderfull Papua</title>
    </head>
    <body >
      <div class="container-fluid" >
          <nav class= "navbar navbar-expand-lg navbar-light "  id="mainNav" >
              <div class="container-fluid">
              <a class="navbar-brand font-weight-bold" >Wonderfull Papua</a>
              <button class="navbar-toggler navbar-toggler-right"  type="button" data-toggle="collapse" 
              data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link " href="index.php">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="hubungikami.php">Hubungi Kami</a>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                  </form>
              </div>
              </div>
            </nav>

        <div class="row" style="background: #53c653; ">
            <div class="col-md-12"><br>
            <h1 class="text-center"><?= $wisata['name']?></h1><br>
            </div>
        </div> 
        <div class="row justify-content-center">
            <div class="col-md-12"></br>
                <img src="image/tamannasionaltelukcendrawasih.jpg" style="display: block; margin: auto" height="250px"></br></br>
                <p style="text-align: justify;"><?= $wisata['about']?></p>
                <div class="d-flex justify-content-center mb-4">
                <a href="menu-utama.php" class="btn btn-primary center">Back</a>
                </div>
                
            </div>
        </div>

        <br><br><br><br><br><br><br><br><br>
      <div class="row" style="background: #53c653; ">
        <div class="col-md-12">
            <p class="text-center">@Copyright by 18111002_AdzanAlamAlFaraby_TIFRP18CIDA</p>
        </div>
      </div>
        
    </div>
    </body>
</html>