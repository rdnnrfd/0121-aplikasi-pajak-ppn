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

    <title>Rdnnrfd Shop | Add User</title>
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
            // When form submitted, insert values into the database.
            if (isset($_REQUEST['username'])) {
                // removes backslashes
                $username = stripslashes($_REQUEST['username']);
                //escapes special characters in a string
                $username = mysqli_real_escape_string($conn, $username);
                $email    = stripslashes($_REQUEST['email']);
                $email    = mysqli_real_escape_string($conn, $email);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($conn, $password);
                $created_at = date("Y-m-d H:i:s");
                $query    = "INSERT into `user` (username, email, password, created_at)
                     VALUES ('$username', '$email', '" . md5($password) . "', '$created_at')";
                $result   = mysqli_query($conn, $query);
                if ($result) {
                    echo "<script>alert('You are Created successfully.');window.location='users.php';</script>";
                } else {
                    echo "<script>alert('Required fields are missing.');window.location='user_create.php';</script>";
                }
            } else {
            ?>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <h5>New User</h5>
                            <br>
                            <form>
                                <div class="col-12 form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" placeholder="Username" required>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                </div>
                                <div class="col-12 form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">Create</button>
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