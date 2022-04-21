<?php
session_start();
$IDPemilik = $_SESSION['IDPemilik'];
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
        <h2 style="margin-top: 80px;   font-size: 60px;color: #4c7031;text-align: center;">Tambah Kost</h2>
        <p style="font-size: 20px; margin-top: -20px;color: #4c7031;text-align: center;">Masukkan Data Kost</p>
        <form action="../process/insert-kost.php" method="post" enctype="multipart/form-data" style="width: 500px; display: inline-block;margin-left: 300px;">
            <div class="form-group">
                <label for="namaKost">Nama Kost</label>
                <input type="text" class="form-control" id="namaKost" placeholder="Masukan nama" name="namaKost">
            </div>
            <div class="form-group">
                <label for="alamatKost">Alamat</label>
                <input type="text" class="form-control" id="alamatKost" placeholder="Masukan alamat kost" name="alamatKost">
            </div>

            <label for="kotaKost">Kota</label>
            <select name="kotaKost" class="custom-select mb-3">
                <option selected>Pilih kota</option>
                <option value="Bogor">Bogor</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Tangerang">Tangerang</option>
            </select>
            
            <div class="form-group">
                <p> Jenis Kost</p>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="jenisKost" value="Kost Putra">Kost Putra
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="jenisKost" value="Kost Putri">Kost Putri
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="jenisKost" value="Kost Campur">Kost Campur
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="jumlahKamarKost">Jumlah Kamar</label>
                <input type="number" class="form-control" id="jumlahKamarKost" placeholder="Masukan jumlah kamar kost" name="jumlahKamarKost">
            </div>
            <div class="form-group">
                <label for="hargaKost">Harga Sewa</label>
                <input type="number" class="form-control" id="hargaKost" placeholder="Masukan harga sewa kost" name="hargaKost">
            </div>
            <div class="form-group">
                <label for="deskripsiFasilitasKost">Deskripsi Fasilitas</label>
                <input type="text" class="form-control" id="deskripsiFasilitasKost" placeholder="Masukan fasilitas kost, dan lain-lain" name="deskripsiFasilitasKost">
            </div>
            <div class="form-group">
                <label for="fotoKost">Foto Kost</label>
                <input type="file" class="form-control" id="fotoKost" name="fotoKost">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="idPemilikKost" name="idPemilikKost" value="<?= $IDPemilik ?>">
            </div>
            <button type="submit" class="btn btn-primary" style="padding-left: 20px;padding-right: 20px;">Save</button>
    </div>
    </form>
    </div>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>