<?php
include('config.php');
$IdTransaksi = $_POST['IdTransaksi'];
$TglTransaksi = $_POST['TglTransaksi'];
$NamaBarang = $_POST['NamaBarang'];
$Qty = $_POST['Qty'];
$Harga = $_POST['Harga'];
$Nominal = $Qty * $Harga;
$PPN = $Nominal * 10 / 100;
$Total = $Nominal + $PPN;

$sql = "UPDATE transaksi SET TglTransaksi='$TglTransaksi', NamaBarang='$NamaBarang', Qty='$Qty', Harga='$Harga', Nominal='$Nominal', PPN='$PPN', Total='$Total' WHERE IdTransaksi='$IdTransaksi'";
$query    = mysqli_query($conn, $sql);

header("location:transaksi.php");
