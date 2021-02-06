<?php
include("auth/auth_session.php");
include("config.php");
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
    <link rel="stylesheet" type="text/css" href="assets/css/barang.css">

    <title>New Product</title>
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
                        New Product
                    </div>
                    <div class="card-body">
                        <?php
                        $kode = $conn->query("SELECT KodeBarang FROM persediaan ORDER BY KodeBarang DESC");
                        $KodeBarang = mysqli_fetch_array($kode);
                        $kb = $KodeBarang['KodeBarang'];
                        $urut = substr($kb, 6, 8);
                        $tambah = (int) $urut + 1;
                        $bln = date('m');

                        if (strlen($tambah) == 1) {
                            $format = "KB" . $bln . "-00" . $tambah;
                        } elseif (strlen($tambah) == 2) {
                            $format = "KB" . $bln . "-0" . $tambah;
                        } else {
                            $format = "KB" . $bln . "-" . $tambah;
                        }
                        ?>
                        <form role="form" action="persediaan_create.php" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="KodeBarang">Kode Barang</label>
                                <input type="text" name="KodeBarang" id="KodeBarang" class="form-control" value="<?= $format; ?>" readonly>
                            </div>

                            <div class="form-group mb-3">
                                <label for="NamaBarang">Nama Barang</label>
                                <input type="text" name="NamaBarang" id="NamaBarang" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="Deskripsi">Deskripsi</label>
                                <textarea name="Deskripsi" id="Deskripsi" cols="10" class="form-control"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="Harga">Harga</label>
                                <input type="text" name="Harga" id="Harga" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="foto">Foto</label>
                                <input type="file" name="foto" id="foto" required="">
                            </div>

                            <div class="mb-3">
                                <input type="submit" name="Submit" class="btn btn-primary btn-sm" value="Create">
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['Submit'])) {
                            $KodeBarang = $_POST['KodeBarang'];
                            $NamaBarang = $_POST['NamaBarang'];
                            $Deskripsi  = $_POST['Deskripsi'];
                            $Harga      = $_POST['Harga'];
                            $foto       = $_FILES['foto']['name'];

                            if ($foto != "") {
                                $ekstensi_diperbolehkan = array('jpg', 'jpeg', 'png', 'gif');
                                $x = explode('.', $foto);
                                $ekstensi = strtolower(end($x));
                                $file_tmp = $_FILES['foto']['tmp_name'];
                                $rand = rand(1, 999);
                                $nama_foto_baru = $rand . '-' . $foto;
                                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                                    move_uploaded_file($file_tmp, 'assets/images/' . $nama_foto_baru);

                                    $sql = "INSERT INTO persediaan(KodeBarang, NamaBarang, Deskripsi, Harga, foto) VALUES('$KodeBarang', '$NamaBarang', '$Deskripsi', '$Harga', '$nama_foto_baru')";
                                    $result = mysqli_query($conn, $sql);

                                    if (!$result) {
                                        die("Query gagal dijalankan: " . mysqli_errno($conn) .
                                            " - " . mysqli_error($conn));
                                    } else {
                                        echo "<script>alert('Added Product Successfully.');window.location='persediaan.php';</script>";
                                    }
                                } else {
                                    echo "<script>alert('Ekstensi foto yang dibolehkan hanya jpg, jpeg, png atau gif.');window.location='persediaan_create.php';</script>";
                                }
                            } else {
                                $sql = "INSERT INTO persediaan(KodeBarang, NamaBarang, Deskripsi, Harga, foto) VALUES('$KodeBarang', '$NamaBarang', '$Deskripsi', '$Harga', null)";
                                $result = mysqli_query($conn, $sql);

                                if (!$result) {
                                    die("Query gagal dijalankan: " . mysqli_errno($conn) .
                                        " - " . mysqli_error($conn));
                                } else {
                                    echo "<script>alert('Added Product Successfully.');window.location='persediaan.php';</script>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- End Body -->
        </div>
    </div>

    <!-- Footer -->
    <?php include("components/footer.php"); ?>
    <!-- End Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>