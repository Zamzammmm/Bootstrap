<?php
    session_start();
    if (isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user == "Azam" && $pass == "123") {
            $_SESSION['Login'] = $user;
            header('location:formulir.php');
        } else {
            die ("Username atau Password salah! Silahkan Login dengan Benar !<br>
            <a href='loginfor.php'>Login</a>");
        }
    } else {       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
       <div class="row" style="padding:20px">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header"><center>LOGIN</center></div>
                   <div class="card-body">
                       <form action="" method="POST">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="user">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="pass">
                            </div>
                            <div>
                                <button class="btn btn-primary" name="login">Login</button>
                            </div>
                        </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
</body>
</html>
    <?php } 
    ?>