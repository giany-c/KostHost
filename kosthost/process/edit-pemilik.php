<?php
session_start();
$IDPemilik = $_SESSION['IDPemilik'];
//1. Connect DB
$pdo = new PDO("mysql:host=localhost;dbname=kosthost", "root", "");

//2. SQL
$sql = "UPDATE akunPemilikKost 
        SET namaPemilik = ?,
            telepon = ?, 
            tanggalLahir = ? 
        WHERE IDPemilik = ?";

//3. Prepare & Execute
$hasil = $pdo->prepare($sql);
$data = [
            $_POST['namaPemilik'],
            $_POST['telepon'],
            $_POST['tanggalLahir'],
            $_POST['id']
];
$stmt = $hasil->execute($data);
$_SESSION['IDPemilik'] = $IDPemilik;
//Redirecting
header('Location: ../views/profile-pemilik.php');