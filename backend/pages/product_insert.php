<?php

if(isset($_POST['submit']) && $_POST['submit'] =='submit')
{
  unset($_POST['submit']);

  $filename=$_FILES['design']['name'];
  $path='design/';
  $tempname=$_FILES['design']['tmp_name'];
  move_uploaded_file($tempname,$path.$filename);
  $_POST['design']=$filename;
  $obj->Insert('tbl_product',$_POST);
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
  
  <h2 class="text-center text-info"><i class="glyphicon glyphicon-user"></i>Product Insert</h2>

<form action="" method="post" class="form-group" enctype="multipart/form-data">
<div class="form-group">

<label for="title">Title</label>
<input type="text" name="p_title" class="form-control">
</div>
<div class="form-group">


<label for="type">Material</label>
<select name="mid"class="form-control">
<?php $material= $obj->Select('tbl_material','*') ?>
<option selected disabled>Please choose material</option>
<?php foreach($material as $material   ){ ?>
<option value="<?=$material['mid']?>"><?=$material['name']?></option>
<?php } ?>
</select>
</div> 

 <div class="form-group">
<label for="type">Types</label>
<select  name="tid" class="form-control">
<?php $type= $obj->Select('tbl_type','*')?>
<option selected disabled>Please choose types</option>
<?php foreach($type as $type ){ ?>
<option value="<?=$type['tid']?>"><?=$type['t_type']?></option>
<?php }?>
</select>
</div>

<div class="form-group">

<label for="quantity">Quantity</label>
<input type="text" name="quantity" class="form-control">
</div>

<div class="form-group">
<label for="user_category">User Category</label><br>
<input type="radio" name="user_category" value="male">
<label for="male">MALE</label>
<input type="radio" name="user_category" value="female" >
<label for="male">FEMALE</label>
<input type="radio" name="user_category" value="other">
<label for="male">OTHER</label>
</div>
<div class="form-group">
<label for="size">Size</label>
<input type="size" name="size" class="form-control">
</div>
<div class="form-group">
<label for="design">Design</label>
<input type="file" name="design" class="form-control">
</div>
<div class="form-group">
<label for="price">Price</label>
<input type="number" name="price" class="form-control">
</div>
<div class="form-group">
<label for="dis_price">Discounted Price</label>
<input type="number" name="dis_price" class="form-control">
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