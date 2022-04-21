<?php
//Data Foto dari Form
$foto = $_FILES['fotoKost'];

//Ekstensi file
$ext = explode(".", $foto['name']);
$ext = end($ext);
$ext = strtolower($ext);

//Array ekstensi yang diterima form
$ext_accepted = ['jpg', 'png', 'jpeg'];

//Cek kesesuaian file yang diupload dengan ekstensi yang diizinkan
if(in_array($ext, $ext_accepted)){
    $sumber = $foto['tmp_name'];
    $tujuan = '../uploads/' . $foto['name'];
    move_uploaded_file($sumber, $tujuan);

    //Connect to Database
    $dsn = "mysql:host=localhost; dbname=kosthost";
    $kunci = new PDO ($dsn, "root", "");

    //Query SQL
    $sql = "INSERT INTO kost (namaKost, alamatKost, kotaKost, jenisKost, jumlahKamar, hargaKost, deskripsiFasilitas, fotoKost, IDPemilik)
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

    //Prepare and Execute
    $hasil = $kunci->prepare($sql);
    $hasil->execute([$_POST['namaKost'], $_POST['alamatKost'],  $_POST['kotaKost'], $_POST['jenisKost'], $_POST['jumlahKamarKost'], $_POST['hargaKost'], $_POST['deskripsiFasilitasKost'], $tujuan, $_POST['idPemilikKost']]);
    header('Location: ../views/dashboard-pemilik.php');
} else {
    echo "File tidak valid sehingga proses insert tidak dapat dilakukan. Silahkan ulangi proses dan masukkan file dengan ekstensi jpg, jpeg, atau png.";
}