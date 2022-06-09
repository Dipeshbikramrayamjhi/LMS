<?php
session_start();
require('./config/db.php');
if(isset($_POST['login']) && $_POST['login'] == 'login')
{
  print_r($_POST);
  $result = $obj->Select('tbl_admin','*','username',$_POST['username']," AND password='".md5($_POST['password'])."'");
  $row = mysqli_fetch_assoc($result);
  // print_r($row);
  // die;
  $row = mysqli_num_rows($result);
  if($row>0)
  {
    $_SESSION['login']='enter';
    $_SESSION['username']=$row['email'];
    $_SESSION['password']=$row['password'];

    header('location:index.php');
  }
  else
  {
    header('location:admin.php?please enter valid');
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="assets/css/display.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/material.min.css">
  <link rel="stylesheet" href="assets/css/boot.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="assets/scss/login.scss">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/a.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <!-- <div class="brand-wrapper">
                <img src="assets/images/logo.svg" alt="logo" class="logo">
              </div> -->
              <p class="login-card-description">Sign into your account</p>
              <form action="" method="post">
                  <div class="form-group">
                    <label for="email" class="sr-only">USERNAME</label>
                    <input type="username" name="username" id="username" class="form-control" placeholder="USERNAME">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <button name="login" id="login" value="login"  class="btn btn-block login-btn mb-4">LOGIN</button>
                </form>
              
                </nav>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
