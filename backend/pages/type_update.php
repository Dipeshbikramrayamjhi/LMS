<?php

$Result=$obj->Select('tbl_type','*','tid',$_GET['tid']);

if(isset($_POST['update']) && $_POST['update'] == 'update')
{
     unset($_POST['update']);
     $obj->update('tbl_type',$_POST,'tid',$_GET['tid']);
}
$row=mysqli_fetch_assoc($Result);
// print_r($row);

?>

<div class="container">
 <div class="row">
 <div class="col-md-4">
  
  <h2 class="text-center text-info"><i class="glyphicon glyphicon-user"></i>Type Insert</h2>

<form action="" method="post" class="form-group" enctype="multipart/form-data">
<div class="form-group">
<label for="type">Types Name</label>
<input type="type" name="t_type" class="form-control" value="<?=$row['t_type']?>">
</div>



<div class="form-group">
<input class="btn btn-success" type="submit" name="update" value="update" >
</div>
</div>
</div>
</div>
</form>