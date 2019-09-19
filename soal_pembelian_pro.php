<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
    <style>
        font-family: 'Chilanka',
        cursive;
    </style>
    <title>Assalaam Book Store</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Assalaam</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
        </div>
    </nav>
    <center>
        <h2>Assalaam Book Store</h2>
    </center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">Invoice Pembayaran</div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['simpan'])) {
                            /* Data 1 */
                            $jml = $_POST['jumlah_buku'];
                            $nama = $_POST['nama'];
                            $alamat = $_POST['alamat'];
                            $jk = $_POST['jk'];
                            $tanggal_beli = $_POST['tanggal_beli'];
                            /* Data 2 */
                            $judul = $_POST['judul'];
                            $kode = $_POST['kode'];
                            $pengarang = $_POST['pengarang'];
                            $jenis = $_POST['jenis_buku'];
                            $harga = $_POST['harga_buku'];
                        } ?>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jumlah</th>
                                    <th colspan="2">Tanggal Pembelian</th>
                                </tr>
                                <tr>
                                    <td><?php echo $nama ?></td>
                                    <td><?php echo $alamat ?></td>
                                    <td><?php echo $jk ?></td>
                                    <td><?php echo $jml ?></td>
                                    <td colspan="3"><?php $originalDate = $tanggal_beli;
                                                    echo $newDate = date("d M Y", strtotime($originalDate)); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="6" align="center"><b>Daftar Buku Yang dibeli</b></td>
                                </tr>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Judul</th>
                                    <th>Kode </th>
                                    <th>Pengarang</th>
                                    <th>Jenis Buku</th>
                                    <th>Harga (Rp)</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($kode as $a => $b) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $judul[$a]; ?></td>
                                        <td><?php echo $kode[$a]; ?></td>
                                        <td><?php echo $pengarang[$a]; ?></td>
                                        <td><?php echo $jenis[$a]; ?></td>
                                        <td><?php echo number_format($harga[$a], 2, ',', '.') ?></td>
                                        <?php $sub_total = $sub_total + $harga[$a]; ?>
                                    </tr>
                                <?php
                                }
                                if ($jml >= 5) {
                                    $diskon = $sub_total * 0.1;
                                    /* var_dump($diskon); */
                                    $desc = 10;
                                } else if ($jml >= 3) {
                                    $diskon = $sub_total * 0.05;
                                    $desc = 5;
                                    /* var_dump($diskon); */
                                } else {
                                    $diskon = 0;
                                    $desc = 0;
                                    /* var_dump($diskon); */
                                }
                                $total = $sub_total - $diskon;
                                ?>
                                <tr>
                                    <td colspan="6" align="center"><b>Total Pembayaran</b></td>
                                </tr>
                                <tr>
                                    <th>Sub Total</th>
                                    <td colspan="5" align="right">Rp. <?php echo number_format($sub_total, 0, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <th>Diskon (<?php echo "$desc%"; ?>)</th>
                                    <td colspan="5" align="right">Rp. <?php echo number_format($diskon, 0, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <th>Total Pembayaran</th>
                                    <td colspan="5" align="right">Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>