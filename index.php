<?php include("config.php");



session_start();
require 'functions.php';


if (!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
    <link rel="stylesheet" href="style1.css">
</head>
<style>
    .image{
        width: 300px;
        height: 500px;
    }
    table tr td{
        height: 200px;            
            }
    td:nth-child(1) {
        width: 50px;
            }
    td:nth-child(2) {
        width: 150px;
            }
    td:nth-child(3) {
    width: 150px;
        }
    td:nth-child(4) {
    width: 150px;
            }
    td:nth-child(5) {
        width: 150px;
            }
            td:nth-child(6) {
        width: 150px;
            }
            td:nth-child(8) {
        width: 150px;
            }
</style>
<body>
    <div>
    <script>alert('Mari Berdonasi');</script>
        <menu>
            <ul>
            <li><a href="tentang.php">Tentang</a></li>
                <li><a href="donasi.php">Donasi Sekarang</a></li>
                <li><a href="index.php">Beranda</a><li></li>
                <li><a href="logout.php">Logout</a><li></li>
            </ul>
        </menu>
    <hr>
    </div>
    <header>
        <?php
        $query1 = mysqli_query($conn, "SELECT * FROM user WHERE id= '$_SESSION[login]'");
        $data = mysqli_fetch_array($query1);
        ?>
        <h3>Selamat Datang <?= $_SESSION['username']; ?></h3>
    </header>

    <nav>
        <a href="donasi.php">[+] Tambah Data Baru Donatur</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Nomer Donatur</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Kategori Donasi</th>
            <th>Tanggal Donasi</th>
            <th>Jumlah Donasi</th>
            <th>Photo</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php 
        $sql = "SELECT * FROM donasi";
        $query = mysqli_query($db, $sql);

        while($donatur = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$donatur['noDonatur']."</td>";
            echo "<td>".$_SESSION['username']."</td>";
            echo "<td>".$donatur['alamat']."</td>";
            echo "<td>".$donatur['kategoriDonasi']."</td>";
            echo "<td>".$donatur['tanggalDonasi']."</td>";
            echo "<td>".$donatur['jumlahDonasi']."</td>";
            echo "<td>"; 
            echo '<img src="img/'.$donatur['foto'].'" border="0" width="180px" height="180px"/>';
            echo "</td>";
            echo "<td>";
            echo "<a href='form-edit.php?id=".$donatur['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$donatur['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
   
        }
        ?>

    </tbody>
    </table>
    <br>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>


</body>
</html>