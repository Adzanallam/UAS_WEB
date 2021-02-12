<?php

include 'koneksi.php';

if (isset($_SESSION['id']) == 0) { /* Halaman ini tidak dapat diakses jika belum ada yang login */
  header('Location: login.php');
}

$id_user = $_SESSION['id'];
$data = $conn->prepare("SELECT nama FROM user WHERE id_user =$id_user");
$data->execute();
$user = $data->fetch();

$data = $conn->prepare('SELECT * FROM wisata');
$data->execute();
$wisata = $data->fetchAll();

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
          <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
              </li>
              
              
              <li class="nav-item">
           
                <a class="nav-link " href="ubah-profile.php">Ubah Profile</a>
    
              </li>
              <li class="nav-item">
                <a class="nav-link font-weight-bolder" href="index.php">Logout</a>
              </li>
            </ul>
            
            
          </div>
        </nav>
      </div>
    </header>

    <!-- Awal Jumbroton -->
      <div class="jumbotron warna-bg">
        <h1 class="display-4"><span class="font-weight-bold">Hello, <?= $user['nama'] ?></span></h1>
        <p>Wonderfull Papua adalah aplikasi wisata yang akan membantu Anda dalam menjelajahi Papua.<br>
          Wonderfull Papua akan membuat Anda menemukan tempat cantik di Papua ... </p>
        <a class="btn btn-secondary btn-lg" href="selengkapnya.php" role="button">Selengkapnya..</a>
    </div>
    <!-- Akhir Jumbroton -->

<!-- Awal Content -->
    
    
    <div class="container">
    <a href="tambah-wisata.php" class="btn btn-success mb-4">Tambah Wisata</a>

    <?php if ($wisata > 0) { ?>

      <div class="row">
        <?php for($i=0; $i < count($wisata); $i++) { ?>
        <div class="col-md-3 mb-2 ">
          <div class="card">
              <?php if (isset($wisata[$i])) { ?>
            <img src="image/<?php echo $wisata[$i]['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title text-info"><?php echo $wisata[$i]['name'] ?></h6>
              <h6 class="card-text"><a href="show-wisata.php?id=<?= $wisata[$i]['id_wisata'] ?>" class="text-primary"><?php echo substr($wisata[$i]['about'], 0, 40) . "..." ?></a></h6>
              <a href="edit-wisata.php?id=<?php echo $wisata[$i]['id_wisata'] ?>" class="btn btn-primary">EDIT</a>
              <a href="hapuswisatacontroller.php?id=<?php echo $wisata[$i]['id_wisata'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</a>
            </div>
            <?php } ?>
          </div>
        </div>
        <?php } ?>
        
      </div>
      <?php } ?>
    </div>
    <!-- Akhir Content -->

    <!-- Awal Pagination -->
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
    <!-- Akhir Pagination -->

    <!-- Awal Footer -->
    <div class="container-fluid">
      <div class="row" style="background: #53c653; ">
        <div class="col-md-12">
            <p class="text-center">@Copyright by 18111002_AdzanAlamAlFaraby_TIFRP18CIDA</p>
        </div>
      </div>
      </div>
    <!-- Akhir Footer -->
    <!-- Optional JavaScript; choose one of the two! --><!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>