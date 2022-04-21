<?php
session_start();
$IDPemilik = $_SESSION['IDPemilik'];
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
$_SESSION['IDPemilik'] = $IDPemilik;
?>

<head>
    <title>KOST HOST</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a class="navbar-brand" href="dashboard-pemilik.php" style="font-family: 'Playfair Display', serif; color: #4c7031; font-weight: bold;">Kost Host</a>

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link " href="pengajuansewa-pemilik.php" style="font-family: 'Ovo', serif; margin-right: 10pt; color: #4c7031">
                    <span data-feather="bell"></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="faq-pemilik.php" style="font-weight:bold; font-family: 'Ovo', serif; margin-right: 20pt; color: #4c7031">FAQ</a>
            </li>
            <li class="nav-item">
                <a href="profile-pemilik.php" class="btn btn-info" role="button" style="background-color: #f2ae1c; border: none; color: #4c7031">PROFIL</a>
            </li>
        </ul>
    </nav>

    <!-- Product Detail Start -->
    <form action="../process/edit-kost.php" method="post">
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
                                <div class="col-md-3">
                                    <div class="product-content">
                                        <h6 style="font-family: 'Ovo', serif;">Nama Kost:</h6>
                                        <input type="text" class="form-control" name="namaKost" value="<?= $data['namaKost']; ?>" style="margin-bottom: 5px;" />
                                        <h6 style="font-family: 'Ovo', serif;">Harga:</h6>
                                        <input type="number" class="form-control" id="quantity" min="0" max="100000000" name="hargaKost" value="<?= $data['hargaKost']; ?>" style="margin-bottom: 5px;" />
                                        <h6 style="font-family: 'Ovo', serif;">Alamat:</h6>
                                        <input type="text" class="form-control" name="alamatKost" value="<?= $data['alamatKost']; ?>" style="margin-bottom: 5px;" />
                                        <h6 style="font-family: 'Ovo', serif;">Kota:</h6>
                                        <select name="kotaKost" class="custom-select mb-3" style="max-width: 200px;">
                                            <option selected><?= $data['kotaKost']; ?></option>
                                            <option value="Bogor">Bogor</option>
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tangerang">Tangerang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="product-content">
                                        <h6 style="font-family: 'Ovo', serif;">Jenis Kost:</h6>
                                        <select name="jenisKost" class="custom-select mb-3" style="max-width: 200px;">
                                            <option selected><?= $data['jenisKost']; ?></option>
                                            <option value="Kost Putra">Kost Putra</option>
                                            <option value="Kost Putri">Kost Putri</option>
                                            <option value="Kost Campur">Kost Campur</option>
                                        </select>
                                        <h6 style="font-family: 'Ovo', serif;">Jumlah Kamar Kost:</h6>
                                        <input type="text" class="form-control" name="jumlahKamarKost" value="<?= $data['jumlahKamar']; ?>" style="margin-bottom: 5px;" />
                                        <h6 style="font-family: 'Ovo', serif;">Deskripsi Fasilitas:</h6>
                                        <textarea type="text" class="form-control" name="deskripsiFasilitasKost"><?= $data['deskripsiFasilitas']; ?></textarea>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row product-detail-bottom">
                            <div class="col-lg-12">
                                <h4 style="font-weight: bold;">Fasilitas</h4>
                                <div class="tab-content" style="padding-inline: 30px;">
                                    <h6 style="font-family: 'Ovo', serif;">Deskripsi Fasilitas:</h6>
                                    <textarea type="text" class="form-control" name="deskripsiFasilitasKost"><?= $data['deskripsiFasilitas']; ?></textarea>
                                </div>
                            </div>
                        </div> -->
                        <input type="hidden" name="id" value="<?= $data['IDKost']; ?>">
                        <div class="action" style="text-align: right; width:250px; float:right;">
                            <button class="btn btn-outline-success btn-block">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Product Detail End -->

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>