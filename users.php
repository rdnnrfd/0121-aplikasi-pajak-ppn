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
    <link rel="stylesheet" type="text/css" href="assets/css/users.css">

    <!-- JS -->
    <script src="js/main.js"></script>

    <title>Rdnnrfd Shop | Data User</title>
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
                <div class="card col-12">
                    <div class="card-body">
                        <h5 class="d-flex justify-content-between align-items-center">
                            Data User
                            <a href="user_create.php" class="btn btn-primary btn-sm"> <i class="fas fa-plus-circle"></i> Add User</a>
                        </h5>
                        <br>
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM user";
                                $result = mysqli_query($conn, $query);
                                $no = 1;
                                while ($data = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <th><?= $no++; ?></th>
                                        <td><?= $data['username'] ?></td>
                                        <td><?= $data['email'] ?></td>
                                        <td>
                                            <a class="btn btn-danger btn-sm" href="user_delete.php?id=<?= $data['id'] ?>" onclick="return confirm('Are you sure to delete?')">
                                                <i class="far fa-trash-alt" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Body -->
    </div>
    <!-- End Main Body -->
    <!-- End Content -->

    <!-- Footer -->
    <?php include("components/footer.php"); ?>
    <!-- End Footer -->
</body>

</html>