<?php
include('config.php');
$KodeBarang = $_POST['KodeBarang'];
$NamaBarang = $_POST['NamaBarang'];
$Deskripsi = $_POST['Deskripsi'];
$Harga = $_POST['Harga'];
$foto = $_FILES['foto']['name'];

if ($foto != "") {
    $ekstensi_diperbolehkan = array('jpg', 'jpeg', 'png', 'gif');
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $rand = rand(1, 999);
    $nama_foto_baru = $rand . '-' . $foto;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'assets/images/' . $nama_foto_baru);

        $sql = "UPDATE persediaan SET NamaBarang='$NamaBarang', Deskripsi='$Deskripsi', Harga='$Harga', foto='$nama_foto_baru' WHERE KodeBarang='$KodeBarang'";
        $result    = mysqli_query($conn, $sql);

        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($conn) .
                " - " . mysqli_error($conn));
        } else {
            echo "<script>alert('Data produk berhasil diubah');window.location='persediaan.php';</script>";
        }
    } else {
        echo "<script>alert('Ekstensi gambar yang diperbolehkan hanya jpg, jpeg, png atau png');window.location='persediaan_update.php';</script>";
    }
} else {
    $sql = "UPDATE persediaan SET NamaBarang='$NamaBarang', Deskripsi='$Deskripsi', Harga='$Harga', foto=null WHERE KodeBarang='$KodeBarang'";
    $result    = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    } else {
        echo "<script>alert('Data produk berhasil diubah');window.location='persediaan.php';</script>";
    }
}
