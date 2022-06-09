<?php

$Result=$obj->Select('tbl_order','*','oid',$_GET['oid']);

if(isset($_POST['update']) && $_POST['update'] == 'update')
{
     unset($_POST['update']);
     $obj->update('tbl_order',$_POST,'oid',$_GET['oid']);
}
$row=mysqli_fetch_assoc($Result);
// print_r($row);

?>
<div class="container">
 <div class="row">
 <div class="col-md-4">
  
  <h2><i class="glyphicon glyphicon-user"></i>Order Update</h2>

  <form action="" method="post" class="form-group" enctype="multipart/form-data">
  <div class="form-group">
  <label for="date">Date</label>
<input type="date" name="odate" class="form-control" value="<?=$row['odate']?>">
</div>

<div class="form-group">
<label for="type">Types</label>
<select  name="tid" class="form-control" value="<?=$row['type']?>">
<option >1</option>
</select>
</div>

<div class="form-group">
<label for="type">Customer</label>
<select  name="cid" class="form-control" value="<?=$row['cid']?>">
<option>1</option>
</select>
</div>

<div class="form-group">
<label for="type">Material</label>
<select  name="mid" class="form-control" value="<?=$row['mid']?>">
<option>1</option>
</select>
</div>

<div class="form-group">
<label for="price">fixedPrice</label>
<input type="price" name="fprice" class="form-control" value="<?=$row['fprice']?>">
</div>

<div class="form-group">
<label for="status">Status</label>
<input type="status" name="status" class="form-control" value="<?=$row['status']?>">
</div>

<div class="form-group">
<input type="submit" name="update" value="update" >
</div>
</div>
</div>
</div>
</form>
