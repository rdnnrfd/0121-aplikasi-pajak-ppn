<?php
include 'config.php';

$KodeBarang = $_POST['KodeBarang'];
$NamaBarang = $_POST['NamaBarang'];
$Deskripsi  = $_POST['Deskripsi'];
$Harga      = $_POST['Harga'];
$Foto       = $_FILES['Foto']['name'];

if ($Foto != "") {
    $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
    $x = explode('.', $Foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['Foto']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_foto_baru = $angka_acak . '_' . $Foto;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'images/' . $nama_foto_baru);
        $query = "INSERT INTO persediaan (KodeBarang, NamaBarang, Deskripsi, Harga, Foto) VALUES ('$KodeBarang', '$NamaBarang', '$Deskripsi', '$Harga', '$nama_foto_baru')";
        $result = mysqli_query($conn, $query);

        //apakah error?
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($conn) .
                " - " . mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil ditambahkan.');window.location='persediaan.php';</script>";
        }
    } else {
        // jika ekstensi tidak mendukung
        echo "<script>alert('Ekstensi gambar tidak mendukung.');window.location='persediaan_create.php';</script>";
    }
} else {
    $query = "INSERT INTO persediaan (KodeBarang, NamaBarang, Deskripsi, Harga, Foto) VALUES ('$KodeBarang', '$NamaBarang', '$Deskripsi', '$Harga', null)";
    $result = mysqli_query($conn, $query);
    // apakah query eror?
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($conn) .
            "-" . mysqli_error($conn));
    } else {
        echo "<script>alert('Data berhasil ditambahkan.');window.location='persediaan.php';</script>";
    }
}
