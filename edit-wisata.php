<!DOCTYPE html>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Edit Wisata</title>
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
                <a class="nav-link" href="menu-utama.php">Beranda <span class="sr-only">(current)</span></a>
              </li>
              
              
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
                <a class="nav-link font-weight-bolder" href="index.php">Logout</a>
              </li>
            </ul>
            
            
          </div>
        </nav>
      </div>
    </header>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-left">
                    <div class="card-header">
                        Edit Wisata
                    </div>
                    <div class="card-body justify-content-center">
                        <form action="editwisatacontroller.php?id=<?php echo $wisata['id_wisata'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" class="form-control" name="image" id="image" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Wisata</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"  value="<?php echo $wisata['name'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Deksripsi Singkat Wisata</label>
                                <input type="text" class="form-control" name="about" id="about" value="<?php echo $wisata['about'] ?>">
                            </div>
                            <a href="menu-utama.php" class="btn btn-success mr-4">Back</a>
                            <button type="submit" class="btn btn-primary ml-4">Edit</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="col-md-12">
                            <p class="text-center">@Copyright by 18111002_AdzanAlamAlFaraby_TIFRP18CIDA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>