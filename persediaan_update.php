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
    <link rel="stylesheet" type="text/css" href="assets/css/barang.css">

    <title>Rdnnrfd Shop | Update Item</title>
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
                        <h5>Update Item</h5>

                        <?php
                        $KodeBarang = $_GET['KodeBarang'];

                        $result = mysqli_query($conn, "SELECT * FROM persediaan WHERE KodeBarang='$KodeBarang'");
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>

                            <form action="persediaan_update_aksi.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="KodeBarang">KodeBarang</label>
                                    <input type="text" name="KodeBarang" id="KodeBarang" value="<?php echo $data['KodeBarang']; ?>" class="form-control" required="required" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="NamaBarang">Nama Barang</label>
                                    <input type="text" class="form-control" id="NamaBarang" value="<?php echo $data['NamaBarang']; ?>" name="NamaBarang" required="required">
                                </div>

                                <div class="form-group">
                                    <label for="Deskripsi">Deskripsi</label>
                                    <input type="text" class="form-control" id="Deskripsi" name="Deskripsi" value="<?php echo $data['Deskripsi']; ?>" required="required">
                                </div>

                                <div class="form-group">
                                    <label for="Harga">Harga</label>
                                    <input type="number" class="form-control" id="Harga" value="<?php echo $data['Harga']; ?>" name="Harga" required="required">
                                </div>

                                <div class="form-group">
                                    <label for="foto">Foto</label><br>
                                    <img src="assets/images/<?php echo $data['foto'] ?>" style="width: 100px; margin-right:15px;">
                                    <input type="file" id="foto" name="foto">
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="" class="btn btn-primary" value="Update">
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