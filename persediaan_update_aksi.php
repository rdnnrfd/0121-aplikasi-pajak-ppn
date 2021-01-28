<?php
include('config.php');
$KodeBarang = $_POST['KodeBarang'];
$NamaBarang = $_POST['NamaBarang'];
$Deskripsi = $_POST['Deskripsi'];
$Harga = $_POST['Harga'];

$sql = "UPDATE persediaan SET NamaBarang='$NamaBarang', Deskripsi='$Deskripsi', Harga='$Harga' WHERE KodeBarang='$KodeBarang'";
$query    = mysqli_query($conn, $sql);

header("location:persediaan.php");
