<?php
//include auth_session.php file on all user panel pages
include("auth/auth_session.php");
require('config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">

    <title>Rdnnrfd Shop | Dashboard</title>
</head>

<body>
    <!-- Navbar -->
    <?php include("components/navbar.php"); ?>
    <!-- End of Navbar -->

    <!-- Content -->
    <div class="container" id="content">
        <article id="beranda" class="container py-5">
            <h2>Halo <i><?php echo $_SESSION['username']; ?></i> !</h2>
            <br>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
                </li>
            </ul>
            <hr>
            <div class="container py-4">
                <section>
                    <div class="container py-3">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card h-100 p-2 bg-white rounded">
                                    <div class="card-body">
                                        <h5 class="card-title"> <i class="fas fa-user"></i> User</h5>
                                    </div>
                                    <a href="users.php" class="btn btn-success bg-success">Data User <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 p-2 bg-white rounded">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-clipboard-list"></i> Daftar Produk</h5>
                                    </div>
                                    <a href="persediaan.php" class="btn btn-info bg-info">Daftar Produk <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 p-2 bg-white rounded">
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
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card h-100 p-2 bg-white rounded">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-file-alt"></i> Jurnal</h5>
                                    </div>
                                    <a href="laporan.php" class="btn btn-primary bg-primary">Data Jurnal <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 p-2 bg-white rounded">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-info-circle"></i> Informasi</h5>
                                    </div>
                                    <a href="informasi.php" class="btn btn-danger bg-danger">Lihat <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </article>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <?php include("components/footer.php"); ?>
    <!-- End Footer -->

</body>

</html>