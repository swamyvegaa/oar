<?php
ob_start();
include '../common.php';
Checklogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On Antique Row : Add Page</title>
<?php 
include 'includes/head.php'; 
Checklogin(); 
include("includes/fckeditor/fckeditor.php");
include("includes/function_page.php");
include('includes/class.upload.php');

$page=Pageedit($_REQUEST['id'],$_REQUEST['start']);

if(isset($_REQUEST['submit']) && $_REQUEST['submit']=='Save'){
if(@$_REQUEST[page_name]==''){
@$error['page_name']="<span class='error'>Enter page name</span>";
}
if(count(@$error)==0){


if(@$_FILES['page_banner']['name']!=''){

$dir_dest = (isset($_GET['dir']) ? $_GET['dir'] : '../images/content-images');
$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);
}
 $handle = new upload($_FILES['page_banner']);
  if ($handle->uploaded) {
      
      $handle->image_resize         = true;
	  $handle->image_y               = 250;
      $handle->image_x               = 1000;
     
      $handle->process($dir_dest);
      $handle->file_dst_name= '/images/content-images/'. $handle->file_dst_name;
  }else{
   $handle->file_dst_name='';
  }
  

if($_REQUEST['page_status']==''){
$_REQUEST['page_status']='0';
}
if($_REQUEST['page_status_sitemap']==''){
$_REQUEST['page_status_sitemap']='0';
}
Pageupdate(@$_REQUEST['page_name'],@$_REQUEST['page_alias'],@$_REQUEST['page_title'],@$_REQUEST['page_order'],@$_REQUEST['page_content'],@$handle->file_dst_name,@$_REQUEST['page_meta_title'],@$_REQUEST['page_meta_description'],@$_REQUEST['page_meta_keywords'],@$_REQUEST['page_status'],@$_REQUEST['page_status_sitemap'],@$_REQUEST['page_ad'],$_REQUEST['start'],$_REQUEST['id']);
}
}
?>
</head>

<body>
<div class="container">
<div class="header">
<div class="header-left">
<a href="dashboard.php"><img src="cms-images/onantiquerow-cms-logo.jpg" style="float:left;" title="" /></a>
<div class="text-button" style="float:right; margin-top:50px;"><a href="http://www.onantiquerow.com" target="_blank">View Website</a></div>
</div>
<div class="header-right">
<div class="profile-box">
<a href="admin-profile.php"><img src="cms-images/user-profile-img.jpg" title="User" /></a>
<a href="admin-profile.php"><h4>On Antique Row</h4></a>
<p><a href="admin-profile.php">Profile</a></p><br/>
<button>Logout</button>
</div>
</div>
</div>
<div class="clear"></div>
<?php include 'includes/cms-menu.php'; ?>
<div class="clear"></div>

<div class="content">
<div class="clear"></div>
<div class="dashboard-button clearfix"><a href="pages.php?start=<?php echo $_REQUEST['start']; ?>"><img src="cms-images/back-to-pages.png"  /><br/>Manage<br/>Pages</a></div>
<div class="cms-heading">New Page</div>
<div class="clear"></div>
<div class="main-content">
<form action="" method="post" enctype="multipart/form-data">
<table width="1000" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Page Properties</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Page Name [For Menu]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text"  name="page_name" id="page_name" style="width:400px;"  value="<?php echo $page['page_name']; ?>"/>
  <?php echo @$error['page_name']; ?></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Page Alias [For URL]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text"  name="page_alias" id="page_alias" style="width:400px;" value="<?php echo $page['page_alias']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Page Heading [Displayed on Page]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="page_title" id="page_title" style="width:400px;" value="<?php echo $page['page_title']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Priority [For Sorting]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" name="page_order" id="page_order" width="150" value="<?php echo $page['page_order']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Page Content</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><?php 
																$oFCKeditor = new FCKeditor('page_content') ;
                                                                $oFCKeditor->BasePath = "includes/fckeditor/";
                                                                $oFCKeditor->Height=450;
                                                                $oFCKeditor->Width=700;
                                                                if (isset($page['page_content'])&& !isset($_REQUEST['page_content'])){
																	
                                                                $oFCKeditor->Value = stripslashes(@$page['page_content']);
																
                                                                }else{
																
                                                                $oFCKeditor->Value = stripslashes(@$_REQUEST['page_content']);
																
                                                                }	
                                                                $oFCKeditor->Create();
                                                            ?></td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Page Images</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Page Banner [Size]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="file" name="page_banner" id="page_banner" style="width:300px;" /><img src="..<?php echo $page['page_banner']; ?>"  width="150" /></td>
</tr>
<tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Page SEO Properties</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Title</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text"  name="page_meta_title" id="page_meta_title" style="width:600px;" value="<?php echo $page['page_meta_title']; ?>"/></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Description</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea   name="page_meta_description" id="page_meta_description" style="width:600px; height:50px;"><?php echo $page['page_meta_description']; ?></textarea></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Keywords</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea  name="page_meta_keywords" id="page_meta_keywords" style="width:600px; height:50px;"><?php echo $page['page_meta_keywords']; ?></textarea></td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Page Display Properties</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">&nbsp;</td>
<td width="50" align="left">&nbsp;</td>
<td width="650" align="left"><input type="checkbox" name="page_status" id="page_status"  style="margin-right:20px;" value="1" <?php if($page['page_status']=='1'){ ?>checked="checked"<?php } ?>/>Active&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="page_status_sitemap" id="page_status_sitemap" style="margin-right:20px;"  value="1" <?php if($page['page_status_sitemap']=='1'){ ?>checked="checked"<?php } ?>/>Show in Sitemap</td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Ads</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Ad Content</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea  name="page_ad" id="page_ad"  style="width:600px; height:50px;"><?php echo $page['page_ad']; ?></textarea></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td width="300" align="left" valign="top">&nbsp;</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="submit" name="submit" id="submit"  value="Save"  class="grey-button" />
&nbsp;&nbsp;&nbsp;&nbsp;<a href="pages.php?start=<?php echo $_REQUEST['start']; ?>" style="text-decoration:none;"><input class="grey-button" type="button" value="Cancel" onClick="window.history.go(-1);"/></a>
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