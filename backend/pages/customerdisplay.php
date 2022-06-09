<?php

if(isset($_GET['DELETE']) && $_GET['DELETE'] =="DELETE")//delete gareko 
{

 
  $obj->delete("tbl_customer","cid",$_GET['cid']);
}

?>

<h2>Customer Display</h2>
<table class="table table-bordered" border="1"> 	

<tr>
<th>cid</th>
<th>Customer Name</th>
<th>Phone</th>
<th>Email</th>
<th>Address</th>
<th>Delete</th>
<th>Update</th>
</tr>

<?php

$Result =$obj->Select("tbl_customer","*");
while($row=mysqli_fetch_assoc($Result))
{ ?>
  
    <tr>
    <td><?=$row['cid'];?></td>
    <td><?=$row['cname'];?></td>
    <td><?=$row['phone'];?></td>
    <td><?=$row['email'];?></td>
    <td><?=$row['address'];?></td>
    <td><a href='customerdisplay.php?DELETE=DELETE&cid="<?=$row['cid']?>"'>DELETE</a></td>
    <td><a href='customer_update.php?cid=<?=$row['cid']?>'>UPDATE</a></td>
    </tr>
<?php }
?>
</tr>
</table>

