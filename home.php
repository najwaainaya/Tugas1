<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Mari Berdonasi</title>
</head>
<style>
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
    <header>
        <h3>Identitas Yang Berdonasi</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Data Baru Donatur</a>
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
            echo "<td>".$donatur['nama']."</td>";
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

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>