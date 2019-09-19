<?php
session_start();
if (!isset($_SESSION['Login'])) {
    header("Location: loginfor.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>formulir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="main.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Zamzam Ubaidilah</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSuppor tedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="formulir.php">Formulir </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Formulir Sekolah <span class="sr-only">(current)</span></a>
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
        <div class="row" style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <center class="card-header"><b>Formulir PPDB SMK ASSALAAM</b></center>
                        <div class="card-body">
                        <!-- isi di disini -->
                            <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <textarea name="alamat" class="form-control" rows="5" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Kelamin</label>
                                        <input type="radio" name="jk" value="laki-laki" class="form-control" required> Laki Laki <br>
                                        <input type="radio" name="jk" value="Permpuan" class="form-control" required> Perempuan <br></td>  
                                    </div>
                                    <div class="form-grop">
                                        <label for="">Asal Sekolah</label>
                                        <input type="text" name="asalsek" class="form-control" required>
                                    </div>
                                    <div class="form-grop">
                                        <label for="">Bahasa indonesia</label>
                                        <input type="number" name="indo" class="form-control" required>
                                    </div>
                                    <div class="form-grop">
                                        <label for="">Matematika</label>
                                        <input type="number" name="mtk" class="form-control" required>
                                    </div>
                                    <div class="form-grop">
                                        <label for="">IPA</label>
                                        <input type="number" name="ipa" class="form-control" required>
                                    </div>
                                      <div class="form-grop">
                                        <label for="">Bahasa Inggris</label>
                                        <input type="number" name="ingg" class="form-control" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>    
                                        <button type="reset" class="btn btn-danger">Reset</button>   
                                        <button type="submit"><a href="logout.php" class="btn btn-default">Logout</a></button>
                                    </div>
                                </form>
                            <?php
                                if (isset($_POST['simpan'])) {
                                    $a = $_POST['nama'];
                                    $b = $_POST['alamat'];
                                    $c = $_POST['jk'];
                                    $d = $_POST['asalsek'];
                                    $e = $_POST['indo'];
                                    $f = $_POST['mtk'];
                                    $g = $_POST['ipa'];
                                    $h = $_POST['ingg'];
                                    $rt = ($e+$f+$g+$h) /4;
                                    if($rt > 75) {
                                        $ket = "Diterima";
                                    } elseif ($rt <75){
                                        $ket = "Tidak Diterima";
                                    }
                                }
                                
                            ?>
                            <!-- end disini -->

                        </div>  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="background:blue">
                    <center>
                        <h2><b>Hasil Formulir </b></h2>
                    </center>
                        <div class="table-responsive">

                            <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Asal Sekolah</th>
                                <th>B.Indonesia</th>
                                <th>Mtk</th>
                                <th>IPA</th>
                                <th>B.Inggris</th>
                                <th>Rata-Rata</th>
                                <th>Ket</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><?php echo $a; ?></td>
                                <td><?php echo $b; ?></td>
                                <td><?php echo $c; ?></td>
                                <td><?php echo $d; ?></td>
                                <td><?php echo $e; ?></td>
                                <td><?php echo $f; ?></td>
                                <td><?php echo $g; ?></td>
                                <td><?php echo $h; ?></td>
                                <td><?php echo $rt; ?></td>
                                <td><?php echo $ket; ?></td>
                            </tr>
                            </table>
                            
                        </div>
                   </div>    
                </div>
            </div>
        </div>
        
     <!-- end content -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>