<?php
include 'koneksi.php';

if ($_FILES['image']) {
    $filename = $_FILES['image']['name'];
    $size = $_FILES['image']['size'];
    $tmp = $_FILES['image']['tmp_name'];

    $extention = ['jpg', 'jpeg', 'png'];
    $imageExtention = explode('.', $filename);
    $imageExtention = strtolower(end($imageExtention));
    if (!in_array($imageExtention, $extention)) {
        echo "<script> alert('Not image file!'); </script>";
    }


    $name = $_POST['name'];
    $about = $_POST['about'];

    move_uploaded_file($tmp, 'image/' . $filename);
    $data = $conn->prepare("INSERT INTO `wisata` (`id_wisata`, `image`, `name`, `about`) VALUES (NULL, '$filename', '$name', '$about')");
    if ($data->execute()) {
        echo "<script>alert('Data Berhasil di Tambah');</script>";
        echo "<script>
                setTimeout(function () {
                window.location.href= 'menu-utama.php';
                },500);
                </script>";
    }
} else {
    echo "<script> alert('Image Not Found!'); </script>";
}
