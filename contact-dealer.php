<!-- Should include this to load all bsic urls an d database classes -->
<?php 
include 'common.php';
?>
<!-- Dealer data -->
<?php 
$dealers = "select id,dealer_code,dealer_name,dealer_thumbnail,dealer_store_name from dealers where dealer_status=1 order by dealer_order asc"; 
 $dealers_data = $db->getRows($dealers);
 $dealers_rows=$db->numRows($dealers_data);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<title>Contact-Dealer</title>
<meta name="description" content="ifortune">
<meta name="keywords" content="ifortune">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="iFortune" />

<?php include 'design/includes/head.php'; ?>

</head>

<body class="fitVids">

<div class="container clearfix">

<?php include 'design/includes/header.php'; ?>
<?php include 'design/includes/main-menu.php'; ?>        

<div id="content" class="clearfix">
<div id="content-wrap" class="clearfix">
<div class="featured-dealers-box" align="center" style="margin-left:5px; margin-right:5px;">
<div>
<table>
<tr>
<td>
<div>Name:<input type="text" value="" size="50" name="customer_name" id="customer_name"><br /></div>
<div>Company:<input type="text" value="" size="50" name="customer_name" id="customer_company"><br /></div>
<div>Email:<input type="text" value="" size="50" name="customer_name" id="customer_email"><br /></div>
</td>
<td></td>
</tr>

</table>
</div>

</div>
</div>                
</div>
     
<!--<?php include 'design/includes/twitter-tweets.php'; ?>-->
<?php include 'design/includes/footer.php'; ?>

</div>

</body>

</html>