<?php
include 'koneksi.php';
$id = $_SESSION['id'];

// $data = $conn->prepare('SELECT * FROM detail WHERE id_detail=:id');
// $data->execute(['id' => $id]);
// $detail = $data->fetch(PDO::FETCH_OBJ);
if (isset($_POST['nama']) || isset($_POST['Password']) || isset($_POST['Email']) || isset($_POST['alamat']) || isset($_POST['no_hp'])) {
    $nama = $_POST['nama'];
    $Password = $_POST['Password'];
    $hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $Email = $_POST['Email'];
    $data = $conn->prepare("UPDATE `user` SET `email` = '$Email', `password` = '$Password', `alamat` = '$alamat', `no_hp` = '$hp', `nama` = '$nama' WHERE `user`.`id_user` = $id;");
        

    if ($data->execute()) {
        echo "<script>alert('Data Berhasil di Ubah');</script>";
        echo "<script>
        setTimeout(function () {
        window.location.href= 'menu-utama.php';
         },500);
        </script>";
    }
}
