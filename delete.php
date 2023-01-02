<?php
include 'koneksi.php';

$Nama   = $_GET['Nama'];

$query="delete from kliniksehat where Nama='$Nama'";
mysqli_query($koneksi, $query);

header("location:index.php");
?>