<?php
//1. Connect DB
$dsn = "mysql:host=localhost; dbname=kosthost";
$kunci = new PDO ($dsn, "root", "");

//2. Query SQL
$sql = "DELETE FROM kost 
        WHERE IDKost = ?";

//3. Execute
$hasil = $kunci->prepare($sql);
$hasil->execute([$_GET['id']]);

//Redirecting
header('Location: ../views/dashboard-pemilik.php');
?>