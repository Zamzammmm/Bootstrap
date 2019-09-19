<?php
session_start();
if (!isset($_SESSION['Login'])) {
    header("Location: loginfor.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulir</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Zamzam Ubaidilah</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Formulir <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formulir_sekolah.php">Formulir Sekolah</a>
      </li>
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
                    <div class="card">
                        <div class="card-header"><center>FORMULIR PPDB SMK ASSALAAM</center></div>
                        <div class="card-body">
                            <!-- isi disini yow -->
                            <form action="" method="POST">
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
                                    <label for="">Asal Sekolah</label>
                                    <input type="text" class="form-control" name="asal">
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai Bahasa Indonesia</label>
                                    <input type="number" class="form-control" min="1" name="bhs">
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai Matematika</label>
                                    <input type="number" class="form-control" min="1" name="mtk">
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai IPA</label>
                                    <input type="number" class="form-control" min="1" name="ipa">
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai Inggris</label>
                                    <input type="number" class="form-control" min="1" name="eng">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit"><a href="logout.php" class="btn btn-default">Logout</a></button>
                                </div>
                            </form>
                            <?php
                                if (isset($_POST['simpan'])) {
                                    $nm = $_POST['nama'];
                                    $al = $_POST['alamat'];
                                    $jk = $_POST['jk'];
                                    $asal = $_POST['asal'];
                                    $bhs = $_POST['bhs'];
                                    $mtk = $_POST['mtk'];
                                    $ipa = $_POST['ipa'];
                                    $eng = $_POST['eng'];
                                    $rata = ($bhs+$mtk+$ipa+$eng)/4;
                                    if ($rata > 65) {
                                        $ket = "DITERIMA";
                                    } else {
                                        $ket = "TIDAK DITERIMA";
                                    }
                                }
                            ?>
                            <!-- end isi -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="background:#fff">
                    <center>
                        <h2>Hasil Formulir</h2>
                    </center>
                    <div class="table-responsive">
                        <table class="table" style="align:center">
                            <tr>
                                <th>Nomor</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Asal Sekolah</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><?php echo $nm; ?></td>
                                <td><?php echo $al; ?></td>
                                <td><?php echo $jk; ?></td>
                                <td><?php echo $asal; ?></td>
                            </tr>
                            <tr>
                                <th>Nilai Bahasa Indonesia</th>
                                <th>Nilai Matematika</th>
                                <th>Nilai IPA</th>
                                <th>Nilai Bahasa Inggris</th>
                                <th>Rata Rata</th>
                            </tr>
                            <tr>
                                <td><?php echo $bhs; ?></td>
                                <td><?php echo $mtk; ?></td>
                                <td><?php echo $ipa; ?></td>
                                <td><?php echo $eng; ?></td>
                                <td><?php echo $rata; ?></td>
                            </tr>
                            <tr> 
                                <th>Keterangan</th>
                            </tr>
                            <tr>
                                <td><b><?php echo $ket; ?></b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>    
        
    <!-- end content -->

    <!-- footer -->
    <!-- end footer -->

    <!-- JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- end JS -->
</body>
</html>