<?php
require 'functions.php';

// cek apakah tombol submit sudah di tekan apa belom
if( isset($_POST["submit"]) ) {

    //cek data apakah berhasil di tampilkan atau tidak
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Yang Anda Masukkan Berhasil Di Tambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Yang Anda Masukkan Gagal Di Tambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
   <h1>Tambah Data Mahasiswa</h1> 

   <form action="" method="post">
    <ul>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
        </li>
    </ul>
    <ul>
        <li>
            <label for="npm">NPM : </label>
            <input type="text" name="npm" id="npm">
        </li>
    </ul>
    <ul>
        <li>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email">
        </li>
    </ul>
    <ul>
        <li>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan">
        </li>
    </ul>
    <ul>
        <li>
            <label for="gambar">Gambar : </label>
            <input type="text" name="gambar" id="gambar">
        </li><br><br>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
   </form>
</body>
</html>