<?php
//include auth_session.php file on all user panel pages
include("auth/auth_session.php");
require('config.php');

if ($_GET) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM persediaan WHERE id ='$id'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
} else {
    echo "Nomor Transaksi Tidak Terbaca";
    exit;
}
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
    <link rel="stylesheet" type="text/css" href="assets/css/barang_detail.css">

    <title>Rdnnrfd Shop | Detail Item</title>
</head>

<body>
    <!-- Navbar -->
    <?php include("components/navbar.php"); ?>
    <!-- End of Navbar -->

    <!-- Main -->
    <div class="container-fluid py-3">
        <div class="row">
            <!-- Body -->
            <div class="col-md">
                <div class="container">

                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="persediaan.php">Daftar Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
                        </li>
                    </ul>
                    <hr />
                    <h5>
                        DETAIL ITEM
                    </h5>
                </div>
                <div class="container col-lg-9">
                    <br>
                    <?php
                    $id = $_GET['id'];
                    $query = mysqli_query($conn, "SELECT * FROM persediaan WHERE id='$id'");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <div class="card" style="max-width: 900px;">
                            <div class="card-body">
                                <h5>
                                    <?= $data['NamaBarang']; ?>
                                </h5>
                                <div class="row md-1">
                                    <div class="col-md-4">
                                        <td><img src="assets/images/<?= $data['foto'] ?>" width="300"></td>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <small class="text-muted">Kode</small>
                                            <h6 class="card-title"><?= $data['KodeBarang']; ?></h6>

                                            <small class="text-muted">Deskripsi</small>
                                            <p class="card-text"><?= $data['Deskripsi']; ?></p>

                                            <small class="text-muted">Harga</small>
                                            <h5 class="price"><?= "Rp " . number_format($data['Harga'], 2, ",", "."); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            <?php
                    }
                    mysqli_close($conn);
            ?>
            </div>
        </div>
        <!-- End Body -->
    </div>
    <!-- End Main Body -->

    <!-- Footer -->
    <?php include("components/footer.php"); ?>
    <!-- End Footer -->
</body>

</html>