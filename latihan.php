<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap</title>
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

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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
            <div class="col-md-8">
                <div class="card">
                    <center class="card-header"><b>Formulir</b></center>
                        <div class="card-body">
                        <!-- isi di disini -->
                            <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <textarea name="alamat" class="form-control" rows="5"></textarea>
                                    </div>
                                        <div class="form-group">
                                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>    
                                        <button type="reset" class="btn btn-danger">Reset</button>    
                                    </div>
                                </form>
                            <?php
                                if (isset($_POST['simpan'])) {
                                    $a = $_POST['nama'];
                                    $b = $_POST['alamat'];
                                    echo "Nama  : $a<br>";
                                    echo "Alamat  : $b";

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
                        <h2><b>Hasil Formulir</b></h2>
                    </center>
                        <div class="table-responsive">

                            <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><?php echo $a; ?></td>
                                <td><?php echo $b; ?></td>
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
