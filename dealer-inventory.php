<!-- Should include this to load all bsic urls an d database classes -->
<?php 
include 'common.php';
?>
<!-- Dealer data -->
<?php
$dealer_name=$_GET['name'];
$dealer_id=$_GET['id'];
$dealer_data="select * from dealers where dealer_status=1 and id='".$dealer_id."'";// get the dealer data.
$dealer_row=$db->getrow($dealer_data);// fetching the dealer data
if(empty($dealer_row)){
    header("Location: ".$base_url."dealers.php");
}
//Meta data related data.
$Meta_description=$dealer_row['dealer_meta_description'];
$Meta_keywords=$dealer_row['dealer_meta_keywords'];
$Meta_title=$dealer_row['dealer_meta_title'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php echo $Meta_title;?></title>
<meta name="description" content="<?php if(isset($Meta_description)){echo $Meta_description;}?>">
<meta name="keywords" content="<?php if(isset($Meta_keywords)){echo $Meta_keywords;}?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="<?php echo $Meta_title;?>" />

<?php include 'design/includes/head.php'; ?>

</head>

<body class="fitVids">

<div class="container clearfix">

<?php include 'design/includes/header.php'; ?>
<?php include 'design/includes/main-menu.php'; ?>        

<div id="content" class="clearfix">
<div id="content-wrap" class="clearfix">
<?php include 'design/includes/dealer-inventory-page.php'; ?>
</div>                
</div>
     
<!--<?php include 'design/includes/twitter-tweets.php'; ?>-->
<?php include 'design/includes/footer.php'; ?>

</div>

</body>

</html>