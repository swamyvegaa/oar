<?php ob_start();
include '../common.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On Antique Row : Login</title>
<?php include 'includes/head.php'; ?>
<?php
$vlc= new validator();
if(isset($_REQUEST['submit']) && $_REQUEST['submit']=='Login'){

if(isset($_REQUEST['username'])){
 $sql="SELECT * FROM  dealers  WHERE dealer_login_email = '" .$_REQUEST['username']."' and dealer_status='1' ";
 $userdetail = $db->getRow($sql);
	}
	
	
if(@$_REQUEST['username']==''){
@$error['username']="<br><span class='error'>Enter user email</span>";
}else if(!$vlc->is_email(@$_REQUEST['username'])){
  @$error['username'] = " <br><span class='error'>Enter valid email id</span>";
}else if($userdetail['dealer_login_email']!=@$_REQUEST['username']){
@$error['username'] = "<br><span class='error'>Invalied username</span>";
}
if(@$_REQUEST['password']==''){
@$error['password']="<br><span class='error'>Enter Password</span> ";
}

if(count($error)==0){
Dealerlogin($_REQUEST['username'],$_REQUEST['password']);
}
}

?>
</head>

<body>
<div class="container clearfix">
<div class="container-wrapper">
<div class="login" align="center">

<form action="" method="post">
					<table cellpadding="0" cellspacing="10px" border="0" align="center">
                    <tr><td colspan="2" align="center"><img src="cms-images/onantiquerow-cms-login.jpg" /></td></tr>
                    <tr>
                    	<td>User Name:</td>
                    	<td><input type="text" id="username" name="username" value="<?php echo @$_REQUEST['username'];?>" />
						<?php echo @$error['username'];?></td>
                    </tr>
                    <tr><td colspan="2" height="10px"></td></tr>
                    <tr>
                    	<td>Password:</td>
                    	<td><input type="password" id="password" name="password" /><?php echo @$error['password'];?></td>
                    </tr>
                    <tr><td colspan="2" height="10px"></td></tr>
                    <tr><td colspan="2" align="center"><input type="submit"  class="grey-button" value="Login" name="submit" id="submit"/></td></tr>
                    </table>	
</form>
</div>
<?php include 'includes/footer.php';?>
</div>
</div>
</body>
</html>