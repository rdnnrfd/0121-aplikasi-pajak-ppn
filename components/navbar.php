<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container topnav" id="myTopNav">
        <a class="navbar-brand" href="home.php">Rdnnrfd Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="dropdown">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <?php echo $_SESSION['username']; ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</nav>