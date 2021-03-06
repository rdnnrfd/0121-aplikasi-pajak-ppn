<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/register.css">

    <title>Rdnnrfd Shop | Registrasi</title>
</head>

<body>
    <div class="container" id="content">
        <article id="register" class="container py-5">
            <h2>Aplikasi Penjualan & Perhitungan Pajak PPN Keluaran</h2>
            <section>
                <?php
                require('../config.php');
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
                    $updated_at = date("Y-m-d H:i:s");
                    $query    = "INSERT into `user` (username, email, password, created_at, updated_at)
                     VALUES ('$username', '$email', '" . md5($password) . "', '$created_at', '$updated_at')";
                    $result   = mysqli_query($conn, $query);
                    if ($result) {
                        echo "<script>alert('You are registered successfully.');window.location='login.php';</script>";
                    } else {
                        echo "<script>alert('Required fields are missing.');window.location='register.php';</script>";
                    }
                } else {
                ?>
                    <div class="py-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Registrasi</h5><br>
                                            <form class="form" action="" method="post">
                                                <div class="form-group row">
                                                    <label for="username" class="col-md-4 text-md-right">Username</label>
                                                    <div class="col-md-6">
                                                        <input id="username" type="text" class="form-control" name="username" placeholder="Username" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 text-md-right">Email</label>
                                                    <div class="col-md-6">
                                                        <input id="email" type="text" class="form-control" name="email" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 text-md-right">Password</label>
                                                    <div class="col-md-6">
                                                        <input type="password" class="form-control" name="password" placeholder="Password" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" name="submit" value="Register" class="btn btn-primary">
                                                </div>
                                                <div class="form-group">
                                                    <p class="link">Already have an account? <a href="login.php">Click to Login</a></p>
                                                </div>
                                            </form>
                                        <?php
                                    }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </article>
    </div>
    <!-- end Content -->

</body>

</html>