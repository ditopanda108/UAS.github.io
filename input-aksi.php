<?php
include 'koneksi.php';
$Nama = $_POST['Nama'];
$Komentar = $_POST['Komentar'];
mysqli_query($koneksi, "insert into kliniksehat values ('$Nama','$Komentar')");

header("location:index.php");
?>