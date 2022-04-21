<?php
session_start();
$IDPencari = $_SESSION['IDPencari'];
$IDKost = $_SESSION['IDKost'];
    try{
        $dsn = "mysql:host=localhost;dbname=kosthost";
        $kunci = new PDO($dsn, 'root','');
        $kunci->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Query SQL - Create Data
        $sql = "INSERT INTO penghuni (namaPenghuni, tanggalLahir, telepon, jenisKelamin, pekerjaan, NIK, status, IDPencari) 
                VALUES (:namaPenghuni, :tanggalLahir, :telepon, :jenisKelamin, :pekerjaan, :NIK, :status, :IDPencari)";

        //Execute Query SQL
        $stmt = $kunci->prepare($sql);
        $data = [
            'namaPenghuni'=>$_POST["namaPenghuni"],
            'tanggalLahir'=>$_POST["tanggalLahir"],
            'telepon'=>$_POST["telepon"],
            'jenisKelamin'=>$_POST["jenisKelamin"],
            'pekerjaan'=>$_POST["pekerjaan"],
            'NIK'=>$_POST["NIK"],
            'status'=>$_POST["status"],
            'IDPencari'=>$IDPencari
        ];
        $stmt->execute($data);
        $_SESSION['IDKost'] = $IDKost;


        // select penghuni
        $sql2 = "SELECT * FROM penghuni WHERE IDPencari = ?";
        $stmt2 = $kunci->prepare($sql2);
        $stmt2->execute([$IDPencari]);

        while ($row = $stmt2->fetch()) :
            $_SESSION['IDPenghuni'] = $row['IDPenghuni'];
        endwhile;
        $IDPenghuni = $_SESSION['IDPenghuni'];
        // echo $IDPencari;
        header('Location: insert-penyewaan.php');
    }catch(PDOException $error){
        echo $error->getMessage();
    }
?>