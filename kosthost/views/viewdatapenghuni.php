<?php
//1. koneksi DB
$dsn = "mysql:host=localhost; dbname=kosthost";
$kunci = new PDO($dsn, "root", "");

//2. Query SQL
$sql = "SELECT * FROM penghuni
        WHERE idPenghuni = ?";

//3. Execute
$hasil = $kunci->prepare($sql);
$hasil->execute([$_GET['idPenghuni']]);
$row = $hasil->fetch();
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
    <img src="images/logoHijau.png" style="width: 8%; height: 8%;">
    <a class="navbar-brand" href="index.php" style="font-family: 'Playfair Display', serif; font-weight: bold; color: #4c7031;">Kost Host</a>

    <!-- Links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link " href="faq-pencari.php" style="font-family: 'Ovo', serif; margin-right: 20pt;">FAQ</a>
      </li>
      <li class="nav-item">
        <?php if ($_SESSION['user_logged_in'] = true) : ?>
          <a href="#" class="btn btn-info" role="button" style="background-color: #f2ae1c; border: none; color: #4c7031">PROFIL</a>
        <?php else : ?>
          <a href="login.php" class="btn btn-info" role="button" style="background-color: #f2ae1c; border: none; color: #4c7031">LOG IN</a>
        <?php endif; ?>
      </li>
    </ul>
  </nav>

  <div class="container" style="font-family: 'Ovo', serif;">
    <h2 style="margin-top: 80px;   font-size: 60px;color: #4c7031;text-align: center;">Data Diri</h2>
    <p style="font-size: 20px; margin-top: -20px;color: #4c7031;text-align: center;">Calon Penyewa Kost</p>

    <form action="process/insert-datadiri.php" method="POST" enctype="multipart/form-data" style="width: 500px; display: inline-block;margin-left: 300px;">

      <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="name" class="form-control" id="name" name="nama" value="<?= $row['nama']; ?>" disabled>
      </div>

      <div class="form-group">
        <p> Jenis Kelamin</p>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="gender" value="Laki-Laki" <?php if ($row['gender'] == "Laki-Laki") {
                                                                                            echo "checked";
                                                                                          } ?> disabled>Laki-Laki
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="gender" value="Perempuan" <?php if ($row['gender'] == "Perempuan") {
                                                                                            echo "checked";
                                                                                          } ?> disabled>Perempuan
          </label>
        </div>
      </div>

      <div class="form-group">
        <label for="tglLahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tglLahir" name="tglLahir" value="<?= $row['tglLahir']; ?>" disabled>
      </div>

      <div class="form-group">
        <label for="city">Kota Asal</label>
        <select name="city" class="custom-select mb-3" value="<?= $row['kotaAsal']; ?>" disabled>
          <option selected>Pilih kota asal</option>
          <option value="jakarta">Jakarta</option>
          <option value="tangerang">Tangerang</option>
          <option value="bogor">Bogor</option>
        </select>

        <label for="status">Status</label>
        <select name="status" class="custom-select mb-3" value="<?= $row['status']; ?>" disabled>
          <option selected>Pilih status</option>
          <option value="belum">Belum Kawin</option>
          <option value="kawin">Kawin</option>
          <option value="anak">Kawin memiliki anak</option>
        </select>

        <label for="study">Pendidikan Terakhir</label>
        <select name="study" class="custom-select mb-3" value="<?= $row['pendidikan']; ?>" disabled>
          <option selected>Pilih pendidikan terakhir</option>
          <option value="SD">SD</option>
          <option value="SMP">SMP</option>
          <option value="SMA/SMK">SMA/SMK</option>
          <option value="Diploma">Diploma</option>
          <option value="S1">S1</option>
          <option value="S2">S2</option>
          <option value="Se">S3</option>
        </select>

        <label for="noTelp">Nomor Telepon</label>
        <div class="form-inline">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">+62</span>
            </div>
            <input type="text" class="form-control" id="noTelp" name="noTelp" style="width: 450px;" value="<?= $row['noTelp']; ?>" disabled>
          </div>
        </div>

        <div class="form-group">
          <label for="job">Pekerjaan</label></br>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="job" value="Pelajar/Mahasiswa" <?php if ($row['pekerjaan'] == "Pelajar/Mahasiswa") {
                                                                                                  echo "checked";
                                                                                                } ?> disabled>Pelajar/Mahasiswa
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="job" value="Karyawan" <?php if ($row['pekerjaan'] == "Karyawan") {
                                                                                          echo "checked";
                                                                                        } ?> disabled>Karyawan
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="job" value="Lainnya" <?php if ($row['pekerjaan'] == "Lainnya") {
                                                                                        echo "checked";
                                                                                      } ?> disabled>Lainnya
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="jobdes">Deskripsi Pekerjaan</label>
          <input type="text" class="form-control" id="jobdes" value="<?= $row['deskripsiPekerjaan']; ?>" disabled>
        </div>
        <!-- <input type="hidden" name="IDKost" value="#"> -->
        <!-- <button type="submit" class="btn btn-primary"style="padding-left: 20px;padding-right: 20px;">Save</button> -->
      </div>

    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>