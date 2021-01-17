<?php
require('config.php');

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM user WHERE id=$id");

header("location:users.php");
