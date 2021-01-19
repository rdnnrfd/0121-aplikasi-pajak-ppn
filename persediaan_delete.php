<?php
require('config.php');

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM persediaan WHERE id=$id");

header("location:persediaan.php");
