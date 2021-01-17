<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <title>Home</title>
</head>

<body>
    <!-- Navbar -->
    <?php include("components/navbar.php"); ?>
    <!-- End of Navbar -->

    <!-- Content -->
    <div class="container" id="content">
        <article id="beranda" class="container py-5">
            <h2>SELAMAT DATANG <i><?php echo $_SESSION['username']; ?></i> !</h2>
            <br>
            <hr>
            <div class="container py-4">
                <section>
                    <div class="container py-3">
                        <div class="row row-cols-2 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card h-100 shadow p-2 bg-white rounded">
                                    <div class="card-body">
                                        <h5 class="card-title"> <i class="fas fa-user"></i> User</h5>
                                    </div>
                                    <a href="users.php" class="btn btn-success bg-success">Data User <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 shadow p-2 bg-white rounded">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-receipt"></i> Transaksi</h5>
                                    </div>
                                    <a href="transaksi.php" class="btn btn-warning bg-warning">Data Transaksi <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="container py-3">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card h-100 shadow p-2 bg-white rounded">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-file-alt"></i> Laporan</h5>
                                    </div>
                                    <a href="laporan.php" class="btn btn-primary bg-primary">Data Laporan <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 shadow p-2 bg-white rounded">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-info-circle"></i> Informasi</h5>
                                    </div>
                                    <a href="#" class="btn btn-danger bg-danger">Lihat <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 shadow p-2 bg-white rounded">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-cogs"></i> Setting</h5>
                                    </div>
                                    <a href="#" class="btn btn-secondary bg-secondary">Lihat <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </article>
    </div>
    <!-- End Content -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>