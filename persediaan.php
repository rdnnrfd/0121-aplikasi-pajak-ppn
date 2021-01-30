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
    <link rel="stylesheet" type="text/css" href="css/barang.css">

    <title>Data Produk</title>
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
                            Data Produk
                            <a href="persediaan_create.php" class="btn btn-primary btn-sm"> <i class="fas fa-plus-circle"></i> Tambah Data</a>
                        </h5>
                    </div>

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $result = mysqli_query($conn, "SELECT * FROM persediaan");
                                while ($data = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <th><?= $no++; ?></th>
                                        <td><?= $data['KodeBarang']; ?></td>
                                        <td><?= $data['NamaBarang']; ?></td>
                                        <td><?= "Rp " . number_format($data['Harga'], 2, ",", "."); ?></td>
                                        <td>
                                            <a href="persediaan_detail.php?id=<?= $data['id']; ?>" class="btn btn-secondary btn-sm">
                                                <i class="far fa-eye" aria-hidden="true"></i>
                                            </a> |
                                            <a href="persediaan_update.php?KodeBarang=<?= $data['KodeBarang']; ?>" class="btn btn-warning btn-sm">
                                                <i class="fa fa-pen-square" aria-hidden="true"></i>
                                            </a> |
                                            <a href="persediaan_delete.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- Body -->

        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>