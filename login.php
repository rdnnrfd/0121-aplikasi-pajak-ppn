<!doctype html>
<html lang="en" class="no-js">

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
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <title>Pajak</title>
</head>

<body>
    <div class="container" id="content">
        <article id="login" class="container py-5">
            <h2>Aplikasi Pajak PPN</h2>
            <section>
                <?php
                require('config.php');
                session_start();
                // When form submitted, check and create user session.
                if (isset($_POST['username'])) {
                    $username = stripslashes($_REQUEST['username']);    // removes backslashes
                    $username = mysqli_real_escape_string($conn, $username);
                    $password = stripslashes($_REQUEST['password']);
                    $password = mysqli_real_escape_string($conn, $password);
                    // Check user is exist in the database
                    $query    = "SELECT * FROM `user` WHERE username='$username'
                     AND password='" . md5($password) . "'";
                    $result = mysqli_query($conn, $query) or die(mysqli_connect_errno());
                    $rows = mysqli_num_rows($result);
                    if ($rows == 1) {
                        $_SESSION['username'] = $username;
                        // Redirect to user dashboard page
                        header("Location: home.php");
                    } else {
                        echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
                    }
                } else {
                ?>
                    <div class="py-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">Login</div>
                                        <div class="card-body">
                                            <form class="form" method="post" name="login">
                                                <div class="form-group row">
                                                    <label for="username" class="col-md-4 text-md-right">Username</label>
                                                    <div class="col-md-6">
                                                        <input type="username" class="form-control" name="username" placeholder="Username" autofocus="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                                    <div class="col-md-6">
                                                        <input type="password" class="form-control" name="password" placeholder="Password" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <input type="submit" name="login" value="Login" class="btn btn-primary" />
                                                </div>

                                                <div class="row">
                                                    <div class="col-md col-md-offset-4 text-center">
                                                        New User? <a href="register.php">Sign Up Here</a>
                                                    </div>
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
    <!-- End Content -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>