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

    <title>Rdnnrfd Shop | Add Transaction</title>
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
                    <div class="card-body">
                        <h5>New Transaction</h5>
                        <br>
                        <?php
                        $baru = $conn->query("SELECT transaksi.*, persediaan.* FROM transaksi, persediaan ORDER BY transaksi.IdTransaksi DESC");
                        $IdTransaksi = mysqli_fetch_array($baru);
                        $kt = $IdTransaksi['IdTransaksi'];
                        $urut = substr($kt, 6, 8);
                        $tambah = (int) $urut + 1;
                        $bln = date('m');

                        if (strlen($tambah) == 1) {
                            $format = "KT" . $bln . "-00" . $tambah;
                        } elseif (strlen($tambah) == 2) {
                            $format = "KT" . $bln . "-0" . $tambah;
                        } else {
                            $format = "KT" . $bln . "-" . $tambah;
                        }
                        ?>
                        <?php
                        $id = $_GET['id'];
                        $result = mysqli_query($conn, "SELECT NamaBarang, Harga FROM persediaan WHERE id='$id'");

                        while ($data = mysqli_fetch_array($result)) {
                        ?>
                            <form action="transaksi_create_aksi.php" method="post" id="transaksi" enctype="multipart/form-data">
                                <div class="row g-2">
                                    <div class="col-md-6 form-group">
                                        <label for="IdTransaksi">ID Transaksi</label>
                                        <input type="text" name="IdTransaksi" value="<?= $format ?>" class="form-control" readonly>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="TglTransaksi">Tanggal Transaksi</label>
                                        <input type="text" name="TglTransaksi" value="<?= date('d-m-Y'); ?>" class="form-control" readonly>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="NamaBarang">Nama Barang</label>
                                        <input type="text" class="form-control" name="NamaBarang" value="<?php echo $data['NamaBarang']; ?>" readonly>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="Qty">Jumlah</label>
                                        <input type="number" class="form-control" name="Qty">
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="Harga">Harga</label>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text" id="basic-addon1">Rp</span>
                                            <input type="number" class="form-control" name="Harga" value="<?php echo $data['Harga']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group">
                                        <button type="submit" name="Submit" class="btn btn-primary btn-sm">Create</button>
                                    </div>
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