<?php

if(isset($_GET['DELETE']) && $_GET['DELETE'] =="DELETE")//delete gareko 
{

 
  $obj->delete("tbl_order","oid",$_GET['oid']);
}
?>
<h2>Order Display </h2>
<table class="table table-bordered" border="1"> 
<tr>

<th>oid</th>
<th>odate</th>
<th>Type</th>
<th>Customer Name</th>
<th>Material Name</th>
<th>fprice</th>
<th>status</th>
<th>Delete</th>
<th>Update</th>
</tr>

<?php

$Result =$obj->Select("tbl_order join tbl_material on tbl_material.mid = tbl_order.mid join tbl_type on tbl_type.tid=tbl_order.tid join tbl_customer on tbl_customer.cid=tbl_order.cid","*");
while($row=mysqli_fetch_assoc($Result))
{ ?>
  
  <tr>
  <td><?=$row['oid'];?></td>
  <td><?=$row['odate'];?></td>
  <td><?=$row['t_type'];?></td>
  <td><?=$row['cname'];?></td>
  <td><?=$row['name'];?></td>
  <td><?=$row['fprice'];?></td>
  <td><?=$row['status'];?></td>
  <td><a href='orderdisplay.php?DELETE=DELETE&oid="<?=$row['oid']?>"'>DELETE</a></td>
  <td><a href='order_update.php?oid=<?=$row['oid']?>'>UPDATE</a></td>
  </tr>
<?php }
    

?>
</tr>
</table>