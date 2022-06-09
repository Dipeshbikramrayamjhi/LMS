
<?php

if(isset($_POST['submit']) && $_POST['submit'] =='submit')
{
  unset($_POST['submit']);
  $obj->Insert('tbl_order',$_POST);
}
?>
<div class="container">
 <div class="row">
 <div class="col-md-4">
  
  <h2><i class="glyphicon glyphicon-user"></i>Order Insert</h2>

  <form action="" method="post" class="form-group" enctype="multipart/form-data">
  <div class="form-group">
<label for="date">Date</label>
<input type="date" name="odate" class="form-control">
</div>
<div class="form-group">
<label for="type">Customer</label>
<select  name="cid" class="form-control">
<?php $type= $obj->Select('tbl_customer','*')?>
<option selected disabled>Please choose types</option>
<?php foreach($type as $type ){ ?>
<option value="<?=$type['cid']?>"><?=$type['cname']?></option>
<?php }?>
</select>
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
<label for="price">fixedPrice</label>
<input type="price" name="fprice" class="form-control">
</div>

<div class="form-group">
<label for="status">Status</label>
<input type="status" name="status" class="form-control">
</div>


<div class="form-group">
<input type="submit" name="submit" value="submit" >
</div>
</div>
</div>
</div>
</form>
