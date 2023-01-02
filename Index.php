<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database dan Menampilkan data</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<input type="checkbox" id="check">
        <div class="sidebar">
            <ul>
                <li><a href="">About</a></li>
                <li><a href="">Player</a></li>
                <li><a href="Index.php">Feedback</a></li>
            </ul>
        </div>
        <header>
          <div class="container">
            <h1><a href="">PAPER REX</a></h1>
            <ul>
                <li><a href="">About</a></li>
                <li><a href="">Player</a></li>
                <li><a href="Index.php">Feedback</a></li>
            </ul>
            <label for="check" class="mobile-menu"><i class="fa-solid fa-bars fa-2x"></i></label>
        </div>
        </header>
        <section class="banner">
            <div class="container">
                <div class="banner-left"></div>
                    <img src="img/bg1.jpg">
                    <h2>Assalamualaikum <br>
                    Nama Saya Ryas Pramudito, Saya <span class="efek-ngetik"></span></h2>
                    <p>Selamat Datang Di Website Portofolio Team Favorit Saya di Valorant</p>
            </div>
            </div>
        </section>
        <section id="about">
            <div class="container">
                <h3>About</h3>
                <p>Paper Rex is a Southeast Asian esports organization based in Singapore. It was founded in January 2020 by legendary Counter-Strike player, Harley "dsn" Örwall, together with the founder and chief editor of CSGO2ASIA, Nikhil "nikH" Hathiramani.</p>
                <p>Paper Rex is a Southeast Asian esports organization based in Singapore. It was founded in January 2020 by legendary Counter-Strike player, Harley "dsn" Örwall, together with the founder and chief editor of CSGO2ASIA, Nikhil "nikH" Hathiramani.</p>
            </div>

        </section>
        <section id="Player">
            <div class="container">
                <h3>Player</h3>
                <table border="1" style="margin-left: 37%;" >
                    <tr class="f1">
                        <td>ID</td>
                        <td>Name</td>
                        <td>Role</td>
                        <td>Join Date</td>
                    </tr>
                    <tr>
                        <td>Benkai</td>
                        <td>Benedict Tan</td>
                        <td>Sentinel/Initiator</td>
                        <td>2021-02-08</td>
                    </tr>
                    <tr>
                        <td>d4v41</td>
                        <td>Khalish Rusyaidee</td>
                        <td>Sentinel/Initiator</td>
                        <td>2021-02-08</td>
                    </tr>
                    <tr>
                        <td>mindfreak</td>
                        <td>Aaron Leonhart</td>
                        <td>Controller</td>
                        <td>2021-02-08</td>
                    </tr>
                    <tr>
                        <td>f0rsakeN</td>
                        <td>Jason Susanto</td>
                        <td>Duelist</td>
                        <td>2021-02-08</td>
                    </tr>
                    <tr>
                            <td>Jinggg</td>
                            <td>Wang Jing Jie</td>
                            <td>Duelist</td>
                            <td>2021-09-28</td>
                    </tr>
                    <tr>
                        <td>CigaretteS</td>
                        <td>Patiphan Posri</td>
                        <td>Initiator</td>
                        <td>2022-10-22</td>
                </tr>
                    
                   
                </table>
            </div>
        </section>
        <script src="js/script.js"></script>
        <a class="tombol" href="input.php" style="margin-left: 46%;">Tambah Komentar</a>
        <table border="2" style="margin-left: 45%;">
            <?php
            include "koneksi.php";
            $data = mysqli_query($koneksi, 'select * from kliniksehat');
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $d['Nama']?></td>
                    <td><?php echo $d['Komentar']?></td>
                    <td>
                        <a class="edit" href="edit.php?Nama=<?php echo $d['Nama']?>">EDIT</a>
                        <a class="hapus" href="delete.php?Nama=<?php echo $d['Nama']?>">Hapus</a>
                    </td>
                </tr>
        <?php    }
            ?>
    </table>
</body>
</html>