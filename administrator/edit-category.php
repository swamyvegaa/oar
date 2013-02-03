<?php
ob_start();
include '../common.php';
Checklogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On Antique Row : Edit Category</title>
<?php include 'includes/head.php'; 

Checklogin(); 
include("includes/function_category.php");
include('includes/class.upload.php');
$cat=Categoryedit($_REQUEST['id'],$_REQUEST['start']);
 $catRoot = "SELECT category_root  FROM  categories WHERE id=".$_REQUEST['id']; 
 $catRootArr = $db->getRow($catRoot);
if(isset($_REQUEST['submit']) && $_REQUEST['submit']=='Save'){

if(@$_REQUEST['category_name']!=''){
 $catnamere = "SELECT category_name  FROM  categories WHERE category_status!='-1' AND id!='".$_REQUEST['id']."' AND category_name='".$_REQUEST['category_name']."'"; 
 $catnamere_num = sqlnumber($catnamere);
  }
 if(@$_REQUEST['category_code']!=''){
  $catcodere = "SELECT category_name  FROM  categories WHERE category_status!='-1' AND id!=".$_REQUEST['id']." AND category_code='".$_REQUEST['category_code']."'"; 
 $catcodere_num = $db->getRow($catcodere);
 }
 if(@$_REQUEST['category_alias']!=''){
 $catalire = "SELECT category_name  FROM  categories WHERE category_status!='-1' AND id!=".$_REQUEST['id']." AND category_alias='".$_REQUEST['category_alias']."' AND category_alias!=''"; 
 $catalire_num = $db->getRow($catalire);
 }
 
if(@$_REQUEST['category_name']==''){
@$error['category_name']="<span class='error'>Enter category name</span>";
}else if(@$catnamere_num>0){
@$error['category_name']="<span class='error'>Category name exists</span>";
}
if(@$_REQUEST['category_code']==''){
@$error['category_code']="<span class='error'>Enter category code</span>";

}else if(@$catcodere_num>0){
@$error['category_code']="<span class='error'>Category code exists</span>";
}
if(@$catalire_num>0){
@$error['category_alias']="<span class='error'>Category alias exists</span>";
}


if(count(@$error)==0){


if(@$_FILES['category_banner']['name']!=''){

$dir_dest = (isset($_GET['dir']) ? $_GET['dir'] : '../images/category');

$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);

 $handle = new upload($_FILES['category_banner']);
 
  if ($handle->uploaded) {
      
      $handle->image_resize         = true;
	  $handle->image_y               = 250;
      $handle->image_x               = 750;
     
      $handle->process($dir_dest);
      echo $handle->file_dst_name= 'images/category/'. $handle->file_dst_name;
  }
  
}
else{
  @ $handle->file_dst_name='';
  }
  
  if(@$_FILES['category_thumbnail']['name']!=''){

$foo = new upload($_FILES['category_thumbnail']);
$dir_dest1 = (isset($_GET['dir']) ? $_GET['dir'] : '../images/category/thumb');
$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);
   if ($foo->uploaded) {
      
      $foo->image_resize         = true;
	  $foo->image_y               = 255;
      $foo->image_x               = 255;
     
      $foo->process($dir_dest1);
       $foo->file_dst_name= 'images/category/thumb/'. $foo->file_dst_name;
  }
  }else{
  @ $foo->file_dst_name='';
  }
  
  


if(@$_REQUEST['category_status']==''){
$_REQUEST['category_status']='0';
}
if(@$_REQUEST['category_featured_status']==''){
$_REQUEST['category_featured_status']='0';
}

if($_REQUEST['category_root']==$_REQUEST['id']){
$_REQUEST['category_root']='0';
}


Categoryupdate(@$_REQUEST['category_root'],@$_REQUEST['category_name'],@$_REQUEST['category_alias'],@$_REQUEST['category_title'],@$_REQUEST['category_code'],@$_REQUEST['category_order'],@$_REQUEST['category_description_top'],@$_REQUEST['category_description_bottom'],@$handle->file_dst_name,@$foo->file_dst_name,@$_REQUEST['category_meta_title'],@$_REQUEST['category_meta_description'],@$_REQUEST['category_meta_keywords'],@$_REQUEST['category_status'],@$_REQUEST['category_featured_status'],@$_REQUEST['category_ad'],$_REQUEST['start'],$_REQUEST['id']); 
 }
 

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
<div class="cms-heading">Edit Category</div>
<div class="clear"></div>
<div class="main-content">
<form action="" method="post" enctype="multipart/form-data">
<table width="1000" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
<td colspan="3" bgcolor="#eaeaea">Parent Category</td>
</tr>
<tr>
<td width="300" align="left" valign="top">Select Parent Category</td>
<td width="50">&nbsp;</td>
<td width="650" align="left">
<div>
<select name="category_root" id="category_root" style="width:600px;" size="10">
<option value="0" >Root Category</option>
<?php 
 $categorylist = "SELECT id,category_name,category_root  FROM  categories WHERE category_status!='-1' AND category_root=0"; 
 $categorylistre = $db->getRows($categorylist);
 $category_num = sqlnumber($categorylist);
 if( $category_num>0){
 foreach($categorylistre as  $categorylist_result){?>
  <option value="<?php echo $categorylist_result['id']; ?>"  <?php if( $categorylist_result['id']==$catRootArr['category_root']){?>selected="selected"<?php }?> ><?php echo $categorylist_result['category_name']; ?></option>
  <?php 
   $categorylist_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$categorylist_result['id']; 
   $category_sub = $db->getRows($categorylist_sub);
   foreach($category_sub as  $category_sub_re){?>
  <option value="<?php echo $category_sub_re['id']; ?>" <?php if( $category_sub_re['id']==$catRootArr['category_root']){?>selected="selected"<?php }?>>&nbsp;&nbsp;&nbsp;<?php echo $category_sub_re['category_name']; ?></option>
   <?php 
   $categorylist_sub_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$category_sub_re['id']; 
   $category_sub_sub = $db->getRows($categorylist_sub_sub);
   foreach($category_sub_sub as  $category_sub_res){?>
    <option value="<?php echo $category_sub_res['id']; ?>"  <?php if( $category_sub_res['id']==$catRootArr['category_root']){?>selected="selected"<?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_sub_res['category_name']; ?></option>
	  <?php 
   $categorylist_sub_sub1 = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$category_sub_res['id']; 
   $category_sub_sub1 = $db->getRows($categorylist_sub_sub1);
   foreach($category_sub_sub1 as  $category_sub_res1){?>
   <option value="<?php echo $category_sub_res1['id']; ?>"  disabled="disabled" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_sub_res1['category_name']; ?></option>
   
  <?php }}}
  }
}
 
?>

</select>
</div>
</td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Category Properties</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Category Name [For Menu]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text"  name="category_name" id="category_name" style="width:400px;"  value="<?php echo $cat['category_name']; ?>"/><?php echo @$error['category_name']; ?></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Category Alias [For URL]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text"  name="category_alias" id="category_alias" style="width:400px;"  value="<?php echo $cat['category_alias']; ?>"/><?php echo @$error['category_alias']; ?></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Category Heading [Displayed on Page]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="category_title" id="category_title" style="width:400px;" value="<?php echo $cat['category_title']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Category Code [Inventory]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="category_code" id="category_code" style="width:400px;" value="<?php echo $cat['category_code']; ?>"/><?php echo @$error['category_code']; ?></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Priority [For Sorting]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="category_order" id="category_order" width="150" value="<?php echo $cat['category_order']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Category Description [Top]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea  name="category_description_top" id="category_description_top" style="width:600px; height:100px;"><?php echo $cat['category_description_top']; ?></textarea></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Category Description [Bottom]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea name="category_description_bottom" id="category_description_bottom" style="width:600px; height:100px;"><?php echo $cat['category_description_bottom']; ?></textarea></td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Category Images</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Category Banner [Size]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left" style="vertical-align:top;"><input type="file" name="category_banner" style="width:300px;vertical-align:top;" />
<br />
<img src="../<?php echo $cat['category_banner']; ?>" width="300" /></td>
</tr>
<tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td width="300" align="left" valign="top">Category Thumbnail[size]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left" style="vertical-align:top;"><input type="file" name="category_thumbnail" style="width:300px;" /><img src="../<?php echo $cat['category_thumbnail']; ?>" width="150" height="150" /></td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Category SEO Properties</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Title</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input  type="text" name="category_meta_title" id="category_meta_title"  style="width:600px;" value="<?php echo $cat['category_name']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" style="vertical-align:top;">Meta Description</td>
<td width="50">&nbsp;</td>
<td width="650" align="left" style="vertical-align:top;"><textarea  name="category_meta_description" id="category_meta_description" style="width:600px; height:50px;"><?php echo $cat['category_meta_description']; ?></textarea></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Keywords</td>
<td width="50">&nbsp;</td>
<td width="650" align="left" style="vertical-align:top;"><textarea  name="category_meta_keywords" id="category_meta_keywords" style="width:600px; height:50px;"><?php echo $cat['category_meta_keywords']; ?></textarea></td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Category Display Properties</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top"><input type="checkbox"  name="category_status" id="category_status" value="1"  style="margin-right:20px;" <?php if($cat['category_status']=='1'){ ?>checked="checked"<?php } ?> />Active</td>
<td width="50" align="left">&nbsp;</td>
<td width="650" align="left"><input type="checkbox"  name="category_featured_status" id="category_featured_status"  value="1" style="margin-right:20px;" <?php if($cat['category_featured_status']=='1'){ ?>checked="checked"<?php } ?>/>Featured</td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Ads</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Ad Content</td>
<td width="50">&nbsp;</td>
<td width="650" align="left" style="vertical-align:top;"><textarea  name="category_ad" id="category_ad" style="width:600px; height:50px;"><?php echo $cat['category_ad']; ?></textarea></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td width="300" align="left" valign="top">&nbsp;</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="submit" name="submit" id="submit"  value="Save" class="grey-button" />  &nbsp;&nbsp;&nbsp;&nbsp;
 <a href="categories.php?start=<?php echo $_REQUEST['start'];?>" style="text-decoration:none; cursor:pointer;"><input class="grey-button" type="button" value="Cancel" /></a>
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