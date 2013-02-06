<table width="100%">
<?php 
include '../common.php';
if(@$_REQUEST['gallery_id']!=''){
mysql_query("DELETE FROM product_secondary_images WHERE id=".$_REQUEST['gallery_id']);
}
$i=0;
$product_category_ids= "SELECT *  FROM  product_secondary_images WHERE  product_id='".$_REQUEST['id']."'"; 
$product_category_id= $db->getRows($product_category_ids);
$product_category_ids= sqlnumber($product_category_ids);
if($product_category_ids>0){
foreach($product_category_id as $cat_id){
 if($i%5==0)
					{
					echo '<tr>';
					}
					?>
<td width="200"><img src="..<?php echo $cat_id['product_secondary_image']; ?>"  />&nbsp;&nbsp;&nbsp;<a href=' ?action=delete&id=<?php echo $_REQUEST['id']; ?>&gallery_id=<?php echo $cat_id['id']; ?>' onclick="return confirm('Are you sure to delete This Album?');"><img src='cms-images/delete.png' title='delete'  border="0"/></a></td>

<?php $i++;
					if($i%5==0)
					{
					echo '</tr>';
					}  } }else{ ?>
					<tr><td style="color:#FF0000;" align="center">No Images</td></tr>
					<?php } ?>
</table>