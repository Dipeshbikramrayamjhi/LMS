<?php

$Result=$obj->Select('tbl_customer','*','cid',$_GET['cid']);

if(isset($_POST['update']) && $_POST['update'] == 'update')
{
     unset($_POST['update']);
     $obj->update('tbl_customer',$_POST,'cid',$_GET['cid']);
   //header('Location:customerdisplay.php');
}
$row=mysqli_fetch_assoc($Result);
// print_r($row);

?>



<div class="container">
 <div class="row">
  <div class="col-md-5">
  <h2><i class="glyphicon glyphicon-user"></i>Customer Update</h2>
  <form action="" method="post" class="form-group" enctype="multipart/form-data">
  <div class="form-group">
<label for="name">Name</label>
<input type="name" name="cname" class="form-control" value="<?=$row['cname']?>">
</div>

<div class="form-group">
<label for="phone">Phone</label>
<input type="phone" name="phone" class="form-control" value="<?=$row['phone']?>">
</div>
<div class="form-group">
<label for="size">Email</label>
<input type="email" name="email" class="form-control" value="<?=$row['email']?>">
</div>
<div class="form-group">
<label for="price">Address</label>
<input type="text" name="address" class="form-control" value="<?=$row['address']?>">
</div>
<div class="form-group">
<button type="submit" name="update" value="update"> Update</button>
</div>
</div>
</div>
</div>
</form>
