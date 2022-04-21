<?php
//1. koneksi DB
$dsn = "mysql:host=localhost; dbname=kosthost";
$kunci = new PDO ($dsn, "root", "");

//2. Query SQL
$sql = "SELECT 
			*
		FROM kost
        WHERE IDPemilik = ?";

//3. Execute
$hasil = $kunci->query($sql);

//4. Output
?>