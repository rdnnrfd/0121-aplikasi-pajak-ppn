<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('config.php');

$query = mysqli_query($conn, "SELECT IdTransaksi, NamaBarang, Nominal, PPN, Total FROM transaksi");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/cetak.css">

    <title>Print</title>
</head>

<body>
    <!-- Main -->
    <section id="header-kop">
        <div class="container-fluid">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th class="text-center">
                            <h4>Rdnnrfd Shop</h4>
                        </th>
                    </tr>
                    <tr>
                        <td class="text-center">Jl. Pajajaran No. 12a, Kota Bandung, Jawa Barat</td>
                    </tr>
                </tbody>
            </table>
            <hr>
        </div>
    </section>

    <?php
    $query = mysqli_query($conn, "SELECT IdTransaksi, NamaBarang, Nominal, PPN, Total FROM transaksi");
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <section id="body-of-report">
            <div class="container">
                <h4 class="text-center">Detail Laporan</h4>
                <h6 class="text-center">Id Transaksi: <?php echo $data['IdTransaksi']; ?></h6>
                <br />
                <table class="table table-bordered">
                    <tr>
                        <th class="border">Nama Barang</th>
                        <th class="border"><?php echo $data['NamaBarang']; ?></th>
                    </tr>
                    <tr>
                        <th>Total Pembelian</th>
                        <td><?php echo "Rp " . number_format($data['Total'], 2, ",", "."); ?></td>
                    </tr>
                    <tr>
                        <th class="right">Nominal</th>
                        <td class="right"><?php echo "Rp " . number_format($data['Nominal'], 2, ",", "."); ?></td>
                    </tr>
                    <tr>
                        <th class="right">PPN</th>
                        <td class="right"><?php echo "Rp " . number_format($data['PPN'], 2, ",", "."); ?></td>
                    </tr>
                </table>
            </div><!-- /.container -->
        </section>

    <?php
    }
    mysqli_close($conn);
    ?>

    <script type="text/javascript">
        $(document).ready(function() {
            window.print();
        });
    </script>
    <!-- End Main Body -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>