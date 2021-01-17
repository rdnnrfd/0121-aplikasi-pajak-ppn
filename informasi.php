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
    <link rel="stylesheet" type="text/css" href="css/users.css">

    <title>Informasi</title>
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
                    <div class="card-header">
                        <h5 class="d-flex justify-content-between align-items-center">
                            Informasi
                        </h5>
                    </div>
                    <div class="card-body">

                        <form>
                            <div class="row mb-3">
                                <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-5">
                                    <input type="Nama" class="form-control" id="Nama" aria-label="readonly input example" readonly placeholder="Rdnnrfd Shop">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-5">
                                    <input type="Alamat" class="form-control" id="Alamat" aria-label="readonly input example" readonly placeholder="Jl Pajajaran No.12a Bandung">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-5">
                                    <input type="Email" class="form-control" id="Email" aria-label="readonly input example" readonly placeholder="rdnnrfd.shop@gmail.com">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Telephone" class="col-sm-2 col-form-label">Telephone</label>
                                <div class="col-sm-5">
                                    <input type="Telephone" class="form-control" id="Telephone" aria-label="readonly input example" readonly placeholder="+62 878-2363-3036">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="sosmed" class="col-sm-2 col-form-label">Intagram / Twitter</label>
                                <div class="col-sm-5">
                                    <input type="sosmed" class="form-control" id="sosmed" aria-label="readonly input example" readonly placeholder="@rdnnrfdshop">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Body -->
    </div>
    <!-- End Main Body -->
    <!-- End Content -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>