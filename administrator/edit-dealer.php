<?php
ob_start();
include '../common.php';
Checklogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On Antique Row : Add Dealer</title>
<?php include 'includes/head.php';
Checklogin(); 
include("includes/function_dealers.php");
include('includes/class.upload.php');
$vlc= new validator();
$dealer=Dealeredit($_REQUEST['id'],$_REQUEST['start']);
//print_r($dealer);



if(isset($_REQUEST['submit']) && $_REQUEST['submit']=='Save'){
   if(@$_REQUEST['dealer_store_name']!=''){
  $denamere = "SELECT dealer_store_name  FROM  dealers WHERE dealer_status!='-1'  AND id!='".$_REQUEST['id']."' AND dealer_store_name='".mysql_real_escape_string($_REQUEST['dealer_store_name'])."'"; 
  $denamere_num = sqlnumber($denamere);
  }
 if(@$_REQUEST['dealer_code']!=''){
 $decodere = "SELECT dealer_code  FROM  dealers WHERE dealer_status!='-1'  AND id!='".$_REQUEST['id']."' AND dealer_code='".mysql_real_escape_string($_REQUEST['dealer_code'])."'"; 
 $decodere_num = $db->getRow($decodere);
 }
 if(@$_REQUEST['dealer_alias']!=''){
 $dealire = "SELECT dealer_alias  FROM  dealers WHERE dealer_status!='-1'  AND id!='".$_REQUEST['id']."' AND dealer_alias='".mysql_real_escape_string($_REQUEST['dealer_alias'])."' AND dealer_alias!=''"; 
 $dealire_num = $db->getRow($dealire);
 }
 
	
	
if(@$_REQUEST['dealer_name']==''){
@$error['dealer_name']="<span class='error'>Enter delear name</span>";
}
if(@$_REQUEST['dealer_pwd']!=@$_REQUEST['dealer_cpwd']){
@$error['dealer_cpwd']="<span class='error'>password & confirm password not match</span>";
}


if(@$_REQUEST['dealer_store_name']==''){
@$error['dealer_store_name']="<span class='error'>Enter delear store name</span>";
}else if(@$denamere_num>0){
@$error['dealer_store_name']="<span class='error'>delear store name exists</span>";
}
if(@$_REQUEST['dealer_code']==''){
@$error['dealer_code']="<span class='error'>Enter  delear code</span>";

}else if(@$decodere_num>0){
@$error['dealer_code']="<span class='error'>delear code exists</span>";
}
if(@$dealire_num>0){
@$error['dealer_alias']="<span class='error'>delear alias exists</span>";
}

if(count(@$error)==0){


if(@$_FILES['dealer_banner']['name']!=''){


$dir_dest = (isset($_GET['dir']) ? $_GET['dir'] : '../images/dealers');


$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);

 $handle = new upload($_FILES['dealer_banner']);
 
  if ($handle->uploaded) {
      
      $handle->image_resize         = true;
	  $handle->image_y               = 350;
      $handle->image_x               = 750;
     
      $handle->process($dir_dest);

      $handle->file_dst_name= 'images/dealers/'. $handle->file_dst_name;

  }
  
}
else{
  @ $handle->file_dst_name='';
  }
  
  if(@$_FILES['dealer_thumbnail']['name']!=''){

$foo = new upload($_FILES['dealer_thumbnail']);

$dir_dest1 = (isset($_GET['dir']) ? $_GET['dir'] : '../images/dealers');

$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);
   if ($foo->uploaded) {
      
      $foo->image_resize         = true;
	  $foo->image_y               = 170;
      $foo->image_x               = 225;
     
      $foo->process($dir_dest1);

       $foo->file_dst_name= 'images/dealers/'. $foo->file_dst_name;

  }
  }else{
  @ $foo->file_dst_name='';
  }
  
  if(@$_FILES['dealer_icon']['name']!=''){

$dealer_icon = new upload($_FILES['dealer_icon']);

$dir_dest1 = (isset($_GET['dir']) ? $_GET['dir'] : '../images/dealers');

$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);
   if ($dealer_icon->uploaded) {
      
      $dealer_icon->image_resize         = true;
	  $dealer_icon->image_y               = 50;
      $dealer_icon->image_x               = 150;
     
       $dealer_icon->process($dir_dest1);

       $dealer_icon->file_dst_name= 'images/dealers/'. $dealer_icon->file_dst_name;

  }
  }else{
  @ $dealer_icon->file_dst_name='';
  }
  
  


if(@$_REQUEST['dealer_status']==''){
$_REQUEST['dealer_status']='0';
}
if(@$_REQUEST['dealer_featured']==''){
$_REQUEST['dealer_featured']='0';
}
if(@$_REQUEST['dealer_show_in_sitemap']==''){
$_REQUEST['dealer_show_in_sitemap']='0';
}

Delearupdate(mysql_real_escape_string(@$_REQUEST['dealer_name']),mysql_real_escape_string(@$_REQUEST['dealer_code']),@$_REQUEST['dealer_login_email'],@$_REQUEST['dealer_pwd'],@$_REQUEST['dealer_order'],@$_REQUEST['dealer_status'],@$_REQUEST['dealer_featured'],@$_REQUEST['dealer_show_in_sitemap'],mysql_real_escape_string(@$_REQUEST['dealer_store_name']),mysql_real_escape_string(@$_REQUEST['dealer_alias']),mysql_real_escape_string(@$_REQUEST['dealer_title']),mysql_real_escape_string(@$_REQUEST['dealer_address1']),mysql_real_escape_string(@$_REQUEST['dealer_address2']),mysql_real_escape_string(@$_REQUEST['dealer_address3']),mysql_real_escape_string(@$_REQUEST['dealer_city']),mysql_real_escape_string(@$_REQUEST['dealer_state']),mysql_real_escape_string(@$_REQUEST['dealer_country']),@$_REQUEST['dealer_zip_code'],@$_REQUEST['dealer_phone'],@$_REQUEST['dealer_fax'],@$_REQUEST['dealer_toll_free'],@$_REQUEST['dealer_email'],mysql_real_escape_string(@$_REQUEST['dealer_website']),mysql_real_escape_string(@$_REQUEST['dealer_description_top']),mysql_real_escape_string(@$_REQUEST['dealer_description_bottom']),@$handle->file_dst_name,@$foo->file_dst_name,@$dealer_icon->file_dst_name,mysql_real_escape_string(@$_REQUEST['dealer_meta_title']),mysql_real_escape_string(@$_REQUEST['dealer_meta_description']),mysql_real_escape_string(@$_REQUEST['dealer_meta_keywords']),mysql_real_escape_string(@$_REQUEST['dealer_ad']),$_REQUEST['start'],$_REQUEST['id']); 
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
<div class="clear"></div>
<div class="dashboard-button clearfix"><a href="dealers.php?start=<?php echo $_REQUEST['start'];?>"><img src="cms-images/back-to-dealers.png"  /><br/>Manage<br/>Dealers</a></div>
<div class="cms-heading">Edit Dealer</div>
<div class="clear"></div>
<div class="main-content">
<form action="" method="post" enctype="multipart/form-data">
<table width="1000" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Dealer Login Properties</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Name</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text"  name="dealer_name" id="dealer_name" style="width:400px;" value="<?php echo @$dealer['dealer_name']; ?>" /><?php echo @$error['dealer_name']; ?></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Code</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_code" id="dealer_code" style="width:400px;" value="<?php echo @$dealer['dealer_code']; ?>"/><?php echo @$error['dealer_code']; ?></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Login Email</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_login_email" id="dealer_login_email" style="width:400px;" value=<?php echo $dealer['dealer_login_email']; ?> /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Password</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="password" name="dealer_pwd" id="dealer_pwd" style="width:400px;" /><?php echo @$error['dealer_pwd']; ?></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Confirm Password</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="password" name="dealer_cpwd" id="dealer_cpwd" style="width:400px;" /><?php echo @$error['dealer_cpwd']; ?></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Priority [For Sorting]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_order" id="dealer_order" width="150" value="<?php echo @$dealer['dealer_order']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Display</td>
<td width="50">&nbsp;</td>
<td width="650" align="left">
<input type="checkbox" name="dealer_status" id="dealer_status" style="margin-left:25px; margin-right:10px;" value="1"  <?php if($dealer['dealer_status']=='1'){?> checked="checked"<?php } ?>/>Active
<input type="checkbox"  name="dealer_featured" id="dealer_featured" style="margin-left:25px; margin-right:10px;"  value="1" <?php if($dealer['dealer_featured']=='1'){?> checked="checked"<?php } ?>/>Featured
<input type="checkbox" name="dealer_show_in_sitemap" id="dealer_show_in_sitemap" style="margin-left:25px; margin-right:10px;"  value="1" <?php if($dealer['dealer_show_in_sitemap']=='1'){?> checked="checked"<?php } ?>/>Show in Sitemap
</td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Dealer Information [Displayed on Dealer Page]</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Name / Store Name</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_store_name" id="dealer_store_name" style="width:400px;" value="<?php echo @$dealer['dealer_store_name']; ?>"/><?php echo @$error['dealer_store_name']; ?></td>
</tr>

<tr>
<td width="300" align="left" valign="top">Dealer Alias [For URL]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_alias" id="dealer_alias" style="width:400px;" value="<?php echo @$dealer['dealer_alias']; ?>"/><?php echo @$error['dealer_alias']; ?></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Title</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_title" id="dealer_title" style="width:400px;" value="<?php echo @$dealer['dealer_title']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Address 1</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_address1" id="dealer_address1" style="width:400px;" value="<?php echo @$dealer['dealer_address1']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Address 2</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_address2" id="dealer_address2" style="width:400px;" value="<?php echo @$dealer['dealer_address2']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Address 3</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_address3" id="dealer_address3" style="width:400px;" value="<?php echo @$dealer['dealer_address3']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer City</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_city" id="dealer_city" style="width:400px;" value="<?php echo @$dealer['dealer_city']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer State</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_state" id="dealer_state" style="width:400px;" value="<?php echo @$dealer['dealer_state']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Country</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_country" id="dealer_country" style="width:400px;" value="<?php echo @$dealer['dealer_country']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer ZIP Code</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_zip_code" id="dealer_zip_code" style="width:400px;" value="<?php echo @$dealer['dealer_zip_code']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Phone</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_phone" id="dealer_phone" style="width:400px;" value="<?php echo @$dealer['dealer_phone']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Fax</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_fax" id="dealer_fax" style="width:400px;" value="<?php echo @$dealer['dealer_fax']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Toll-Free</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_toll_free" id="dealer_toll_free" style="width:400px;" value="<?php echo @$dealer['dealer_toll_free']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Email</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_email" id="dealer_email" style="width:400px;" value=<?php echo $dealer['dealer_email']; ?> /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Website</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_website" id="dealer_website" style="width:400px;" value="<?php echo @$dealer['dealer_website']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" style="vertical-align:top;">Dealer Description [Top]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea name="dealer_description_top" id="dealer_description_top" style="width:600px; height:100px;"><?php echo @$dealer['dealer_description_top']; ?></textarea></td>
</tr>
<tr>
<td width="300" align="left"  style="vertical-align:top;">Dealer Description [Bottom]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea name="dealer_description_bottom" id="dealer_description_bottom" style="width:600px; height:100px;"><?php echo @$dealer['dealer_description_bottom']; ?></textarea></td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Dealer Images</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Banner [Size: 740x250]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="file" name="dealer_banner" id="dealer_banner"  style="width:300px;" /><br><br><img src="../<?php echo @$dealer['dealer_banner']; ?>" width="225" /><br><br></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Thumbnail [Size: 225x170]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="file" name="dealer_thumbnail" id="dealer_thumbnail"  style="width:300px;" /><br><br><img src="../<?php echo @$dealer['dealer_thumbnail']; ?>" width="225" /><br><br></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer Icon [Size: 100x50]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="file" name="dealer_icon" id="dealer_icon"  style="width:300px;" /><br><br><img src="../<?php echo @$dealer['dealer_icon']; ?>" /><br><br></td>
</tr>

<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Dealer SEO Properties</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Title</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="dealer_meta_title" id="dealer_meta_title" style="width:600px;" value="<?php echo @$dealer['dealer_meta_title']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Description</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea name="dealer_meta_description" id="dealer_meta_description" style="width:600px; height:50px;"><?php echo @$dealer['dealer_meta_description']; ?></textarea></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Keywords</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea name="dealer_meta_keywords" id="dealer_meta_keywords" style="width:600px; height:50px;"><?php echo @$dealer['dealer_meta_keywords']; ?></textarea></td>
</tr>

<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Ads</strong></td>
</tr>
<tr>
<td width="300" align="left"  style="vertical-align:top;">Ad Content on Dealer Page</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea name="dealer_ad" id="dealer_ad" style="width:600px; height:50px;"><?php echo @$dealer['dealer_ad']; ?></textarea></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td width="300" align="left" valign="top">&nbsp;</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="submit" name="submit" id="submit"  value="Save"class="grey-button"/> 
&nbsp;&nbsp;&nbsp;&nbsp;<a href="dealers.php?start=<?php echo $_REQUEST['start'];?>" style="text-decoration:none;"><input class="grey-button" type="button" value="Cancel" onClick="window.history.go(-1);"/></a>
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