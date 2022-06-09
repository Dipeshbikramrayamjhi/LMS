<?php

if(isset($_GET['DELETE']) && $_GET['DELETE'] =="DELETE")//delete gareko 
{

 
  $obj->delete("tbl_product","pid",$_GET['pid']);
}
?>

<h2>Product Display </h2>
<table class="table table-bordered" border="1"> 
<tr>

<th>pid</th>
<th>Material Name</th>
<th>Type</th>
<th>quantity</th>
<th>user_category</th>
<th>size</th>
<th>design</th>
<th>price</th>
<th>Delete</th>
<th>Update</th>
</tr>

<?php

$Result =$obj->Select("tbl_product join tbl_material on tbl_material.mid = tbl_product.mid  join tbl_type on tbl_type.tid=tbl_product.tid","*");
while($row=mysqli_fetch_assoc($Result))
{?>
     <tr>
  <td><?=$row['pid'];?></td>
  <td><?=$row['name'];?></td>
  <td><?=$row['t_type'];?></td>
  <td><?=$row['quantity'];?></td>
  <td><?=$row['user_category'];?></td>
  <td><?=$row['size'];?></td>
  <td><img src="design/<?=$row['design'];?>"width='50' height='50'/></td>
  <td><?=$row['price'];?></td>
  <td><a href='productdisplay.php?DELETE=DELETE&pid="<?=$row['pid']?>"'>DELETE</a></td>
  <td><a href='product_update.php?pid=<?=$row['pid']?>'>UPDATE</a></td>
  </tr>
<?php
}
?>
</tr>
</table>