<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div>
        <menu>
            <ul>
                <li><a href="donasi.php">Tentang</a></li>
                <li><a href="donasi.php">Donasi Sekarang</a></li>
                <li><a href="index.php">Beranda</a><li></li>
            </ul>
        </menu>
    <hr>
    </div>
<div style="text-align: left;"></div>
    <header>
        <h3>Formulir Donatur</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">

        <fieldset>

        <p>
            <label for="nomer">No Donatur: </label>
            <input type="text" name="nomer" placeholder="Nomer Donatur" required>
        </p>
        <p>
            <label for="nama">Nama Lengkap: </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
        </p>
        <p>
            <label>Kategori Donasi: </label>
            <label><input type="radio" name="kategori"  value="Donasi Bencana Alam" required> Donasi Bencana Alam</label>
            <label><input type="radio" name="kategori"  value="Donasi Covid-19" required> Donasi Covid-19</label>
            <label><input type="radio" name="kategori"  value="Donasi Beasiswa dan Pendidikan" required> Donasi Beasiswa dan Pendidikan</label>
            <label><input type="radio" name="kategori"  value="Donasi Panti Asuhan" required> Donasi Panti Asuhan</label>
        </p>
        <p>
            <label for="jumlah">Jumlah Donasi: </label>
            <input type="text" name="jumlah" required>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat" required>
        </p>
        <p>
            <label>Tanggal Donasi</label>
            <input placeholder="Pilih Tanggal" type="date" name="dates" required>
        </p>
        <p>
            <label for="foto">Photo Profil: </label>
            <input type="file" name="foto"/>
        </p>
        <p>
            <input type="submit" value="Submit" name="Submit" />
        </p>

        </fieldset>

    </form>
</div>
</body>
</html>