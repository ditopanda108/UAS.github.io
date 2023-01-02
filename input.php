<!DOCTYPE html>
<html>
    <head>
        <title>Klinik Sehat</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="satu">
            <h1>Komentar</h1>
        </div>
        <br>
        <a href="index.php">Lihat Semua Data</a>
        <br>
        <h3>Inputkan Data Baru</h3>
        <form action="input-aksi.php" method="post">
            <table>
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
    </body>
</html>