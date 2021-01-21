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

    <title>Katalog</title>
</head>

<body>
    <!-- Navbar -->
    <?php include("components/navbar.php"); ?>
    <!-- End of Navbar -->

    <!-- Content -->
    <div class="container" id="content">
        <article id="beranda" class="container py-5">
            <h2>Hallo!</h2>
            <br>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
            </ul>
            <hr>
            <!-- body -->

            <section class="konten">
                <div class="container">

                    <div class="row">

                        <?php
                        $sql = "SELECT * FROM persediaan";
                        $query = mysqli_query($conn, $sql);
                        while ($data = $query->fetch_assoc()) {
                        ?>
                            <div class="col-md-3"><br>
                                <div class="card" style="max-width: 15rem;">
                                    <img src="images/<?= $data['Foto'] ?>" width="100" class="card-img-top">
                                    <div class="card-body">
                                        <h5>
                                            <?= $data['NamaBarang']; ?>
                                        </h5>

                                        <small class="text-muted">Harga</small>
                                        <h5><?= "Rp " . number_format($data['Harga'], 2, ",", "."); ?></h5>
                                        <a href="persediaan_detail.php?id=<?= $data['id']; ?>" class="btn btn-secondary">Detail</a> |
                                        <a href="transaksi_create.php?id=<?= $data['id']; ?>" class="btn btn-danger">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        mysqli_close($conn);
                        ?>
                    </div>

                </div>
            </section>

            <!-- end body -->
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