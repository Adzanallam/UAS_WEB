<!DOCTYPE html>
<html lang="en">

<?php
include 'koneksi.php'; // panggil perintah koneksi database

if (isset($_SESSION['id']) == 0) { /* Halaman ini tidak dapat diakses jika belum ada yang login */
    header('Location: login.php');
}

$session = $_SESSION['id'];
$data = $conn->prepare("SELECT * FROM user where id_user = $session");
$data->execute();
$user = $data->fetch();

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Ubah Profile</title>
</head>

<body>



    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">
                        Ubah Profile
                    </div>
                    <div class="card-body justify-content-center">
                        <form action="ubahprofilecontroller.php" method="POST">
                            <input type="hidden" class="form-control" name="ID" id="ID" value="<?php echo $user['id_user'] ?>" aria-describedby="emailHelp">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $user['nama'] ?>" id="nama" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control" name="Email" value="<?php echo $user['email'] ?>" id="Email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?php echo $user['alamat'] ?>" id="alamat" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No HP</label>
                                <input type="text" class="form-control" name="no_hp" value="<?php echo $user['no_hp'] ?>" id="no_hp" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" value="<?php echo $user['password'] ?>" name="Password" id="Password">
                            </div>
                            <button type="submit" class="btn btn-primary ml-4">Save</button>
                            <a href="menu-utama.php" class= "btn btn-success mr-4">Back</a>
                        </form>

                    </div>
                    <div class="card-footer text-muted">

                    <p class="text-center">@Copyright by 18111002_AdzanAlamAlFaraby_TIFRP18CIDA</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>