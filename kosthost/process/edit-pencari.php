<?php
//1. Connect DB
$pdo = new PDO("mysql:host=localhost;dbname=kosthost", "root", "");

//2. SQL
$sql = "UPDATE akunPencariKost 
        SET namaPencari = ?,
            telepon = ?, 
            tanggalLahir = ? 
        WHERE IDPencari = ?";

//3. Prepare & Execute
$hasil = $pdo->prepare($sql);
$data = [
            $_POST['namaPencari'],
            $_POST['telepon'],
            $_POST['tanggalLahir'],
            $_POST['id']
];
$stmt = $hasil->execute($data);
//Redirecting
header('Location: ../views/profile-pencari.php');