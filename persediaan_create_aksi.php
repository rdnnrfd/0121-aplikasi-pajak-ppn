<?php
include 'config.php';

$KodeBarang = $_POST['KodeBarang'];
$NamaBarang = $_POST['NamaBarang'];
$Deskripsi  = $_POST['Deskripsi'];
$Harga      = $_POST['Harga'];
$Foto       = $_FILES['Foto']['name'];

$rand = rand();
$ekstensi = array('png', 'jpg', 'jpeg', 'gif', 'svg');
$filename = $_FILES['Foto']['name'];
$filesize = $_FILES['Foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:persediaan.php?alert=gagal_ekstensi");
} else {
    if ($filesize < 1044070) {
        $fx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['Foto']['tmp_name'], 'assets/images/' . $rand . '_' . $filename);
        mysqli_query($conn, "INSERT INTO persediaan (Foto, KodeBarang, NamaBarang, Deskripsi, Harga)
        VALUES (Null, '$KodeBarang', '$NamaBarang', '$Deskripsi', '$Harga')");
        header("location:persediaan.php?alert=berhasil");
    } else {
        header("location:persediaan.php?alert=gagal_ukuran");
    }
}
