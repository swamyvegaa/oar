<?php
ob_start();
include '../common.php';
Checklogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On Antique Row : Add Product</title>
<?php include 'includes/head.php'; 
Checklogin(); 
include("includes/function_products.php");
include('includes/class.upload.php');
$catRootPr = "SELECT product_primary_category,product_secodary_category  FROM  products WHERE id=".$_REQUEST['id']; 
 $catRootArr = $db->getRow($catRootPr);
 
$Productedit=Productedit($_REQUEST['id'],$_REQUEST['start']);

if(isset($_REQUEST['submit']) && $_REQUEST['submit']=='Save'){
   if(@$_REQUEST['product_name']!=''){
  $productnamere = "SELECT product_name  FROM  products WHERE product_status!='-1' AND id!=".$_REQUEST['id']." AND product_name='".$_REQUEST['product_name']."'"; 
  $productnamere_num = sqlnumber($productnamere);
  }
 if(@$_REQUEST['product_code']!=''){
 $productcodere = "SELECT product_code  FROM  products WHERE product_status!='-1' AND id!=".$_REQUEST['id']." AND product_code='".$_REQUEST['product_code']."'"; 
 $productcodere_num = $db->getRow($productcodere);
 }
 if(@$_REQUEST['product_alias']!=''){
 $productalire = "SELECT product_alias  FROM  products WHERE product_status!='-1' AND id!=".$_REQUEST['id']." AND product_alias='".$_REQUEST['product_alias']."' AND product_alias!=''"; 
 $productalire_num = $db->getRow($productalire);
 }

	
	


if(@$_REQUEST['product_name']==''){
@$error['product_name']="<br><span class='error'>Enter product name</span>";
}else if(@$productnamere_num>0){
@$error['product_name']="<br><span class='error'>product  name exists</span>";
}
if(@$_REQUEST['product_code']==''){
@$error['product_code']="<span class='error'>Enter  product code</span>";

}else if(@$productcodere_num>0){
@$error['product_code']="<span class='error'>product code exists</span>";
}
if(@$productalire_num>0){
@$error['product_alias']="<span class='error'>product alias exists</span>";
}

if(count(@$error)==0){


if(@$_FILES['product_primary_image']['name']!=''){

$dir_dest = (isset($_GET['dir']) ? $_GET['dir'] : '../images/products');

$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);

 $handle = new upload($_FILES['product_primary_image']);
 
  if ($handle->uploaded) {
      
      $handle->image_resize         = true;
	  $handle->image_y               = 250;
      $handle->image_x               = 750;
     
      $handle->process($dir_dest);
      $handle->file_dst_name= '/images/products/'. $handle->file_dst_name;
  }
  
}
else{
  @ $handle->file_dst_name='';
  }

  if(count(@$_FILES['product_secondary_image']['name'])>0){ 
  
   $files = array();
    foreach ($_FILES['product_secondary_image'] as $k => $l) {
        foreach ($l as $i => $v) {
            if (!array_key_exists($i, $files))
                $files[$i] = array();
            $files[$i][$k] = $v;
        }
    }
	 
 foreach ($files as $file) {
$productaler_icon = new upload($file);
@$dir_dest1 = (isset($_GET['dir']) ? $_GET['dir'] : '../images/products/thumb');
@$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);
   if ($productaler_icon->uploaded) {
      
      $productaler_icon->image_resize         = true;
	  $productaler_icon->image_y               = 50;
      $productaler_icon->image_x               = 100;
     
       $productaler_icon->process($dir_dest1);
      
	   }
	  $product_secondary_image[]= '/images/products/thumb/'. $productaler_icon->file_dst_name;
  }
  
 $product_secondary_image= implode(",",$product_secondary_image);

  }else{
  @$product_secondary_image='';
  }
  


if(@$_REQUEST['product_call_for_fee']==''){
$_REQUEST['product_call_for_fee']='0';
}
if(@$_REQUEST['product_free_shipping']==''){
$_REQUEST['product_free_shipping']='0';
}
if(@$_REQUEST['product_available']==''){
$_REQUEST['product_available']='0';
}
if(@$_REQUEST['product_sold']==''){
$_REQUEST['product_sold']='0';
}
if(@$_REQUEST['product_featured']==''){
$_REQUEST['product_featured']='0';
}
if(@$_REQUEST['product_on_sale']==''){
$_REQUEST['product_on_sale']='0';
}
if(@$_REQUEST['product_new_arrival']==''){
$_REQUEST['product_new_arrival']='0';
}
if(@$_REQUEST['product_coming_soon']==''){
$_REQUEST['product_coming_soon']='0';
}
$_REQUEST['product_category']=implode(",",$_REQUEST['product_category']);

Productupdate(@$_REQUEST['product_dealer'],@$_REQUEST['product_categoryPrimary'],@$_REQUEST['product_category'],@$_REQUEST['product_name'],@$_REQUEST['product_alias'],@$_REQUEST['product_title'],@$_REQUEST['product_code'],@$_REQUEST['product_cost_price'],@$_REQUEST['product_sale_price'],@$_REQUEST['product_call_for_fee'],@$_REQUEST['product_offer_price'],@$_REQUEST['product_period'],@$_REQUEST['product_origin'],@$_REQUEST['product_condition'],@$_REQUEST['product_height'],@$_REQUEST['product_width'],@$_REQUEST['product_depth'],@$_REQUEST['product_weight'],@$_REQUEST['product_shipping_price'],@$_REQUEST['product_free_shipping'],@$_REQUEST['product_instock_qty'],@$_REQUEST['product_overview'],@$_REQUEST['product_description'],@$_REQUEST['product_additional_information'],@$_REQUEST['product_available'],@$_REQUEST['product_sold'],@$_REQUEST['product_featured'],@$_REQUEST['product_on_sale'],@$_REQUEST['product_new_arrival'],@$_REQUEST['product_coming_soon'],@$_REQUEST['product_priority'],@$handle->file_dst_name,@$product_secondary_image,@$_REQUEST['product_meta_title'],@$_REQUEST['product_meta_description'],@$_REQUEST['product_meta_keywords'],@$_REQUEST['product_ad'],$_REQUEST['start'],$_REQUEST['id']); 
 }
 
}


?>
<script language="javascript" type="text/javascript">
function AddRow() //This function will add extra row to provide another file
{ 
	var prevrow = document.getElementById("specifications");
	var totprevrows = parseInt(prevrow.rows.length);
	
	var newtblrows = document.getElementById("extrarows");
	var totnewrows = parseInt(newtblrows.rows.length);
	
	newrowiddd = parseInt(totprevrows) + parseInt(totnewrows);
	
	var newrow = newtblrows.insertRow(newtblrows.rows.length);
	newrow.id = newrow.uniqueID; // give row its own ID

	var newcell; // an inserted row has no cells, so insert the cells
	newcell = newrow.insertCell(0);
	newcell.id = newcell.uniqueID;
	newcell.innerHTML = '<input name="product_secondary_image[]" type="file" value="" >';
}

function DelRow() //This function will delete the last row
{
	var prevrow = document.getElementById("extrarows");
	var minrows = parseInt(prevrow.rows.length);
	if(minrows > 0) {
		prevrow.deleteRow(prevrow.rows.length-1);
	} else {
		alert("You can not delete more rows");
	}
}

</script>
</head>

<body>
<div class="container clearfix">
<?php include 'includes/head_profile.php'; ?>
<div class="clear"></div>
<?php include 'includes/cms-menu.php'; ?>
<div class="clear"></div>

<div class="content">
<div class="clear"></div>
<div class="dashboard-button clearfix"><a href="products.php"><img src="cms-images/back-to-products.png"  /><br/>Manage<br/>Products</a></div>
<div class="cms-heading">New Product</div>
<div class="clear"></div>
<div class="main-content clearfix">
<form action="" method="post" enctype="multipart/form-data">
<table width="1000" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Dealer Information</strong></td>
</tr>
<tr>
<td width="300" align="left" style="vertical-align:top">Select Dealer</td>
<td width="50">&nbsp;</td>
<td width="650" align="left">
<div>
<select style="width:600px;" size="10" name="product_dealer" id="product_dealer">
<option value="0" selected="">On Antique Row</option>
<?php
$dealer_list = "SELECT id,dealer_store_name,dealer_code,dealer_status,dealer_featured  FROM  dealers WHERE dealer_status!='-1'"; 
$dealer_re = $db->getRows($dealer_list);
foreach( $dealer_re as $dealer_res){ ?>
<option value="<?php echo $dealer_res['id'];?>"  <?php if($Productedit['product_dealer']==$dealer_res['id']){?>selected="selected"<?php } ?>><?php echo $dealer_res['dealer_store_name'];?></option>
<?php } ?>
</select>
</div>
</td>
</tr>
<tr>

<td width="300" align="left" style="vertical-align:top">Select Primary Category</td>
<td width="50">&nbsp;</td>
<td width="650" align="left">
<div>
<select name="product_categoryPrimary" id="product_categoryPrimary" style="width:600px;" size="10">

<option value="0" >Root Category</option>
<?php 
 $categorylist = "SELECT id,category_name,category_root  FROM  categories WHERE category_status!='-1' AND category_root=0"; 
 $categorylistre = $db->getRows($categorylist);
 $category_num = sqlnumber($categorylist);
 if( $category_num>0){
 foreach($categorylistre as  $categorylist_result){?>
  <option value="<?php echo $categorylist_result['id']; ?>" <?php if( $categorylist_result['id']==$catRootArr['product_primary_category']){?>selected="selected"<?php }?> ><?php echo $categorylist_result['category_name']; ?></option>
  <?php 
   $categorylist_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$categorylist_result['id']; 
   $category_sub = $db->getRows($categorylist_sub);
   foreach($category_sub as  $category_sub_re){?>
  <option value="<?php echo $category_sub_re['id']; ?>" <?php if( $category_sub_re['id']==$catRootArr['product_primary_category']){?>selected="selected"<?php }?>>&nbsp;&nbsp;&nbsp;<?php echo $category_sub_re['category_name']; ?></option>
   <?php 
   $categorylist_sub_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$category_sub_re['id']; 
   $category_sub_sub = $db->getRows($categorylist_sub_sub);
   foreach($category_sub_sub as  $category_sub_res){?>
    <option value="<?php echo $category_sub_res['id']; ?>"  <?php if( $category_sub_res['id']==$catRootArr['product_primary_category']){?>selected="selected"<?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_sub_res['category_name']; ?></option>
	  <?php 
   $categorylist_sub_sub1 = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$category_sub_res['id']; 
   $category_sub_sub1 = $db->getRows($categorylist_sub_sub1);
   foreach($category_sub_sub1 as  $category_sub_res1){?>
   <option value="<?php echo $category_sub_res1['id']; ?>"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_sub_res1['category_name']; ?></option>
   
  <?php }}}
  }
}
 
?>

</select>
</div></td>
</tr>

<tr>
<td width="300" align="left" style="vertical-align:top">Select Secondary Category</td>
<td width="50">&nbsp;</td>
<td width="650" align="left">
<div>
<select name="product_category[]" id="product_category[]" style="width:600px;" size="10" multiple="multiple">
<option value="0" >Root Category</option>
<?php 
 $categorylist = "SELECT id,category_name,category_root  FROM  categories WHERE category_status!='-1' AND category_root=0"; 
 $categorylistre = $db->getRows($categorylist);
 $category_num = sqlnumber($categorylist);
 if( $category_num>0){
 foreach($categorylistre as  $categorylist_result){?>
  <option value="<?php echo $categorylist_result['id']; ?>" <?php if( $categorylist_result['id']==$catRootArr['product_secodary_category']){?>selected="selected"<?php }?> ><?php echo $categorylist_result['category_name']; ?></option>
  <?php 
   $categorylist_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$categorylist_result['id']; 
   $category_sub = $db->getRows($categorylist_sub);
   foreach($category_sub as  $category_sub_re){?>
  <option value="<?php echo $category_sub_re['id']; ?>" <?php if( $category_sub_re['id']==$catRootArr['product_secodary_category']){?>selected="selected"<?php }?>>&nbsp;&nbsp;&nbsp;<?php echo $category_sub_re['category_name']; ?></option>
   <?php 
   $categorylist_sub_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$category_sub_re['id']; 
   $category_sub_sub = $db->getRows($categorylist_sub_sub);
   foreach($category_sub_sub as  $category_sub_res){?>
    <option value="<?php echo $category_sub_res['id']; ?>"  <?php if( $category_sub_res['id']==$catRootArr['product_secodary_category']){?>selected="selected"<?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_sub_res['category_name']; ?></option>
	  <?php 
   $categorylist_sub_sub1 = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$category_sub_res['id']; 
   $category_sub_sub1 = $db->getRows($categorylist_sub_sub1);
   foreach($category_sub_sub1 as  $category_sub_res1){?>
   <option value="<?php echo $category_sub_res1['id']; ?>"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_sub_res1['category_name']; ?></option>
   
  <?php }}}
  }
}
 
?>

</select>
</div></td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Product Properties</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Name</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:600px;"  name="product_name" id="product_name" value="<?php echo $Productedit['product_name']; ?>"/>
  <?php echo @$error['product_name']; ?></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Alias</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:600px;"  name="product_alias" id="product_alias" value="<?php echo $Productedit['product_alias']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Title</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:600px;" name="product_title" id="product_title" value="<?php echo $Productedit['product_title']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Code</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  name="product_code" id="product_code" value="<?php echo $Productedit['product_code']; ?>"/>
  <?php echo @$error['product_code']; ?></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Cost Price</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  name="product_cost_price" id="product_cost_price" value="<?php echo $Productedit['product_cost_price']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Sale Price</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  name="product_sale_price" id="product_sale_price" value="<?php echo $Productedit['product_sale_price']; ?>"/>
<input type="checkbox" style="margin-left:25px; margin-right:10px;" name="product_call_for_fee" id="product_call_for_fee" value="1" <?php if($Productedit['product_call_for_fee']==1){ ?> checked="checked"<?php } ?>/>Call For Price
</td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Offer Price</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  name="product_offer_price" id="product_offer_price" value="<?php echo $Productedit['product_offer_price']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Period</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  name="product_period" id="product_period" value="<?php echo $Productedit['product_period']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Origin</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  name="product_origin" id="product_origin" value="<?php echo $Productedit['product_origin']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Condition</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  name="product_condition" id="product_condition" value="<?php echo $Productedit['product_condition']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Height</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  name="product_height" id="product_height" value="<?php echo $Productedit['product_height']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Width</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  name="product_width" id="product_width" value="<?php echo $Productedit['product_width']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Depth</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  name="product_depth" id="product_depth" value="<?php echo $Productedit['product_depth']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Weight</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  name="product_weight" id="product_weight" value="<?php echo $Productedit['product_weight']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Shipping Price</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  name="product_shipping_price" id="product_shipping_price" value="<?php echo $Productedit['product_shipping_price']; ?>"/> 
<input type="checkbox" style="margin-left:25px; margin-right:10px;"  name="product_free_shipping" id="product_free_shipping" <?php if($Productedit['product_free_shipping']==1){ ?> checked="checked"<?php } ?> value="1"/>Free Shipping</td> 
</tr>
<tr>
<td width="300" align="left" valign="top">Product Instock Qty</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  	 name="product_instock_qty" id="product_instock_qty" value="<?php echo $Productedit['product_instock_qty']; ?>"/></td> 
</tr>
<tr>
<td width="300" align="left" style="vertical-align:top">Product Overview [Short Description]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea style="width:600px; height:50px;"  name="product_overview" id="product_overview"><?php echo $Productedit['product_overview']; ?></textarea></td>
</tr>
<tr>
<td width="300" align="left" style="vertical-align:top">Product Description</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea style="width:600px; height:50px;"  name="product_description" id="product_description"><?php echo $Productedit['product_description']; ?></textarea></td>
</tr>
<tr>
<td width="300" align="left" style="vertical-align:top">Product Additional Information</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea style="width:600px; height:50px;"  name="product_additional_information" id="product_additional_information"><?php echo $Productedit['product_additional_information']; ?></textarea></td>
</tr>

<tr>
<td width="300" align="left" style="vertical-align:top">Product Display</td>
<td width="50">&nbsp;</td>
<td width="650" align="left">
<input type="checkbox" style="margin-left:25px; margin-right:10px;"  name="product_available" id="product_available" value="1" <?php if($Productedit['product_available']==1){ ?> checked="checked"<?php } ?>/>Available
<input type="checkbox" style="margin-left:25px; margin-right:10px;"  name="product_sold" id="product_sold" value="1" <?php if($Productedit['product_sold']==1){ ?> checked="checked"<?php } ?>/>Sold
<br /><br />
<input type="checkbox" style="margin-left:25px; margin-right:10px;"  name="product_featured" id="product_featured" value="1" <?php if($Productedit['product_featured']==1){ ?> checked="checked"<?php } ?>/>Featured
<input type="checkbox" style="margin-left:25px; margin-right:10px;"  name="product_on_sale" id="product_on_sale" value="1" <?php if($Productedit['product_on_sale']==1){ ?> checked="checked"<?php } ?>/>On Sale
<input type="checkbox" style="margin-left:25px; margin-right:10px;"  name="product_new_arrival" id="product_new_arrival" value="1" <?php if($Productedit['product_new_arrival']==1){ ?> checked="checked"<?php } ?>/>New Arrival
<input type="checkbox" style="margin-left:25px; margin-right:10px;"  name="product_coming_soon" id="product_coming_soon" value="1" <?php if($Productedit['product_coming_soon']==1){ ?> checked="checked"<?php } ?>/>Coming Soon
</td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Priority [For Sorting]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:200px;"  name="product_priority" id="product_priority" value="<?php echo $Productedit['product_priority']; ?>"/></td> 
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Product Images</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Primary Image</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="file" style="width:300px;"  name="product_primary_image" id="product_primary_image"/><img src="../<?php echo $Productedit['product_primary_image']; ?>"  width="150"  /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Product Secondary Image</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="file"  name="product_secondary_image[]" id="product_secondary_image[]" />
<a href="product_images.php" onclick="javascript:void window.open('product_images.php?id=<?php echo $_REQUEST['id'];?>','1359041203233','width=1000,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=100,top=100');return false;">Pop-up Window</a><table id="specifications" width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border:none;border-collapse: separate;" style="visibility:hidden">
<tr><td></td></tr>
</table>
 <table id="extrarows" width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border:none;border-collapse: separate; margin-left:-11px;"></table><input name="button2" type="button" onclick="AddRow()" value="Add Row" /> 
									      <input name="button" type="button"
										onclick="DelRow()" value="Delete Row" /></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Product SEO Properties</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Title</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:600px;"  name="product_meta_title" id="product_meta_title" value="<?php echo $Productedit['product_meta_title']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Description</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea style="width:600px; height:50px;"  name="" id="product_meta_description"><?php echo $Productedit['product_meta_description']; ?></textarea></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Keywords</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea style="width:600px; height:50px;"  name="product_meta_keywords" id="product_meta_keywords"><?php echo $Productedit['product_meta_keywords']; ?></textarea></td>
</tr>

<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Ads</strong></td>
</tr>
<tr>
<td width="300" align="left" style="vertical-align:top;">Ad Content on Product Page</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea style="width:600px; height:50px;"  name="product_ad" id="product_ad"><?php echo $Productedit['product_ad']; ?></textarea></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td width="300" align="left" valign="top">&nbsp;</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input class="grey-button" type="submit" name="submit"  id="submit" value="Save" />
&nbsp;&nbsp;&nbsp;&nbsp;<input class="grey-button" type="button" value="Cancel" />
</td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
</table> 
</form>
</div>
</div>
<div class="clear"></div>
<div class="container-wrapper">
  <?php include 'includes/footer.php'; ?>
</div>
</div>
</body>
</html>