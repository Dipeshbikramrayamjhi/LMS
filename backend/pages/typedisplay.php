<?php

if(isset($_GET['DELETE']) && $_GET['DELETE'] =="DELETE")//delete gareko 
{

 
  $obj->delete("tbl_type","tid",$_GET['tid']);
}
?>
<h2>Type Display </h2>
<table class="table table-bordered" border="1"> 
<tr>

<th>tid</th>
<th>t_type</th>
<th>Delete</th>
<th>Update</th>
</tr>

<?php

$Result =$obj->Select("tbl_type","*");
while($row=mysqli_fetch_assoc($Result))
{?>
  <tr>

<td><?=$row['tid'];?></td>
<td><?=$row['t_type'];?></td>
<td><a href='typedisplay.php?DELETE=DELETE&tid="<?=$row['tid']?>"'>DELETE</a></td>
<td><a href='type_update.php?tid=<?=$row['tid']?>'>UPDATE</a></td>
</tr>
<?php

   

}
?>
</tr>
</table>