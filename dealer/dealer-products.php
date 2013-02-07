<?php
ob_start();
include '../common.php';
CheckDealerlogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On Antique Row : Products</title>
<?php include 'includes/head.php'; 
//Checklogin(); 
include("includes/function_dealers_product.php");
if($_REQUEST['dealer_id'] != $_SESSION['dealer_id']){
header("Location:index.php");
echo "hai";
}


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
 if(@$_REQUEST['action']=='status'){
if(@$_REQUEST['status']=='1')
	{
		@$newstatus='0';
	}
	else
	{
		@$newstatus='1';
	}
   Statuschange($_REQUEST['id'],$newstatus,$start,$_REQUEST['dealer_id']);

}
 $productlist_n = "SELECT id FROM products WHERE product_status!='-1' AND product_dealer=".$_REQUEST['dealer_id']; 
 $product_num = sqlnumber($productlist_n);
 
 $dealer_n = "SELECT id,dealer_name,dealer_code FROM    dealers WHERE   id=".$_REQUEST['dealer_id']; 
 $dealer_re = $db->getRow($dealer_n);
 
?>
</head>

<body>
<div class="container">
<?php include 'includes/head_profile.php'; ?>
<div class="clear"></div>
<?php include 'includes/cms-menu.php'; ?>
<div class="clear"></div>

<div class="content">

<div style="margin-left:10px;"><strong>Dealer Name: <?php echo  $dealer_re['dealer_name']; ?></strong><br><strong>Dealer Code: <?php echo  $dealer_re['dealer_code']; ?></strong></div>
<div class="clear"></div>

<div class="dashboard-button clearfix" style="border:none"></div>
<div class="clear"></div>
<div class="cms-heading">Dealer Products</div>
<div class="clear"></div>
<div class="main-content">
<table>
<thead>
<tr>
<th width="50"><input class="check-all" type="checkbox" /></th>
<th width="80" align="left">Product Code</th>
<th width="300" align="left">Product Name</th>
<th width="50" align="right">Price</th>
<th width="60" align="left">Added Date</th>
<th width="60" align="left">Sold Date</th>

<th width="200" align="center">Action</th>
</tr>
</thead>
<?php 
 $productlist = "SELECT id,product_name,product_status,product_featured,product_on_sale,product_code,product_sale_price,product_created_date,product_modified_date  FROM  products WHERE product_status!='-1' AND product_dealer=".$_REQUEST['dealer_id']."  LIMIT ".$start.", ".$q_limit.""; 
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
  <td><a href="#"><?php echo date("d/m/Y", strtotime($productlist_result['product_created_date'])); ?></a></td>
  <td><a href="#"><?php if($productlist_result['product_modified_date'] != "0000-00-00 00:00:00") echo date("d/m/Y", strtotime($productlist_result['product_modified_date'])); else echo "Not Sold";?></a></td>
 
   <td align="center" valign="middle">

  <a href="edit-product.php?id=<?php echo $productlist_result['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/edit.png" style="margin:0px 5px 0px 5px;" alt="Edit" title="Edit"/></a>&nbsp;
  
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