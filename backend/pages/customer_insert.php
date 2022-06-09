
<?php

if(isset($_POST['submit']) && $_POST['submit'] =='submit')
{
  unset($_POST['submit']);
  $obj->Insert('tbl_customer',$_POST);
}
?><html>
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
  
  <h2><i class="glyphicon glyphicon-user"></i>Customer Insert</h2>

  <form action="" method="post" class="form-group" enctype="multipart/form-data">
  <div class="form-group">
<label for="name">Name</label>
<input type="name" name="cname" class="form-control">
</div>


<div class="form-group">
<label for="phone">Phone</label>
<input type="phone" name="phone" class="form-control">
</div>
<div class="form-group">
<label for="size">Email</label>
<input type="email" name="email" class="form-control">
</div>
<div class="form-group">
<label for="price">Address</label>
<input type="text" name="address" class="form-control">
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