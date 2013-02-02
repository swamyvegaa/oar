<?php
ob_start();
include '../common.php';
Checklogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On Antique Row : Dealers</title>
<?php include 'includes/head.php';
Checklogin(); 
include("includes/function_dealers.php");

 $dealerlist_n = "SELECT id FROM   dealers WHERE dealer_status!='-1' "; 
 $dealer_num = sqlnumber($dealerlist_n);
 
 $q_limit     = 20;
 if ( !isset($_REQUEST['start']) || $_REQUEST['start'] >=$dealer_num  || $_REQUEST['start']==""){
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

if(@$_REQUEST['dealer_id']!=''){


if($_REQUEST['dealer_check']=='1'){
$statusdealer='1';
}else{
$statusdealer='0';
}

Statusdealer($_REQUEST['dealer_id'],$start,$statusdealer);
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
<div class="dashboard-button clearfix"><a href="add-dealer.php?start=<?php echo @$start;?>"><img src="cms-images/add.png"  /><br/>Create New<br/>Dealer</a></div>
<div class="clear"></div>
<div class="cms-heading">Dealers</div>
<div class="clear"></div>
<div class="main-content">
<table>
<thead>
<tr>
<th width="50"><input class="check-all" type="checkbox" /></th>
<th width="500" align="left">Dealer Name</th>
<th width="100" align="center">Dealer Code</th>
<th width="100" align="center">Dealer Products</th>
<th width="100" align="center">Featured</th>
<th width="250" align="center">Action</th>
</tr>
</thead>

<?php 
$rownum=$start;

$dealer_list = "SELECT id,dealer_store_name,dealer_code,dealer_status,dealer_featured  FROM  dealers WHERE dealer_status!='-1'  LIMIT ".$start.", ".$q_limit.""; 
$dealer_re = $db->getRows($dealer_list);
 
 
if($dealer_num>0){
foreach( $dealer_re as $dealer_res){

$rownum++;
$zibracolor = ($rownum%2==0)?"":"alt-row";
			
?>


<tr  class="alt-row">
  <td align="center" valign="middle"><input class="check-all" type="checkbox" /></td>
  <td align="left"><img src="cms-images/dealer.png" style="margin-right:10px;"  /><a href="#"><?php echo $dealer_res['dealer_store_name']; ?></a></td>
  <td align="center"><?php echo $dealer_res['dealer_code']; ?></td>
  <td><a href="dealer-products.php?dealer_id=<?php echo $dealer_res['id']; ?>"><img src="cms-images/view-products.png" style="margin:0px 5px 0px 5px;" alt="View Products" title="View Products"/></a></td>
  <td align="center" valign="middle"><form action=""  method="post" name='dealer_form<?php echo $dealer_res['id']; ?>'><input class="check-all" type="checkbox" onclick="document.dealer_form<?php echo $dealer_res['id']; ?>.submit();" name="dealer_check"  id="dealer_check" value="1" <?php if($dealer_res['dealer_featured']=='1'){ ?> checked="checked"<?php } ?>/><input type="hidden" name="dealer_id" id="dealer_id" value="<?php echo $dealer_res['id']; ?>"  /></form></td>
  <td align="center" valign="middle">
   <a href="?action=status&id=<?php echo $dealer_res['id']; ?>&status=<?php echo $dealer_res['dealer_status']; ?>&start=<?php echo $start; ?>"><?php if($dealer_res['dealer_status']=='1'){?><img src="cms-images/active.png" style="margin:0px 5px 0px 5px;" alt="Active" title="Active"/><?php }else{ ?><img src="cms-images/inactive.png" style="margin:0px 5px 0px 5px;" alt="Inactive" title="Inactive"/><?php } ?></a>&nbsp;
  <a href="edit-dealer.php?action=edit&id=<?php echo $dealer_res['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/edit.png" style="margin:0px 5px 0px 5px;" alt="Edit" title="Edit"/></a>&nbsp;
  <a href="?action=delete&id=<?php echo $dealer_res['id']; ?>&start=<?php echo $start; ?>"><img src="cms-images/delete.png" style="margin:0px 5px 0px 5px;" alt="Delete" title="Delete"/></a>&nbsp;
  <a href="#" target="_blank"><img src="cms-images/view.png" style="margin:0px 5px 0px 5px;" alt="View" title="View"/></a>&nbsp;
  </td>
</tr>

<?php }}else{?>
<tr><td colspan="6">No Dealers</td></tr>
<?php }?>


</table>
</div>
</div>
<div class="clear" ></div>
<div class="pagination clearfix" align="center">
<?php  if($q_limit>20){  paginateexte($start, $q_limit, $dealer_num, "dealers.php?"); } ?>
<?php  ?>
</div>
<div class="clear"></div>
<div class="container-wrapper">
  <?php include 'includes/footer.php'; ?>
</div>
</div>
</body>
</html>