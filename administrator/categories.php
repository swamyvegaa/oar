<?php
ob_start();
include '../common.php';
Checklogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On Antique Row : Catogories</title>
<?php include 'includes/head.php';

Checklogin(); 
include("includes/function_category.php");

 $categorylist_n = "SELECT id,category_name,category_root,category_status  FROM  categories WHERE category_status!='-1' AND category_root=0  "; 
 $category_num = sqlnumber($categorylist_n);
 
 $q_limit     = 20;
 if ( !isset($_REQUEST['start']) || $_REQUEST['start'] >=$category_num  || $_REQUEST['start']==""){
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

if($_REQUEST['featured_check']=='1'){
$statusfeatured='1';
}else{
$statusfeatured='0';
}

Statusfeatured($_REQUEST['featured_id'],$start,$statusfeatured);
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
<div class="dashboard-button clearfix"><a href="add-category.php?start=<?php echo @$start;?>"><img src="cms-images/add.png"  /><br/>Create New<br/>Category</a></div>
<div class="clear"></div>
<div class="cms-heading">Manage Categories</div>
<div class="clear"></div>
<div class="main-content">
<table>
<thead>
<tr>
<th width="50"><input class="check-all" type="checkbox" /></th>
<th width="500" align="left">Category Name</th>
<th width="150">Featured</th>
<th width="300">Action</th>
</tr>
</thead>
<?php 




 $categorylist = "SELECT id,category_name,category_root,category_status,category_featured_status  FROM  categories WHERE category_status!='-1' AND category_root=0  LIMIT ".$start.", ".$q_limit.""; 
 $categorylistre = $db->getRows($categorylist);
 
 if( $category_num>0){
  $rownum=$start;
 foreach($categorylistre as  $categorylist_result){
  $rownum++;
  $zibracolor = ($rownum%2==0)?"":"alt-row";
  ?>
 <tr  class="<?php echo $zibracolor; ?>">
  <td align="center" valign="middle"><input class="check-all" type="checkbox" /></td>
  <td><img src="cms-images/category.png" style="margin-right:10px;"  /><a href="#"><?php echo $categorylist_result['category_name']; ?></a></td>
  <td align="center" valign="middle"><form action=""  method="post" name='featured_form<?php echo $categorylist_result['id']; ?>'><input class="check-all" type="checkbox" onclick="document.featured_form<?php echo $categorylist_result['id']; ?>.submit();" name="featured_check"  id="featured_check" value="1" <?php if($categorylist_result['category_featured_status']=='1'){ ?> checked="checked"<?php } ?>/><input type="hidden" name="featured_id" id="featured_id" value="<?php echo $categorylist_result['id']; ?>"  /></form></td>
  <td align="center" valign="middle">
  <a href="?action=status&id=<?php echo $categorylist_result['id']; ?>&status=<?php echo $categorylist_result['category_status']; ?>&start=<?php echo $start; ?>"><?php if($categorylist_result['category_status']=='1'){?><img src="cms-images/active.png" style="margin:0px 5px 0px 5px;" alt="Active" title="Active"/><?php }else{ ?><img src="cms-images/inactive.png" style="margin:0px 5px 0px 5px;" alt="Inactive" title="Inactive"/><?php } ?></a>&nbsp;
  <a href="edit-category.php?id=<?php echo $categorylist_result['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/edit.png" style="margin:0px 5px 0px 5px;" alt="Edit" title="Edit"/></a>&nbsp;
  <a href="?action=delete&id=<?php echo $categorylist_result['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/delete.png" style="margin:0px 5px 0px 5px;" alt="Delete" title="Delete"/></a>&nbsp;
  <a href="#" target="_blank"><img src="cms-images/view.png" style="margin:0px 5px 0px 5px;" alt="View" title="View"/></a>&nbsp;</td>
</tr>
 <?php 
   $rownum1=$start;
   $categorylist_sub = "SELECT id,category_name,category_root,category_status,category_featured_status  FROM  categories WHERE category_status!='-1' AND category_root=".$categorylist_result['id']; 
   $category_sub = $db->getRows($categorylist_sub);
   $no_row = sqlnumber($categorylist_sub);
   foreach($category_sub as  $category_sub_re){
   $rownum1++;
   $zibracolor1 = ($rownum1%2==0)?"alt-row":"";
  ?>
   <tr  class="<?php echo $zibracolor1; ?>">
  <td align="center" valign="middle"><input class="check-all" type="checkbox" /></td>
  <td><img src="cms-images/sub-category-1.png" style="margin:0px 10px 0px 30px;"  /><a href="#"><?php echo $category_sub_re['category_name']; ?></a></td>
  <td align="center" valign="middle"><form action=""  method="post" name='featured_form<?php echo $category_sub_re['id']; ?>'><input class="check-all" type="checkbox" onclick="document.featured_form<?php echo $category_sub_re['id']; ?>.submit();" name="featured_check"  id="featured_check" value="1" <?php if($category_sub_re['category_featured_status']=='1'){ ?> checked="checked"<?php } ?>/><input type="hidden" name="featured_id" id="featured_id" value="<?php echo $category_sub_re['id']; ?>"  /></form></td>
  <td align="center" valign="middle">
  <a href="?action=status&id=<?php echo $category_sub_re['id']; ?>&status=<?php echo $category_sub_re['category_status']; ?>&start=<?php echo $start; ?>"><?php if($category_sub_re['category_status']=='1'){?><img src="cms-images/active.png" style="margin:0px 5px 0px 5px;" alt="Active" title="Active"/><?php }else{ ?><img src="cms-images/inactive.png" style="margin:0px 5px 0px 5px;" alt="Inactive" title="Inactive"/><?php } ?></a>&nbsp;
  <a href="edit-category.php?id=<?php echo $category_sub_re['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/edit.png" style="margin:0px 5px 0px 5px;" alt="Edit" title="Edit"/></a>&nbsp;
  <a href="?action=delete&id=<?php echo $category_sub_re['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/delete.png" style="margin:0px 5px 0px 5px;" alt="Delete" title="Delete"/></a>&nbsp;
  <a href="#" target="_blank"><img src="cms-images/view.png" style="margin:0px 5px 0px 5px;" alt="View" title="View"/></a>&nbsp;</td>
</tr>
  <?php 
   $categorylist_sub_sub = "SELECT id,category_name,category_root,category_status,category_featured_status  FROM  categories WHERE category_status!='-1' AND category_root=".$category_sub_re['id']; 
   $category_sub_sub = $db->getRows($categorylist_sub_sub);
   $rownum2=$rownum1;
   foreach($category_sub_sub as  $category_sub_res){
   $rownum2++;
   $zibracolor2 = ($rownum2%2==0)?"alt-row":"";
   ?>
    <tr  class="<?php echo $zibracolor2; ?>">
  <td align="center" valign="middle"><input class="check-all" type="checkbox" /></td>
  <td><img src="cms-images/sub-category-2.png" style="margin:0px 10px 0px 60px;"><a href="#"><?php echo $category_sub_res['category_name']; ?></a></td>
  <td align="center" valign="middle"><form action=""  method="post" name='featured_form<?php echo $category_sub_res['id']; ?>'><input class="check-all" type="checkbox" onclick="document.featured_form<?php echo $category_sub_res['id']; ?>.submit();" name="featured_check"  id="featured_check" value="1" <?php if($category_sub_res['category_featured_status']=='1'){ ?> checked="checked"<?php } ?>/><input type="hidden" name="featured_id" id="featured_id" value="<?php echo $category_sub_res['id']; ?>"  /></form></td>
  <td align="center" valign="middle">
    <a href="?action=status&id=<?php echo $category_sub_res['id']; ?>&status=<?php echo $category_sub_res['category_status']; ?>&start=<?php echo $start; ?>"><?php if($category_sub_res['category_status']=='1'){?><img src="cms-images/active.png" style="margin:0px 5px 0px 5px;" alt="Active" title="Active"/><?php }else{ ?><img src="cms-images/inactive.png" style="margin:0px 5px 0px 5px;" alt="Inactive" title="Inactive"/><?php } ?></a>&nbsp;
  <a href="edit-category.php?id=<?php echo $category_sub_res['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/edit.png" style="margin:0px 5px 0px 5px;" alt="Edit" title="Edit"/></a>&nbsp;
  <a href="?action=delete&id=<?php echo $category_sub_res['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/delete.png" style="margin:0px 5px 0px 5px;" alt="Delete" title="Delete"/></a>&nbsp;
  <a href="#" target="_blank"><img src="cms-images/view.png" style="margin:0px 5px 0px 5px;" alt="View" title="View"/></a>&nbsp;</td>
</tr>
 <?php 
   $categorylist_sub_sub1 = "SELECT id,category_name,category_root,category_status,category_featured_status   FROM  categories WHERE category_status!='-1' AND category_root=".$category_sub_res['id']; 
   $category_sub_sub1 = $db->getRows($categorylist_sub_sub1);
   $rownum3=$rownum2;
   foreach($category_sub_sub1 as  $category_sub_res1){
   $rownum3++;
   $zibracolor3 = ($rownum3%2==0)?"alt-row":"";
   ?>
     <tr  class="<?php echo $zibracolor3; ?>">
  <td align="center" valign="middle"><input class="check-all" type="checkbox" /></td>
  <td><img src="cms-images/sub-category-2.png" style="margin:0px 10px 0px 90px;"><a href="#"><?php echo $category_sub_res1['category_name']; ?></a></td>
  <td align="center" valign="middle"><form action=""  method="post" name='featured_form<?php echo $category_sub_res1['id']; ?>'><input class="check-all" type="checkbox" onclick="document.featured_form<?php echo $category_sub_res1['id']; ?>.submit();" name="featured_check"  id="featured_check" value="1" <?php if($category_sub_res1['category_featured_status']=='1'){ ?> checked="checked"<?php } ?>/><input type="hidden" name="featured_id" id="featured_id" value="<?php echo $category_sub_res1['id']; ?>"  /></form></td>
  <td align="center" valign="middle">
   <a href="?action=status&id=<?php echo $category_sub_res1['id']; ?>&status=<?php echo $category_sub_res1['category_status']; ?>&start=<?php echo $start; ?>"><?php if($category_sub_res1['category_status']=='1'){?><img src="cms-images/active.png" style="margin:0px 5px 0px 5px;" alt="Active" title="Active"/><?php }else{ ?><img src="cms-images/inactive.png" style="margin:0px 5px 0px 5px;" alt="Inactive" title="Inactive"/><?php } ?></a>&nbsp;
  <a href="edit-category.php?id=<?php echo $category_sub_res1['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/edit.png" style="margin:0px 5px 0px 5px;" alt="Edit" title="Edit"/></a>&nbsp;
  <a href="?action=delete&id=<?php echo $category_sub_res1['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/delete.png" style="margin:0px 5px 0px 5px;" alt="Delete" title="Delete"/></a>&nbsp;
  <a href="#" target="_blank"><img src="cms-images/view.png" style="margin:0px 5px 0px 5px;" alt="View" title="View"/></a>&nbsp;</td>
</tr>
 <?php 
   }
  }
  }
 }
 }
?>








</table>
</div>
</div>
<div class="clear" ></div>
<div class="pagination clearfix" align="center">
<?php  if($q_limit>20){  paginateexte($start, $q_limit, $category_num, "categories.php?"); } ?>
<?php  ?>
</div>
<div class="clear"></div>
<div class="container-wrapper">
  <?php include 'includes/footer.php'; ?>
</div>
</div>
</body>
</html>