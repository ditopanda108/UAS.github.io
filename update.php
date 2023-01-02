<?php
include 'koneksi.php';

$Nama = $_POST['Nama'];
$Komentar = $_POST['Komentar'];

mysqli_query($koneksi, "UPDATE kliniksehat SET Komentar='$Komentar' WHERE Nama='$Nama'");
header("location:index.php?pesan=update");
    

?>