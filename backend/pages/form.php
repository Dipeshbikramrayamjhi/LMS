<?php

if(isset($_POST['submit']) && $_POST['submit'] =='submit')
{
  unset($_POST['submit']);

  $filename=$_FILES['design']['name'];
  $path='design/';
  $tempname=$_FILES['design']['tmp_name'];
  move_uploaded_file($tempname,$path.$filename);
  $_POST['design']=$filename;
  $obj->Insert('tbl_register',$_POST);
}


?>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
 <div class="col-md-4">
  
  <h2 class="text-center text-info"><i class="glyphicon glyphicon-user"></i>User register</h2>

<form action="" method="post" class="form-group" enctype="multipart/form-data">
<div class="form-group">

<div class="form-group">
<label for="name">First Name</label>
<input type="f_name" name="f_name" class="form-control">
</div>

<div class="form-group">
<label for="name">l_name</label>
<input type="l_name" name="l_name" class="form-control">
</div>

<div class="form-group">
<label for="email">Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="form-group">
<label for="phone">Phone</label>
<input type="phone" name="phone" class="form-control">
</div>

<div class="form-group">
<label for="address">Address</label>
<input type="address" name="address" class="form-control">
</div>

<div class="form-group">
<label for="password">Password</label>
<input type="number" name="password" class="form-control">
</div>



<div class="form-group">
<input type="submit" class="btn btn-success" name="submit" value="submit" >
</div>
</div>
</div>
</div>
</form>
</body>
</html>