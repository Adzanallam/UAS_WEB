<!doctype html>
<html lang="en">

<?php
include 'koneksi.php'; // panggil perintah koneksi database

if (isset($_POST['Registrasi'])) { // mengecek apakah form variabelnya ada isinya

   $nama = $_POST['nama']; // isi varibel dengan mengambil data username pada form
   $password = $_POST['password']; // isi variabel dengan mengambil data password pada form
   $email = $_POST['email']; // isi varibel dengan mengambil data username pada form
   $alamat = $_POST['alamat'];
   $no_hp = $_POST['no_hp'];

   $data = $conn->prepare('INSERT INTO user (nama, password, email, alamat, no_hp) VALUES (?, ?, ?, ?, ?)');

   $data->bindParam(1, $nama);
   $data->bindParam(2, $password);
   $data->bindParam(3, $email);
   $data->bindParam(4, $alamat);
   $data->bindParam(5, $no_hp);
   $data->execute();
   echo "<script>alert('Registrasi Berhasil');</script>";
   echo "<script>
        setTimeout(function () {
        window.location.href= 'login.php';
     
         },500);
        </script>";
}
?>
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/colors/colors_picker.asp">
        <link rel="stylesheet" type="text/css" href="form.css">
        <title>Adzan Alam Alfaraby Wonderfull Papua</title>
    </head>
    <body background="image/GunungBotak.jpg">
      <div class="container-fluid" >
          <nav class= "navbar navbar-expand-lg navbar-light "  id="mainNav" >
              <a class="navbar-brand font-weight-bold  text-white" >Wonderfull Papua</a>
              <button class="navbar-toggler navbar-toggler-right"  type="button" data-toggle="collapse" 
              data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link  text-white" href="index.php">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  text-white" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  text-white" href="hubungikami.php">Hubungi Kami</a>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary text-white my-2 my-sm-0" type="submit">Search</button>
                  </form>
              </div>
            </div>
            </nav>

            <div class="container">
                <form name="formDaftar" method="post" onsubmit="return validateForm()">
                <div id="login-box">
                <div class="box">
                <h1>Daftar</h1><br>
                <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" id="nama">
                <input type="text" name="alamat" placeholder="Alamat" class="form-control" id="alamat">
                <input type="number" name="no_hp" placeholder="No Hp" class="form-control" id="no_hp">
                <input type="text" name="email" placeholder="Email" class="form-control" id="email">
                <input type="password" name="password" placeholder="Kata Sandi" class="form-control" id="password"><br>
                <button type="submit" class="btn btn-primary" id="Registrasi" name="Registrasi">Daftar</button>
                </div>
                </div> 
        </form>
            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <script>
            function validateForm(){
              if (document.forms["formDaftar"]["nama"].value == ""){
                  alert("Harap Isi Nama Lengkap");
                  document.forms["formDaftar"]["nama"].focus();
                  return false;
              }
              else if (document.forms["formDaftar"]["alamat"].value == ""){
                  alert("Harap Isi Alamat");
                  document.forms["formDaftar"]["alamat"].focus();
                  return false;
              }
              else if (document.forms["formDaftar"]["no_hp"].value == ""){
                  alert("Harap Isi No HP");
                  document.forms["formDaftar"]["no_hp"].focus();
                  return false;
              }
              
              else if (document.forms["formDaftar"]["email"].value == ""){
                  alert("Harap Isi E-mail");
                  document.forms["formDaftar"]["email"].focus();
                  return false;
              }
              else if (document.forms["formDaftar"]["password"].value == ""){
                  alert("Kata Sandi Tidak Boleh Kosong");
                  document.forms["formDaftar"]["password"].focus();
                  return false;
              }
              
              
            }
        </script>

    <div class="container-fluid">
        <div class="row" style="background: #53c653; ">
        <div class="col-md-12">
          <p class="text-center">@Copyright by 18111002_AdzanAlamAlFaraby_TIFRP18CIDA</p>
        </div>
        </div>
    </div>
            
    </body>
</html>