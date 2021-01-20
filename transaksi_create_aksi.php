<?php
require('config.php');

$IdTransaksi = $_POST['IdTransaksi'];
$NamaBarang = $_POST['NamaBarang'];
$Qty = $_POST['Qty'];
$Harga = $_POST['Harga'];
$Nominal = $Qty * $Harga;
$PPN = $Nominal * 10 / 100;
$Total = $Nominal + $PPN;

// Insert user data into table
$result = mysqli_query($conn, "INSERT INTO transaksi (IdTransaksi, NamaBarang, Qty, Harga, Nominal, PPN, Total) VALUES ('$IdTransaksi', '$NamaBarang', '$Qty', '$Harga', '$Nominal', '$PPN', '$Total')");

// Show message when user added
echo "<div class='container'>
            <p>You are Created successfully. <a href='transaksi.php' class='btn btn-success'> View </a></p>
        </div>";
