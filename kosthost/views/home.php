<?php
session_start();
$IDPencari = $_SESSION['IDPencari'];
//1. koneksi DB
$dsn = "mysql:host=localhost; dbname=kosthost";
$kunci = new PDO($dsn, "root", "");

//2. Query SQL
$sql = "SELECT 
			*
		FROM kost";

//3. Execute
$hasil = $kunci->query($sql);
$_SESSION['IDPencari'] = $IDPencari ;
//4. Output

?>

<head>
    <title>KOST HOST</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.css" />
    <!--Bootstrap CSS-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ovo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg navbar-light fixed-top" style="background-color: #fff0cb;">
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

    <div class="container-fluid" style="background-image: url('../images/banner.png'); width: auto; height: 450px; overflow: hidden; object-fit: cover; margin-top: 40px; padding-top: 10%;">
        <h3 style="text-align: center; font-size: 60px; font-family: 'Ovo', serif; color: #f6e683">Cari Kos?</h3>
        <div class="form-group" style="text-align:center">
            <form name="form" action="hasilcari-pencari.php" method="post">
                <input type="text" class="form-control" id="kotaKost" name="kotaKost" placeholder="Masukkan kota kost" style="width: 500px; display: inline-block;">
                <button type="submit" class="btn btn-primary" style="padding-left: 20px;padding-right: 20px; color: white; height:38px; margin-bottom:3px;">
                    <span data-feather="search"></span></button>
            </form>
        </div>
    </div>

    <div class="iklan">
        <h4 style="text-align: center; font-family: 'Ovo', serif; margin-top: 20pt; color: #4c7031; font-weight:bold;">
            PENAWARAN SPESIAL</h4>
        <div id="demo" class="carousel slide" data-ride="carousel" >

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner" style="text-align:center">
                <div class="carousel-item active">
                    <img src="../images/ads/Ads2.png" alt="Penawaran Spesial" width="auto" height="50%" style="display: inline-block;">
                </div>
                <div class="carousel-item">
                    <img src="../images/ads/Ads1.png" alt="Penawaran Spesial" width="auto" height="50%" style="display: inline-block;">
                </div>
                <div class="carousel-item">
                    <img src="../images/ads/Ads3.png" alt="Penawaran Spesial" width="auto" height="50%" style="display: inline-block;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <div class="container-fluid">
            <h4 style="text-align: center; font-family: 'Ovo', serif; margin-top: 20pt; color: #4c7031; font-weight:bold;">
                INFORMASI KOST</h4>
            <div class="card-deck" style="margin-left: 50px;" >
                <?php
                while ($data = $hasil->fetch()) :
                ?>
                    <div style="margin-top: 20px;">
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="<?= $data['fotoKost']; ?>" alt="Card image" style="width:100%; height:250px">
                            <div class="card-body">
                                <h4 class="card-title" style="font-family: 'Playfair', serif; font-weight:bold"><?= $data['namaKost']; ?></h4>
                                <p class="card-text">
                                <?= $data['alamatKost']; ?><br> 
                                Jenis Kost &nbsp&nbsp: <?= $data['jenisKost']; ?> <br> 
                                Harga Kost : Rp<?= $data['hargaKost']; ?> /Bln</p>
                                <a href="detailkost-pencari.php?id=<?= $data['IDKost']; ?>" class="btn btn-info">
                                    <span data-feather="eye"></span> Pilih
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="ketentuan" style="margin-top:20px; background-color: #fff0cb; padding-bottom:15px;">
            <div class="row">
                <div class="col" style="margin-right: 10px; text-align: justify; margin-top: 10pt; margin-left: 70px;">
                    KostHost menyajikan informasi Kamar kost,lengkap dengan fasilitas kost, harga kost, dan foto kost yang sebisa mungkin 
                    menggambarkan kondisi sebenarnya. Informasi ketersediaan kamar kost dan harga kost kami upayakan selalu di <i>update</i> 
                    untuk memastikan info kost kami akurat dan bermanfaat untuk pencari kost. Kami menyediakan informasi kost khususnya di wilayah 
                    Jakarta, Tangerang, dan Bogor. Kami berusaha agar kedepannya kami mampu menghadirkan informasi kost di wilayah-wilayah lain di Indonesia. </div>
                <div class="col" style="text-align: justify; margin-top: 10pt; margin-right: 10pt;">
                    <H6> KostHost - Kelompok 3 Web Design and Development (Kelas A) </H6>
                    <p>
                        Alexander Bryan Wiratman - 00000036371
                        <br>
                        Giany Caroline Theresia Limanauw - 00000037516
                        <br>
                        Juan Richard Harmel - 00000035131
                        <br>
                        Marco Viriyatama Lim - 00000035986
                        <br>
                        Monica Cornelia - 00000037164
                    </p>
                </div>
            </div>
        </div>

        <footer style="margin-top: 10pt; margin-left: 10pt; font-family: 'Ovo', serif; text-align: center;">&copy; 2021 KOST HOST </footer>
    </div>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>