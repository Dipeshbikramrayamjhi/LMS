<?php

$Result=$obj->Select('tbl_product','*','pid',$_GET['pid']);

if(isset($_POST['update']) && $_POST['update'] == 'update')
{
     unset($_POST['update']);
     $obj->update('tbl_product',$_POST,'pid',$_GET['pid']);
}
$row=mysqli_fetch_assoc($Result);
// print_r($row);

?>
<div class="container">
 <div class="row">
 <div class="col-md-4">
  
  <h2 class="text-center text-info"><i class="glyphicon glyphicon-user"></i>Product Insert</h2>

<form action="" method="post" class="form-group" enctype="multipart/form-data">
<div class="form-group">
<label for="type">Material</label>
<select name="mid"class="form-control"  value="<?=$row['mid']?>">
<option >Please choose material</option>

</select>
</div> 
 <div class="form-group">
<label for="type">Types</label>
<select  name="tid" class="form-control"  value="<?=$row['tid']?>">
<option>Please choose types</option>
</select>
</div>

<div class="form-group">
<label for="quantity">Quantity</label>
<input type="text" name="quantity" class="form-control"  value="<?=$row['quantity']?>">
</div>

<div class="form-group">
<label for="user_category">User_category</label>
<input type="user_categoty" name="user_category" class="form-control"  value="<?=$row['user_category']?>">
</div>

<div class="form-group">
<label for="size">Size</label>
<input type="size" name="size" class="form-control"  value="<?=$row['size']?>">
</div>

<div class="form-group">
<label for="design">Design</label>
<input type="file" name="design" class="form-control"  value="<?=$row['design']?>">
</div>
<div class="form-group">
<label for="price">Price</label>
<input type="price" name="price" class="form-control"  value="<?=$row['price']?>">
</div>



<div class="form-group">
<input type="submit" class="btn btn-success" name="update" value="update" >
</div>
</div>
</div>
</div>
</form>
