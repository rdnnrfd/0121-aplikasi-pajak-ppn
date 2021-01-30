<?php
require('config.php');

$id = $_GET['id'];

$sql = mysqli_query($conn, "SELECT * FROM persediaan WHERE id='$id'");
$data = mysqli_fetch_array($sql);
$foto = $data['foto'];
unlink("assets/images/" . $foto);

$result = mysqli_query($conn, "DELETE FROM persediaan WHERE id='$id'");
if ($result) {
    header("location:persediaan.php");
} else {
    echo "<script>alert('Gagal menghapus data');window.location='persediaan.php';</script>";
}
