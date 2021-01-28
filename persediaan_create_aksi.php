<?php
include 'config.php';
$kodebarang = $_POST['KodeBarang'];
$namabarang = $_POST['NamaBarang'];
$deskripsi = $_POST['Deskripsi'];
$harga    = $_POST['Harga'];
$Foto = $_FILES['Foto']['name'];

if ($Foto != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $Foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['Foto']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $Foto;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'images/' . $nama_gambar_baru);

        $query = "INSERT INTO persediaan (KodeBarang, NamaBarang, Deskripsi, Harga, Foto) VALUES ($kodebarang, $namabarang, $deskripsi, $harga, $nama_gambar_baru)";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($conn) .
                " - " . mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil ditambah.');window.location='persediaan.php';</script>";
        }
    } else {

        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png.');window.location='persediaan_create.php';</script>";
    }
} else {
    $query = "INSERT INTO persediaan (KodeBarang, NamaBarang, Deskripsi, Harga, Foto) VALUES ($kodebarang, $namabarang, $deskripsi, $harga, null)";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    } else {
        echo "<script>alert('Data berhasil ditambah.');window.location='persediaan.php';</script>";
    }
}
