<?php
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
    <link rel="stylesheet" type="text/css" href="css/transaksi.css">

    <title>Data Transaksi</title>
</head>

<body>
    <!-- Navbar -->
    <?php include "components/navbar.php"; ?>
    <!-- End Navbar -->

    <!-- Main -->
    <div class="container-fluid py-3">
        <div class="row">
            <div class="col-md-2">
                <!-- Sidebar -->
                <?php include "components/sidebar.php"; ?>
                <!-- End Sidebar -->
            </div>
            <!-- Body -->

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5 class="d-flex justify-content-between align-items-center">
                            Data Transaksi
                            <a href="home.php" class="btn btn-primary btn-sm"> <i class="fas fa-plus-circle"></i> Tambah Transaksi</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID Transaksi</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Nominal</th>
                                    <th>PPN</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($conn, "SELECT * FROM transaksi");
                                $no = 1;
                                $PPN = 0;
                                $Nominal = 0;
                                $Total = 0;
                                $TotalTransaksi = 0;

                                while ($data = $query->fetch_assoc()) {
                                    $Nominal = $data['Qty'] * $data['Harga'];
                                    $PPN = $Nominal * 10 / 100;
                                    $Total = $Nominal + $PPN;
                                    $TotalTransaksi += $Total;
                                ?>
                                    <tr>
                                        <th><?= $no++; ?></th>
                                        <td><?php echo $data['IdTransaksi']; ?></td>
                                        <td><?php echo $data['TglTransaksi']; ?></td>
                                        <td><?php echo "Rp " . number_format($data['Nominal'], 2, ",", "."); ?></td>
                                        <td><?php echo "Rp " . number_format($data['PPN'], 2, ",", "."); ?></td>
                                        <td><?php echo "Rp " . number_format($data['Total'], 2, ",", "."); ?></td>
                                        <td>
                                            <a class="btn btn-secondary btn-sm" href="transaksi_detail.php?id=<?= $data['id']; ?>">
                                                <i class="far fa-eye" aria-hidden="true"></i>
                                            </a> |
                                            <a class="btn btn-success btn-sm" href="transaksi_update.php?IdTransaksi=<?= $data['IdTransaksi']; ?>">
                                                <i class="fa fa-pen-square" aria-hidden="true"></i>
                                            </a> |
                                            <a class="btn btn-danger btn-sm" href="transaksi_delete.php?id=<?= $data['id']; ?>" onclick="return confirm('Are you sure to delete?')">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                mysqli_close($conn);
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5" class="table-active">Total Transaksi</th>
                                    <th class="table-active"><?php echo "Rp " . number_format($TotalTransaksi, 2, ",", "."); ?></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Body -->
        </div>
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