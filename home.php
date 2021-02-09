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
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">

    <title>Rdnnrfd Shop | Katalog</title>
</head>

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
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-md-3"><br>
                            <div class="card" style="max-width: 15rem;">
                                <img src="assets/images/<?= $data['foto'] ?>" width="100" class="card-img-top">
                                <div class="card-body">
                                    <h5>
                                        <?= $data['NamaBarang']; ?>
                                    </h5>

                                    <small class="text-muted">Harga</small>
                                    <h5><?= "Rp " . number_format($data['Harga'], 2, ",", "."); ?></h5>
                                    <a href="persediaan_detail.php?id=<?= $data['id']; ?>" class="btn btn-secondary btn-sm">Detail</a> |
                                    <a href="transaksi_create.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm">Checkout</a>
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

<!-- Footer -->
<?php include("components/footer.php"); ?>
<!-- End Footer -->

</body>

</html>