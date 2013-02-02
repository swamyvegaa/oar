<?php
ob_start();
include '../common.php';
Checklogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On Antique Row : Products</title>
<?php include 'includes/head.php'; 
Checklogin(); 
include("includes/function_products.php");


 $productlist_n = "SELECT id FROM   products WHERE product_status!='-1' "; 
 $product_num = sqlnumber($productlist_n);
 
 $q_limit     = 20;
 if ( !isset($_REQUEST['start']) || $_REQUEST['start'] >=$product_num  || $_REQUEST['start']==""){
	$start = 0;
}else{
$start=$_REQUEST['start'];
}


 if(@$_REQUEST['action']=='status'){
if(@$_REQUEST['status']=='1')
	{
		@$newstatus='0';
	}
	else
	{
		@$newstatus='1';
	}
   Statuschange($_REQUEST['id'],$newstatus,$start);

}
if(@$_REQUEST['action']=='delete'){
Statusdelete($_REQUEST['id'],$start);
}

if(@$_REQUEST['featured_id']!=''){
array_print($_REQUEST);

if($_REQUEST['featured_check']=='1'){
$statusproduct='1';
}else{
$statusproduct='0';
}

Statusfeatured($_REQUEST['featured_id'],$start,$statusproduct);
}
if(@$_REQUEST['sale_id']!=''){


if($_REQUEST['sale_check']=='1'){
$statusdealer='1';
}else{
$statusdealer='0';
}

Statussale($_REQUEST['sale_id'],$start,$statusdealer);
}

?>
</head>

<body>
<div class="container">
<?php include 'includes/head_profile.php'; ?>
<div class="clear"></div>
<?php include 'includes/cms-menu.php'; ?>
<div class="clear"></div>

<div class="content">
<div class="dashboard-button clearfix"><a href="add-product.php?start=<?php echo $start; ?>"><img src="cms-images/add.png"  /><br/>Create New<br/>Product</a></div>
<div class="clear"></div>
<div class="cms-heading">Products</div>
<div class="clear"></div>
<div class="main-content">
<table>
<thead>
<tr>
<th width="50"><input class="check-all" type="checkbox" /></th>
<th width="100" align="left">Product Code</th>
<th width="450" align="left">Product Name</th>
<th width="50" align="right">Price</th>
<th width="50" align="center">Featured</th>
<th width="50" align="center">Sale</th>
<th width="200" align="center">Action</th>
</tr>
</thead>
<?php 
 $productlist = "SELECT id,product_name,product_status,product_featured,product_on_sale,product_code,product_sale_price  FROM  products WHERE product_status!='-1'  LIMIT ".$start.", ".$q_limit.""; 
 $productlistre = $db->getRows($productlist);
 
 if( $product_num>0){
  $rownum=$start;
 foreach($productlistre as  $productlist_result){
  $rownum++;
  $zibracolor = ($rownum%2==0)?"":"alt-row";
  ?>
  
<tr  class="alt-row">
  <td align="center" valign="middle"><input class="check-all" type="checkbox" /></td>
  <td><img src="cms-images/product.png" style="margin-right:10px;"  /><a href="#"><?php echo $productlist_result['product_code']; ?></a></td>
  <td><a href="#"><?php echo $productlist_result['product_name']; ?></a></td>
  <td><a href="#"><?php echo $productlist_result['product_sale_price']; ?></a></td>
  <td align="center" valign="middle">
  
  <form action=""  method="post" name='product_form<?php echo $productlist_result['id']; ?>'><input class="check-all" type="checkbox" onclick="document.product_form<?php echo $productlist_result['id']; ?>.submit();" name="featured_check"  id="featured_check" value="1" <?php if($productlist_result['product_featured']=='1'){ ?> checked="checked"<?php } ?>/><input type="hidden" name="featured_id" id="featured_id" value="<?php echo $productlist_result['id']; ?>"  /></form>
  
  </td>
  <td align="center" valign="middle">
    <form action=""  method="post" name='product_sale<?php echo $productlist_result['id']; ?>'><input class="check-all" type="checkbox" onclick="document.product_sale<?php echo $productlist_result['id']; ?>.submit();" name="sale_check"  id="sale_check" value="1" <?php if($productlist_result['product_on_sale']=='1'){ ?> checked="checked"<?php } ?>/><input type="hidden" name="sale_id" id="sale_id" value="<?php echo $productlist_result['id']; ?>"  /></form>
  </td>
  <td align="center" valign="middle">
<a href="?action=status&id=<?php echo $productlist_result['id']; ?>&status=<?php echo $productlist_result['product_status']; ?>&start=<?php echo $start; ?>"><?php if($productlist_result['product_status']=='1'){?><img src="cms-images/active.png" style="margin:0px 5px 0px 5px;" alt="Active" title="Active"/><?php }else{ ?><img src="cms-images/inactive.png" style="margin:0px 5px 0px 5px;" alt="Inactive" title="Inactive"/><?php } ?></a>&nbsp;
  <a href="edit-product.php?id=<?php echo $productlist_result['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/edit.png" style="margin:0px 5px 0px 5px;" alt="Edit" title="Edit"/></a>&nbsp;
  <a href="?action=delete&id=<?php echo $productlist_result['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/delete.png" style="margin:0px 5px 0px 5px;" alt="Delete" title="Delete"/></a>&nbsp;
  <a href="#" target="_blank"><img src="cms-images/view.png" style="margin:0px 5px 0px 5px;" alt="View" title="View"/></a>&nbsp;
  </td>
</tr>
<?php }}else{ ?>
<tr  ><td colspan="7" align="center" class="error">No products</td></tr>
<?php } ?>



</table>
</div>
</div>
<div class="clear" ></div>
<div class="pagination clearfix" align="center">
<?php  if($q_limit>20){  paginateexte($start, $q_limit, $product_num, "?"); } ?>
<?php  ?>
</div>
<div class="clear"></div>
<div class="container-wrapper">
  <?php include 'includes/footer.php'; ?>
</div>
</div>
</body>
</html>