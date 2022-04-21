<?php
session_start();
$IDPemilik = $_SESSION['IDPemilik'];
//1. koneksi DB
$dsn = "mysql:host=localhost; dbname=kosthost";
$kunci = new PDO($dsn, "root", "");

//2. Query SQL
$sql = "SELECT 
   *
  FROM kost
        WHERE IDPemilik = ?";

//3. Prepare & Execute
$hasil = $kunci->prepare($sql);
$hasil->execute([$IDPemilik]);
$_SESSION['IDPemilik'] = $IDPemilik;
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
        <a class="navbar-brand" href="dashboard-pemilik.php" style="font-family: 'Playfair Display', serif; color: #4c7031; font-weight: bold;">Kost Host</a>

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link " href="pengajuansewa-pemilik.php" style="font-family: 'Ovo', serif; margin-right: 10pt; color: #4c7031">
                    <span data-feather="bell"></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="faq-pemilik.php" style="font-family: 'Ovo', serif; margin-right: 20pt; color: #4c7031; font-weight:bold">FAQ</a>
            </li>
            <li class="nav-item">
                <a href="profile-pemilik.php" class="btn btn-info" role="button" style="background-color: #f2ae1c; border: none; color: #4c7031">PROFIL</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid" style="margin-top: 90px; margin-bottom: 10px;">
        <div class="row">
            <div class="col-sm-4">
                <h3 style="text-align: left; font-family: 'Ovo', serif; margin-left: 60px; color: #4c7031;">
                    Dashboard</h3>
                <a href="tambahkost-pemilik.php" class="btn btn-primary" style="margin-left: 60px"><span data-feather="plus-circle"></span> Tambah</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card-deck" style="margin-left: 40px;">
            <?php
            while ($data = $hasil->fetch()) :
            ?>
                <div style="margin-top: 20px;">
                    <div class="card" style="width:250px">
                        <img class="card-img-top" src="<?= $data['fotoKost']; ?>" alt="Card image" style="width:100%; height:250px">
                        <div class="card-body">
                            <h4 class="card-title" style="font-family: 'Playfair', serif; font-weight:bold"><?= $data['namaKost']; ?></h4>
                            <p class="card-text"><?= $data['alamatKost']; ?><br>
                                <?= $data['kotaKost']; ?> <br>
                                Jenis Kost : <?= $data['jenisKost']; ?> <br>
                                Jumlah Kamar : <?= $data['jumlahKamar']; ?> Kamar<br>
                                Harga Kost : Rp<?= $data['hargaKost']; ?> /Bln <br>
                                Fasilitas : <br> <?= $data['deskripsiFasilitas']; ?></p>
                            <a href="editkost-pemilik.php?id=<?= $data['IDKost']; ?>" class="btn btn-warning">
                                <span data-feather="edit"></span> Ubah
                            </a>
                            <a href="../process/delete-kost.php?id=<?= $data['IDKost']; ?>" class="btn btn-danger">
                                <span data-feather="trash-2"></span> Hapus
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
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>