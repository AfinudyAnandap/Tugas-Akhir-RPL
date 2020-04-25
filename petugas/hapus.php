<?php

include '../koneksi.php';

$id_petugas = $_GET['id_petugas'];

mysqli_query($koneksi,"DELETE FROM users WHERE id_petugas='$id_petugas'");

header("location:index.php");

?>