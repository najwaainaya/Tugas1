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

    <form action="">
    <p>
            <h2>Password Asli</h2>
            <h3><?php echo ucwords($_SESSION['pass'])?></h3>
        </p>
        <p>
            <h2>Password Enkripsi </h2>
            <h3><?php echo ucwords($_SESSION['password'])?><h3>
        </p>
    </form>
    


</body>
</html>