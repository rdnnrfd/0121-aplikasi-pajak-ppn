<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('config.php');

if ($_GET) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM transaksi WHERE id ='$id'";
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
    <link rel="stylesheet" type="text/css" href="css/transaksi.css">

    <title>Detail Transaksi</title>
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
                    <h5 class="d-flex justify-content-between align-items-center">
                        Detail Transaksi
                        <a href="transaksi.php" class="btn btn-secondary"> Back</a>
                    </h5>
                    <hr />
                </div>
                <div class="container col-lg-4">
                    <br>
                    <?php
                    $id = $_GET['id'];
                    $query = mysqli_query($conn, "SELECT * FROM transaksi WHERE id='$id'");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <div class="card" style="max-width: 900px;">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <small class="text-muted">Id Transaksi</small>
                                    <h3><?= $data['IdTransaksi']; ?></h3>

                                    <small class="text-muted">Tanggal Transaksi</small>
                                    <h5 class="card-title"><?= $data['TglTransaksi']; ?></h5>

                                    <small class="text-muted">Nama Barang</small>
                                    <h5 class="card-title"><?= $data['NamaBarang']; ?></h5>

                                    <small class="text-muted">Qty</small>
                                    <h5 class="card-title"><?= $data['Qty']; ?></h5>

                                    <small class="text-muted">Harga</small>
                                    <h5><?= "Rp " . number_format($data['Harga'], 2, ",", "."); ?></h5>

                                    <small class="text-muted">Nominal</small>
                                    <h5><?= "Rp " . number_format($data['Nominal'], 2, ",", "."); ?></h5>

                                    <small class="text-muted">PPN</small>
                                    <h5><?= "Rp " . number_format($data['PPN'], 2, ",", "."); ?></h5>

                                    <small class="text-muted">Total</small>
                                    <h5><?= "Rp " . number_format($data['Total'], 2, ",", "."); ?></h5>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>