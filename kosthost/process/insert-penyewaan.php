<?php
session_start();
$IDKost = $_SESSION['IDKost'];
$IDPenghuni = $_SESSION['IDPenghuni'];
//1. Connect DB
$pdo = new PDO("mysql:host=localhost;dbname=kosthost", "root", "");

//2. SQL
$sql = "INSERT INTO penyewaan (IDKost, IDPenghuni)
        VALUES (?, ?)";

//3. Prepare & Execute
$stmt = $pdo->prepare($sql);
$stmt->execute([$IDKost,
                $IDPenghuni]);
header('Location: ../views/home.php');
?>