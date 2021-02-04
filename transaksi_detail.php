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
    <link rel="stylesheet" type="text/css" href="assets/css/transaksi_detail.css">

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
                <div class="container col-sm-4">
                    <br>
                    <div class="card">
                        <div class=" col-sm">
                            <div class="card-body">
                                <div class="col-md-auto">
                                    <h5>Detail Transaksi</h5>
                                    <hr>
                                </div>
                                <?php
                                $IdTransaksi = $_GET['IdTransaksi'];
                                $query = mysqli_query($conn, "SELECT * FROM transaksi WHERE IdTransaksi='$IdTransaksi'");
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <th>Id Transaksi</th>
                                                <td colspan="3"><?= $data['IdTransaksi']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Transaksi</th>
                                                <td colspan="3"><?= $data['TglTransaksi']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Barang</th>
                                                <td colspan="3"><?= $data['NamaBarang']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jumlah</th>
                                                <td colspan="3"><?= $data['Qty']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Harga</th>
                                                <td colspan="3"><?= "Rp " . number_format($data['Harga'], 2, ",", "."); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Total Penjualan</th>
                                                <td colspan="3"><?= "Rp " . number_format($data['Nominal'], 2, ",", "."); ?></td>
                                            </tr>
                                            <tr>
                                                <th>PPN Keluaran (10%)</th>
                                                <td colspan="3"><?= "Rp " . number_format($data['PPN'], 2, ",", "."); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Total Pembayaran</th>
                                                <td colspan="3"><?= "Rp " . number_format($data['Total'], 2, ",", "."); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="col-md-auto">
                                        <hr>
                                        <h5><a href=" transaksi.php" class="btn btn-secondary btn-sm"> Back</a></h5>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>