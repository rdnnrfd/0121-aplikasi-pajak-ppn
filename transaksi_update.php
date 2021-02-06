<?php
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
    <link rel="stylesheet" type="text/css" href="assets/css/transaksi.css">

    <title>Edit Transaction</title>
</head>

<body>
    <!-- Navbar -->
    <?php include("components/navbar.php"); ?>
    <!-- End of Navbar -->

    <!-- Main -->
    <div class="container-fluid py-3">
        <div class="row">
            <div class="col-md-2">
                <!-- SideBar -->
                <?php include("components/sidebar.php"); ?>
                <!-- End Sidebar -->
            </div>
            <!-- Body -->
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit Transaction</div>
                    <div class="card-body">
                        <?php
                        $IdTransaksi = $_GET['IdTransaksi'];

                        $result = mysqli_query($conn, "SELECT * FROM transaksi WHERE IdTransaksi='$IdTransaksi'");
                        while ($data = mysqli_fetch_array($result)) {
                        ?>
                            <form action="transaksi_update_aksi.php" method="post" id="transaksi" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="IdTransaksi">ID Transaksi</label>
                                    <input type="text" name="IdTransaksi" value="<?php echo $data['IdTransaksi']; ?>" class="form-control" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="TglTransaksi">Tanggal Transaksi</label>
                                    <input type="text" name="TglTransaksi" value="<?php echo $data['TglTransaksi']; ?>" class="form-control" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="NamaBarang">Nama Barang</label>
                                    <input type="text" class="form-control" name="NamaBarang" value="<?php echo $data['NamaBarang']; ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="Qty">Qty</label>
                                    <input type="number" class="form-control" name="Qty" value="<?php echo $data['Qty']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="Harga">Harga</label>
                                    <input type="number" class="form-control" name="Harga" value="<?php echo $data['Harga']; ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                </div>

                            </form>
                        <?php
                        }
                        ?>
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

</body>

</html>