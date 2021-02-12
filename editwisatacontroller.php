<?php
include 'koneksi.php';
$id = $_GET['id'];

if (isset($_POST['name']) && isset($_POST['about'])) {

    $filename = $_FILES['image']['name'];
    $size = $_FILES['image']['size'];
    $tmp = $_FILES['image']['tmp_name'];

    $name = $_POST['name'];
    $about = $_POST['about'];

    $extention = ['jpg', 'jpeg', 'png'];
    $imageExtention = explode('.', $filename);
    $imageExtention = strtolower(end($imageExtention));
    if (!in_array($imageExtention, $extention)) {
        echo "<script> alert('Image Not Found or Not image file!'); </script>";
    }


    move_uploaded_file($tmp, 'image/' . $filename);
    $data = $conn->prepare("UPDATE `wisata` SET `image` = '$filename' WHERE `wisata`.`id_wisata` = $id ");
    if ($data->execute()) {
        echo "<script>alert('Gambar Berhasil di Ubah');</script>";
    }


    $data = $conn->prepare("UPDATE `wisata` SET `name` = '$name' , `about` = '$about' WHERE `wisata`.`id_wisata` = $id ");
    if ($data->execute()) {
        echo "<script>alert('Data Berhasil di Ubah');</script>";
        echo "<script>
        setTimeout(function () {
        window.location.href= 'menu-utama.php';
     
         },500);
        </script>";
    }
}
