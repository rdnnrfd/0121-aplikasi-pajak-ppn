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
    <link rel="stylesheet" type="text/css" href="assets/css/informasi.css">

    <title>Rdnnrfd Shop | Informasi</title>
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
                        <h5 class="d-flex justify-content-between align-items-center">
                            Informasi
                        </h5>
                        <br>
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
                                <label for="sosmed" class="col-sm-2 col-form-label">Intagram</label>
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

    <!-- Footer -->
    <?php include("components/footer.php"); ?>
    <!-- End Footer -->

</body>

</html>