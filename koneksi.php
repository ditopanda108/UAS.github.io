<?php
// perintah php untuk akses ke database
$koneksi = mysqli_connect("localhost", "root", "", "prak8");

if (!$koneksi) {
    die("Koneksi Tidak berhasi : " . mysqli_connect_error());
}
?>