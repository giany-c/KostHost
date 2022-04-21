<?php

$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

//1. Connect DB
$pdo = new PDO("mysql:host=localhost;dbname=kosthost", "root", "");

//2. SQL
$sql = "INSERT INTO akunpencarikost (namaPencari, tanggalLahir, telepon, email, password)
        VALUES (?, ?, ?, ?, ?)";

//3. Prepare & Execute
$stmt = $pdo->prepare($sql);
$stmt->execute([$_POST['nama'],
                $_POST['tgl_lahir'],
                $_POST['telepon'],
                $_POST['email'],
                $password]);
header('Location: ../views/login-pencari.php');
?>