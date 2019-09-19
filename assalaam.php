<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembelian Buku</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" style="color : cyan">ASSALAAM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color : cyan">Book <span class="sr-only">(current)</span></a>
    </ul> 
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <!-- end header -->

    <!-- content -->
        <div class="container">
            <div class="row" style="padding:20px">
                <div class="col-md-12">
                <center>
                    <h1 style="color : cyan">Assalam Book Store</h1>
                </center>
                    <div class="card">
                        <div class="card-header">Pembelian Buku</div>
                        <div class="card-body">
                            <!-- isi disini yow -->
                            <form action="form2book.php" method="POST">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label><br>
                                    <input type="radio" name="jk" value="Laki-Laki"> Laki Laki
                                    <input type="radio" name="jk" value="Perempuan"> Perempuan
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Pemmbelian</label>
                                    <input type="date" class="form-control" name="tgl">
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Buku</label>
                                    <input type="number" class="form-control" name="jml">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="simpan">Proses</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </form>
                            <?php
                                if (isset($_POST['simpan'])) {
                                    $nm = $_POST['nama'];
                                    $al = $_POST['alamat'];
                                    $jk = $_POST['jk'];
                                    $tgl = $_POST['tgl'];
                                    $jml = $_POST['jml'];
                                   
                                }
                            ?>
    <!-- footer -->
    <!-- end footer -->

    <!-- JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- end JS -->
</body>
</html>