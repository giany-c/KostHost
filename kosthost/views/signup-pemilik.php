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
<form action="../process/insert-pemilik.php" method="post">
    <div class="card-group">
        <div class="card bg-light">
            <div class="card-body">
                <div>
                    <a href="signup.php" style="float: right; color: #959392;">
                        <span data-feather="x"></span>
                    </a>
                </div>
                <br>
                <h1 style="font-family: 'Ovo';font-size: 35px;">Sign Up - Pemilik Kost</h1>
                <p style="font-family: 'Ovo';font-size: 15px;">Join Us as A Member of Kost Host!</p>
                <form style="margin-top: 25px;">
                    <div class="form-group">
                        <label for="nama" style="font-family: 'Ovo';">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="dob" style="font-family: 'Ovo';">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="dob" placeholder="YYYY/MM/DD" name="tgl_lahir" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="telpon" style="font-family: 'Ovo';">Nomor Telepon</label>
                        <input type="text" class="form-control" id="telpon" placeholder="Nomor Telepon" name="telepon" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="email" style="font-family: 'Ovo';">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="password" style="font-family: 'Ovo';">Password</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Password" name="password" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <br>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit" style="width: 30%"> Sign Up </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card bg-secondary">
            <div class="card-body" style="height:575px">
                <img src="../images/cover.png" width="100%" height="535px">
            </div>
        </div>
    </div>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</form>