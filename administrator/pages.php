<?php
ob_start();
include '../common.php';
Checklogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On Antique Row : Pages</title>
<?php 
include 'includes/head.php';
Checklogin(); 
include("includes/fckeditor/fckeditor.php");
include("includes/function_page.php");


$pagelist=Pagelist();
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
<div class="dashboard-button clearfix"><a href="add-page.php"><img src="cms-images/add.png"  /><br/>Create New<br/>Page</a></div>
<div class="clear"></div>
<div class="cms-heading">Pages</div>
<div class="clear"></div>
<div class="main-content">
<table>
<thead>
<tr>
<th width="50"><input class="check-all" type="checkbox" /></th>
<th width="500" align="left">Page Name</th>
<th width="450">Action</th>
</tr>
</thead>
<?php 
$rownum=$start;
if($no_row>0){
foreach( $pagelist as $pagelist_res){

$rownum++;
$zibracolor = ($rownum%2==0)?"":"alt-row";
			
?>
<tr  class="<?php echo $zibracolor; ?>">
  <td align="center" valign="middle"><input class="check-all" type="checkbox" /></td>
  <td><img src="cms-images/page.png" style="margin-right:10px;"  /><a href="#"><?php echo $pagelist_res['page_name']; ?></a></td>
  <td align="center" valign="middle">
  <a href="?action=status&id=<?php echo $pagelist_res['id']; ?>&status=<?php echo $pagelist_res['page_status']; ?>&start=<?php echo $start; ?>"><?php if($pagelist_res['page_status']=='1'){?><img src="cms-images/active.png" style="margin:0px 5px 0px 5px;" alt="Active" title="Active"/><?php }else{ ?><img src="cms-images/inactive.png" style="margin:0px 5px 0px 5px;" alt="Inactive" title="Inactive"/><?php } ?></a>&nbsp;
  <a href="edit-page.php?action=edit&id=<?php echo $pagelist_res['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/edit.png" style="margin:0px 5px 0px 5px;" alt="Edit" title="Edit"/></a>&nbsp;
  <a href="?action=delete&id=<?php echo $pagelist_res['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/delete.png" style="margin:0px 5px 0px 5px;" alt="Delete" title="Delete"/></a>&nbsp;
  <a href="#" target="_blank"><img src="cms-images/view.png" style="margin:0px 5px 0px 5px;" alt="View" title="View"/></a>&nbsp;
  </td>
</tr>
<?php } }else{ ?>
<tr  >
  <td align="center" valign="middle" colspan="3">No Pages </td>
  </tr>
<?php }?>


</table>
</div>
</div>
<div class="clear" ></div>
<div class="pagination clearfix"  align="center">

<?php if($q_limit>100){ paginateexte($start, $q_limit, $no_row, "pages.php?"); ?>
<?php } ?>

</div>
<div class="clear"></div>
<div class="container-wrapper">
  <?php include 'includes/footer.php'; ?>
</div>
</div>
</body>
</html>