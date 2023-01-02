<!DOCTYPE html>
<html>
<head>
	<title>Praktikum 10</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
	<div class="judul">		
		<h3>PRAKTIKUM 10</h3>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	?>
	<form action="update.php" method="post">		
    <table border="2" class="table" align="center">
    <tr>
                    <td>Nama</td>
                    <td><input type="text" name="Nama"></td>
                </tr>
                <tr>
                    <td>Komentar</td>
                    <td><input type="text" name="Komentar"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
        </table>
	</form>
	<?php  ?>
</body>
</html>



