<?php

if(isset($_GET['DELETE']) && $_GET['DELETE'] =="DELETE")//delete gareko 
{

 
  $obj->delete("tbl_material","mid",$_GET['mid']);
}
?>

<h2>Material Display</h2>
<table class="table table-bordered" border="1"> 	

<tr>

<th>mid</th>
<th>Name</th>
<th>Delete</th>
<th>Update</th>
</tr>
<?php

$Result =$obj->Select("tbl_material","*");
while($row=mysqli_fetch_assoc($Result))
{?> <tr>
   <td><?=$row['mid'];?></td>
    <td><?=$row['name'];?></td>
    <td><a href='materialdisplay.php?DELETE=DELETE&mid="<?=$row['mid']?>"'>DELETE</a></td>
    <td><a href="material_update.php?mid=<?=$row['mid']?>'">UPDATE</a></td>

<?php }
?>
</tr>
</table>