<?php

include 'koneksi.php';
$id = $_GET['id'];

$data = $conn->prepare("DELETE FROM `wisata` WHERE `wisata`.`id_wisata` = $id ");
if ($data->execute()) {
    echo "<script>alert('Data Berhasil di Hapus');</script>";
    echo "<script>
    setTimeout(function () {
    window.location.href= 'menu-utama.php';
 
     },500);
    </script>";
}