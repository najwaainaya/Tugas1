<?php

include("config.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $query = "SELECT foto FROM donasi WHERE id=$id";
    $foto = mysqli_query($db, $query);
    $hasil = mysqli_fetch_array($foto);
    $foto_lama=$hasil['foto'];
    unlink("img/".$foto_lama);

    $sql = "DELETE FROM donasi WHERE id=$id";
    $result = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $result ){
        header('Location: index.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
