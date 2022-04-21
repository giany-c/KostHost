<?php
    $dsn = "mysql:host=localhost; dbname=kosthost";
    $kunci = new PDO ($dsn, "root", "");
    
    $sql = "DELETE FROM penyewaan 
            WHERE IDSewa = ?";

    $hasil = $kunci->prepare($sql);
    $hasil->execute([$_GET['id']]);

    header('Location: ../views/pengajuansewa-pemilik.php');
?>