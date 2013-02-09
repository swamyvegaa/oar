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
<title>iFortune</title>
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
<?php include 'design/includes/dealers-inner-page.php'; ?>
</div>                
</div>
     
<!--<?php include 'design/includes/twitter-tweets.php'; ?>-->
<?php include 'design/includes/footer.php'; ?>

</div>

</body>

</html>