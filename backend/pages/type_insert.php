
<?php

if(isset($_POST['submit']) && $_POST['submit'] =='submit')
{
  unset($_POST['submit']);
  $obj->Insert('tbl_type',$_POST);
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
  
  <h2 class="text-center text-info"><i class="glyphicon glyphicon-user"></i>Type Insert</h2>

<form action="" method="post" class="form-group" enctype="multipart/form-data">
<div class="form-group">
<label for="type">Types Name</label>
<input type="type" name="t_type" class="form-control">
</div>



<div class="form-group">
<input class="btn btn-success" type="submit" name="submit" value="submit" >
</div>
</div>
</div>
</div>
</form>
</body>
</html>