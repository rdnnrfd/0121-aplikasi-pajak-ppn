<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
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

    <title>Add Transaction</title>
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
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">New Transaction</div>
                    <div class="card-body">
                        <form action="transaksi_create_aksi.php" method="post" id="transaksi" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="IdTransaksi">ID Transaksi</label>
                                <input type="text" name="IdTransaksi" value="<?= $format ?>" class="form-control" readonly>
                            </div>

                            <?php
                            $result = mysqli_query($conn, "SELECT NamaBarang, Harga FROM persediaan");
                            while ($data = mysqli_fetch_array($result)) {
                            ?>

                                <div class="form-group">
                                    <label for="NamaBarang">Nama Barang</label>
                                    <input type="text" class="form-control" name="NamaBarang" value="<?php echo $data['NamaBarang']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="Qty">Qty</label>
                                    <input type="number" class="form-control" name="Qty">
                                </div>

                                <div class="form-group">
                                    <label for="Harga">Harga</label>
                                    <input type="number" class="form-control" name="Harga" value="<?php echo $data['Harga']; ?>" readonly>
                                </div>

                            <?php
                            }
                            ?>

                            <div class="form-group">
                                <input type="submit" name="Submit" class="btn btn-primary" value="Create">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- End Body -->
        </div>
    </div>
    <!-- End Main Body -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>