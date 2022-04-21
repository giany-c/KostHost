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
                <a class="nav-link" href="faq-pemilik.php" style="font-weight:bold; font-family: 'Ovo', serif; margin-right: 20pt;">FAQ</a>
            </li>
            <li class="nav-item">
                <a href="profile-pemilik.php" class="btn btn-info" role="button" style="background-color: #f2ae1c; border: none; color: #4c7031">PROFIL</a>
            </li>
        </ul>
    </nav>

    <div class="container" style="font-family: 'Ovo', serif; text-align: center; margin-bottom:20px">
        <h2 style="margin-top: 100px;  color: #4c7031; ">Frequently Asked Questions</h2>
        <div class="container">
            <div class="card" style="width: 700px; display: inline-block; margin-top:20px">
                <div class="card-header bg-success text-white">
                    Bagaimana cara mendaftarkan data kost baru?
                </div>
                <div class="card-body">
                    Untuk mendaftarkan kost, Anda akan diminta mengisi informasi kost dengan lengkap pada menu Tambah yang dapat diklik pada dashboard. Ada pun informasi kost tersebut diantaranya adalah:
                    Nama Kost, Alamat Kost, Kota Kost, Jenis Kost, Ketersediaan Kamar, Harga Sewa Kost per bulan, Fasilitas Kost, dan Foto Kost.
                </div>
            </div>
            <div class="card" style="width: 700px; display: inline-block; margin-top: 20px;">
                <div class="card-header bg-success text-white">
                    Bagaimana cara mengupdate informasi kost?
                </div>
                <div class="card-body">
                    Anda dapat melakukan update kost melalui menu Edit Kos yang dapat diakses melalui tombol Ubah pada bagian bawah Data Kost yang terdapat pada Dashboard.
                </div>
            </div>
            <div class="card" style="width: 700px; display: inline-block; margin-top: 20px;">
                <div class="card-header bg-success text-white">
                    Bagaimana cara mengetahui Kost yang saya tambahkan telah diajukan sewa oleh pencari Kost?
                </div>
                <div class="card-body">
                    Anda dapat melihat informasi Kost Anda yang diajukan sewa beserta dengan data diri calon penyewa pada bagian Pengajuan Sewa.
                </div>
            </div>
            <div class="card" style="width: 700px; display: inline-block; margin-top: 20px;">
                <div class="card-header bg-success text-white">
                    Mengapa kost yang saya buat tambahkan tidak dapat dihapus?
                </div>
                <div class="card-body">
                    Kost yang Anda tambahkan tidak dapat dihapus karena Kost tersebut sedang di booking oleh pencari. Kemungkinan Anda belum menghubungi penyewa sehingga data penyewa masih terdapat pada bagian Pengajuan Sewa.
                </div>
            </div>
            <div class="card" style="width: 700px; display: inline-block; margin-top: 20px;">
                <div class="card-header bg-success text-white">
                    Bagaimana mengubah data akun saya?
                </div>
                <div class="card-body">
                    Data akun dapat diubah melalui menu Profil. Adapun data yang dapat diubah adalah Nama Lengkap, Tanggal Lahir, dan Nomor Telepon saja.
                </div>
            </div>
        </div>
    </div>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>