<?php
session_start();
$IDPencari = $_SESSION['IDPencari'];
//1. koneksi DB
$dsn = "mysql:host=localhost; dbname=kosthost";
$kunci = new PDO($dsn, "root", "");

//2. Query SQL
$sql = "SELECT * FROM kost WHERE IDKost = ?";

//3. Execute
$hasil = $kunci->prepare($sql);
$hasil->execute([$_GET['id']]);

//4. Output
$data = $hasil->fetch();
$_SESSION['IDKost'] = $data['IDKost'];
$_SESSION['IDPencari'] = $IDPencari;
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOST HOST</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;800&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <!--Nav Bar-->
    <nav class="navbar navbar-expand-sm bg navbar-light fixed-top" style="background-color: #fdfdfd;">
        <!-- Brand/logo -->
        <img src="../images/logoHijau.png" style="width: 8%; height: 8%;">
        <a class="navbar-brand" href="home.php" style="font-family: 'Playfair Display', serif; color: #4c7031; font-weight: bold;">Kost Host</a>

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link " href="faq-pencari.php" style="font-weight:bold; font-family: 'Ovo', serif; margin-right: 20pt; color: #4c7031">FAQ</a>
            </li>
            <li class="nav-item">
                <a href="profile-pencari.php" class="btn btn-info" role="button" style="background-color: #f2ae1c; border: none; color: #4c7031">PROFIL</a>
            </li>
        </ul>
    </nav>

    <!-- Product Detail Start -->
    <div class="product-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-detail-top">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="product-slider-single" style="margin-top:20px;margin-bottom:20px">
                                    <img src="<?= $data['fotoKost']; ?>" alt="Product Image">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="product-content">
                                    <div class="title">
                                        <h1><?= $data['namaKost']; ?></h1>
                                    </div>
                                    <div class="price">
                                        <p>Rp. <?= $data['hargaKost']; ?> / Bulan</p>
                                    </div><br></br><br>
                                    <div class="p-size" style="font-weight:bold">
                                        <span data-feather="map-pin"></span>
                                        <?= $data['kotaKost']; ?> <br>
                                        &emsp;&nbsp;&nbsp;&nbsp;<?= $data['alamatKost']; ?>
                                    </div>
                                    <div>
                                        <p>Jenis Kost &nbsp;: <?= $data['jenisKost']; ?><br>Fasilitas &ensp;&ensp;: <?= $data['deskripsiFasilitas']; ?></p>
                                        <p></p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row product-detail-bottom">
                        <div class="col-lg-12">
                            <h4 style="font-weight: bold;">Fasilitas</h4>
                            <div class="tab-content" style="padding-inline: 30px;">
                                <h6 style="font-family: 'Ovo', serif;">Deskripsi Fasilitas:</h6>
                                <p><?= $data['deskripsiFasilitas']; ?></p>
                            </div>
                        </div>
                    </div> -->
                    <div class="action" style="text-align: right; width:250px; float: right">
                        <button onclick="location.href = 'datadiri-pencari.php'" class="btn btn-outline-success btn-block">Book</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Detail End -->

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>