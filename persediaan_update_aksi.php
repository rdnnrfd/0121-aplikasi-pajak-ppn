<?php
include('config.php');
$Foto = $_FILES['Foto'];
$NamaBarang = $_POST['NamaBarang'];
$Deskripsi = $_POST['Deskripsi'];
$Harga = $_POST['Harga'];

$sql = "UPDATE persediaan SET Foto='$Foto', NamaBarang='$NamaBarang', Deskripsi='$Deskripsi', Harga='$Harga' WHERE id='$id'";
$query    = mysqli_query($conn, $sql);

header("location:users.php");
