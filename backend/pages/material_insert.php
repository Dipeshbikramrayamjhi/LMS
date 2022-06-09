<?php

if(isset($_POST['submit']) && $_POST['submit'] =='submit')
{
  unset($_POST['submit']);
  $obj->Insert('tbl_material',$_POST);
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
  
  <h2><i class="glyphicon glyphicon-user"></i>Material Insert</h2>

  <form action="" method="post" class="form-group" enctype="multipart/form-data">
<div class="form-group">
<label for="type">Material</label>
<select name="name" class="form-control">
<option selected disabled>Please choose material</option>
<option>Gold</option>
<option>Sliver</option>
<option>Daimond</option>

</select>
</div>



<div class="form-group">
<input type="submit" name="submit" value="submit" >
</div>
</div>
</div>
</div>
</form>
</body>
</html>