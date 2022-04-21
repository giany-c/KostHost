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
    <div class="card-group">
        <div class="card bg-light">
            <div class="card-body"style="margin-left:30px; margin-top:30px">
                <h1 style="font-family: 'Ovo';font-size: 35px;">Log In</h1>
                <p style="font-family: 'Ovo';font-size: 15px;">Welcome to Kost Host!</p>
                <form style="margin-top: 25px;">
                    <br>
                    <p style="font-family: 'Ovo'; ">Masuk sebagai: </p>
                    <div>
                        <a href="views/login-pemilik.php" class="btn btn-warning" role="button" style="width: 40%;">Pemilik Kost</a>
                        <a href="views/login-pencari.php" class="btn btn-warning" role="button" style="width: 40%;">Pencari Kost</a>
                    </div>
                    <br>
                    <p style="font-family: 'Ovo';">Belum punya akun? </p>
                    <a href="views/signup.php" class="btn btn-primary" role="button" style="width: 20%; ">Sign Up</a>
                </form>
            </div>
        </div>
        <div class="card bg-secondary">
            <div class="card-body" style="height:575px">
                <img src="images/cover.png" width="100%" height="535px">
            </div>
        </div>
    </div>
</body>