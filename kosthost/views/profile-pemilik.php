<?php
session_start();
$IDPemilik = $_SESSION['IDPemilik'];
//1. koneksi DB
$dsn = "mysql:host=localhost; dbname=kosthost";
$kunci = new PDO($dsn, "root", "");

//2. Query SQL
$sql = "SELECT 
			*
		FROM akunPemilikKost
        WHERE IDPemilik = ?";

//3. Prepare & Execute
$hasil = $kunci->prepare($sql);
$hasil->execute([$IDPemilik]);

//4. Output
$data = $hasil->fetch();
$_SESSION['IDPemilik'] = $IDPemilik;
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
</head>

<body>
    <nav class="navbar navbar-expand-sm bg navbar-light fixed-top" style="background-color: #fff0cb;">
        <!-- Brand/logo -->
        <img src="../images/logoHijau.png" style="width: 8%; height: 8%;">
        <a class="navbar-brand" href="dashboard-pemilik.php" style="font-family: 'Playfair Display', serif; font-weight: bold; color: #4c7031;">Kost Host</a>

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link " href="pengajuansewa-pemilik.php" style="font-family: 'Ovo', serif; margin-right: 10pt; color: #4c7031">
                    <span data-feather="bell"></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="faq-pemilik.php" style="font-weight:bold; font-family: 'Ovo', serif; margin-right: 20pt;">FAQ</a>
            </li>
            <li class="nav-item">
                <a href="profile-pemilik.php" class="btn btn-info" role="button" style="background-color: #f2ae1c; border: none; color: #4c7031">PROFIL</a>
            </li>
        </ul>
    </nav>

    <div class="container" style="font-family: 'Ovo', serif;">
        <h2 style="margin-top: 80px;   font-size: 60px;color: #4c7031;text-align: center;">Profil</h2>
        <p style="font-size: 20px; margin-top: -20px;color: #4c7031;text-align: center;">Pemilik Kost</p>
        <div style="width: 500px; display: inline-block;margin-left: 300px;">

            <div class="form-group">
                <label for="namaPemilik">Nama Lengkap</label>
                <input type="text" class="form-control" id="namaPemilik" name="namaPemilik" value="<?= $data['namaPemilik'] ?>" disabled>
            </div>
            <div class="form-group">
                <label for="tglLahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" value="<?= $data['tanggalLahir'] ?>" disabled>
            </div>
            <label for="noTelp">Nomor Telepon</label>
            <div class="form-group">
                <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $data['telepon'] ?>" disabled>
            </div>
            <input type="hidden" class="form-control" id="id" name="id" value="<?= $IDPemilik ?>">
            <div class="form-group" style="text-align:center;">
                <button onclick="location.href='editprofile-pemilik.php'" class="btn btn-warning" style="padding-left: 20px;padding-right: 20px;">Edit</button>
                <button onclick="location.href='../process/logout.php'" class="btn btn-secondary" style="padding-left: 20px;padding-right: 20px; margin-left:10px">Log Out</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>