<?php
session_start();
$IDPencari = $_SESSION['IDPencari'];
$_SESSION['IDPencari'] = $IDPencari;
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
    <a class="navbar-brand" href="home.php" style="font-family: 'Playfair Display', serif; font-weight: bold; color: #4c7031;">Kost Host</a>

    <!-- Links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link " href="faq-pencari.php" style="font-weight:bold; font-family: 'Ovo', serif; margin-right: 20pt;">FAQ</a>
      </li>
      <li class="nav-item">
        <a href="profile-pencari.php" class="btn btn-info" role="button" style="background-color: #f2ae1c; border: none; color: #4c7031">PROFIL</a>
      </li>
    </ul>
  </nav>

  <div class="container" style="font-family: 'Ovo', serif;">
    <h2 style="margin-top: 80px;   font-size: 60px;color: #4c7031;text-align: center;">Data Diri</h2>
    <p style="font-size: 20px; margin-top: -20px;color: #4c7031;text-align: center;">Calon Penyewa Kost</p>
    <form action="../process/insert-datadiri.php" method="POST" enctype="multipart/form-data" style="width: 500px; display: inline-block;margin-left: 300px;">

      <div class="form-group">
        <label for="NIK">NIK</label>
        <input type="text" class="form-control" id="NIK" placeholder="Masukan NIK" name="NIK">
      </div>
      <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="name" class="form-control" id="namaPenghuni" placeholder="Masukan nama" name="namaPenghuni">
      </div>

      <div class="form-group">
        <p> Jenis Kelamin</p>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="jenisKelamin" value="Laki-Laki">Laki-Laki
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="jenisKelamin" value="Perempuan">Perempuan
          </label>
        </div>
      </div>

      <div class="form-group">
        <label for="tglLahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir">
      </div>

      <label for="status">Status</label>
      <select name="status" class="custom-select mb-3">
        <option selected>Pilih status</option>
        <option value="Single">Belum Kawin</option>
        <option value="Kawin">Kawin</option>
        <option value="Berkeluarga">Kawin memiliki anak</option>
      </select>

      <label for="noTelp">Nomor Telepon</label>
      <div class="form-inline">
        <input type="text" class="form-control" placeholder="08X" id="telepon" name="telepon" style="width: 450px;">
      </div>

      <div class="form-group">
        <label for="pekerjaan">Pekerjaan</label></br>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pekerjaan" value="Pelajar/Mahasiswa">Pelajar/Mahasiswa
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pekerjaan" value="Karyawan">Karyawan
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pekerjaan" value="Lainnya">Lainnya
          </label>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" style="padding-left: 20px;padding-right: 20px;">Confirm</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>