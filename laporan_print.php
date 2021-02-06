<?php
//include auth_session.php file on all user panel pages
include("auth/auth_session.php");
require('config.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/cetak.css">

    <title>Print</title>
</head>

<body>
    <!-- Main -->
    <section id="header-kop">
        <div class="container-fluid">
            <table class="table table-borderless">
                <tr>
                    <th class="text-center" font-weight="bold">
                        <h4>Rdnnrfd Shop</h4>
                    </th>
                </tr>
                <tr>
                    <td class="text-center">Jl. Pajajaran No. 12a, Kota Bandung, Jawa Barat</td>
                </tr>
            </table>
        </div>
    </section>

    <section id="body-of-report">
        <div class="container">
            <h4 class="text-center">Jurnal</h4>
            <br />
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="border" width="5%">NO</th>
                        <th class="border">TANGGAL TRANSAKSI</th>
                        <th class="border">KODE TRANSAKSI</th>
                        <th class="border">KETERANGAN</th>
                        <th class="border">DEBIT</th>
                        <th class="border">KREDIT</th>
                    </tr>
                </thead>
                <?php
                $query = mysqli_query($conn, "SELECT IdTransaksi, TglTransaksi, Nominal, PPN, Total FROM transaksi");
                $no = 1;
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tbody>
                        <tr>
                            <td rowspan="4" width="5%"><?php echo $no++; ?></td>
                            <td rowspan="4"><?php echo $data['TglTransaksi']; ?></td>
                            <td rowspan="4"><?php echo $data['IdTransaksi']; ?></td>
                        </tr>
                        <tr>
                            <th>Kas</th>
                            <td><?php echo "Rp " . number_format($data['Total'], 2, ",", "."); ?></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th class="right">Penjualan</th>
                            <td>-</td>
                            <td class="right"><?php echo "Rp " . number_format($data['Nominal'], 2, ",", "."); ?></td>
                        </tr>
                        <tr>
                            <th class="right">PPN Keluaran</th>
                            <td>-</td>
                            <td class="right"><?php echo "Rp " . number_format($data['PPN'], 2, ",", "."); ?></td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </section>

    <script type="text/javascript">
        $(document).ready(function() {
            window.print();
        });
    </script>
    <!-- End Main Body -->

</body>

</html>