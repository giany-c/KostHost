<?php
    //Connect to Database
    $dsn = "mysql:host=localhost; dbname=kosthost";
    $kunci = new PDO ($dsn, "root", "");

    //Query SQL
    $sql = "UPDATE kost
            SET namaKost = ?,
                hargaKost = ?,
                alamatKost = ?,
                kotaKost = ?,
                jenisKost = ?,
                jumlahKamar = ?,
                deskripsiFasilitas = ?
            WHERE IDKost = ?";
    
    //Prepare and Execute
    $hasil = $kunci->prepare($sql);
    $data = [
        $_POST['namaKost'],
        $_POST['hargaKost'],
        $_POST['alamatKost'],
        $_POST['kotaKost'],
        $_POST['jenisKost'],
        $_POST['jumlahKamarKost'],
        $_POST['deskripsiFasilitasKost'],
        $_POST['id']
    ];
    $hasil->execute($data);

    //Redirecting
    header('Location: ../views/dashboard-pemilik.php');
?>