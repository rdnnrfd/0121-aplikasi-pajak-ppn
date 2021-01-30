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
    <link rel="stylesheet" type="text/css" href="css/barang.css">

    <title>Update Item</title>
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
                    <div class="card-header">Update Item</div>
                    <div class="card-body">

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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>