<?php
session_start();
// data dari form
$email = $_POST['email'];
$password = $_POST['password'];

// 1.
$k = new PDO("mysql:host=localhost;dbname=kosthost", "root", "");

// 2. 
$sql = "SELECT * FROM akunpencarikost
        WHERE email = ?";

// 3.
$result = $k->prepare($sql);
$result->execute([$email]);

// 4. 
if ($row = $result->fetch()) {
    // username ada
    // cek password apakah sesuai
    if (password_verify($password, $row['password'])) {
        // password cocok
        $_SESSION['IDPencari'] = $row['IDPencari'];
        $_SESSION['user_logged_in'] = true;
        header('Location: ../views/home.php');
    } else {
        // login gagal
        $_SESSION['user_logged_in'] = false;
        header('Location: ../views/login-pencari.php');
    }
} else {
    // login gagal
    $_SESSION['user_logged_in'] = false;
    header('Location: ../views/login-pencari.php');
}
?>