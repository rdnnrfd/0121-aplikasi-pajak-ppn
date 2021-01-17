<?php
require('config.php');

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM transaksi WHERE id=$id");

header("location:transaksi.php");
