<!doctype html>
<html lang="en">

<?php 
include 'koneksi.php';

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  try {
    $sql = "select * from user where email = :email And password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $id = $stmt->fetch();
    $count = $stmt->rowCount();
    if ($count == 1) {
      $_SESSION['id'] = $id['id_user'];
      header("Location: menu-utama.php");
      return;
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

?>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/colors/colors_picker.asp">
        <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="login.css">
        <title>Adzan Alam Alfaraby Wonderfull Papua</title>
    </head>
    <body >
      <div class="container-fluid" >
          <nav class= "navbar navbar-expand-lg navbar-light "  id="mainNav" >
              <div class="container-fluid">
              <a class="navbar-brand font-weight-bold  text-white" >Wonderfull Papua</a>
              <button class="navbar-toggler navbar-toggler-right"  type="button" data-toggle="collapse" 
              data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link  text-white " href="index.php">Beranda</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link  text-white " href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  text-white " href="hubungikami.php">Hubungi Kami</a>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary text-white my-2 my-sm-0" type="submit">Search</button>
                  </form>
              </div>
              </div>
            </nav><br><br>

            <div class="container">
                <form name="formLogin" method="post">
                <div class="login-box">
                <div class="box">
                <h1>Daftar</h1><br>
                  <!-- Untuk Membuat Input Username -->
                    <p>Email Address</p>
                    <input type="text" name="email" class="form-control" placeholder="Enter email" id="email" >  
                  <!-- UUntuk Membuat Input Password -->
                    <p>Password</p>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" id="password"><br>
                  <!-- Untuk Membuat Button Submit-->
                   <button type="submit" class="btn btn-primary" name="login" id="login" value ="login">SUBMIT</button><br>
                   <div class="signup_link" >
                   Don't have an account ? <br> Please <a href="signup.php">Sign Up</a>
                    </div>
                </div>
                </div>
                </form>
            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          
                  

        <div class="row" style="background: #53c653; ">
            <div class="col-md-12">
                <p class="text-center">@Copyright by 18111002_AdzanAlamAlFaraby_TIFRP18CIDA</p>
            </div>
          </div>
        
    </div>

    <script language="javascript">
                    var login = document.getElementById("login");
                      login.addEventListener("click", () => {
                      var email = document.forms["form"]["email"].value;
                      var password = document.forms["form"]["password"].value;

                    if (email != "" && password != "") {
                      window.location.replace("menu-utama.php");
                    } else {
                      alert("Email dan password salah!");
                    }
                  });  
                </script>

    </body>
</html>