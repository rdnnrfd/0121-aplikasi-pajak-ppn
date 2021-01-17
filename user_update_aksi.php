<?php
include('config.php');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE transaksi SET username='$username', email='$email', password='$password' WHERE id='$id'";
$query    = mysqli_query($conn, $sql);

header("location:users.php");
