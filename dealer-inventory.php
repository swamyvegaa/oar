
<?php 
include 'common.php';
$dealer_data="select * from dealers where dealer_code='".$_GET['code']."'";// get the dealer data.
$dealer_row=$db->getrow($dealer_data);// fetching the dealer data
//print_r($dealer_row);
//exit;
$Meta_description=$dealer_row['dealer_meta_description'];// Meta description
$Meta_keywords=$dealer_row['dealer_meta_keywords'];// Meta keywords
$Meta_title=$dealer_row['dealer_meta_title']; // Meta title
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<title><?php echo $Meta_title;?></title>
<meta name="description" content="<?php if(isset($Meta_description)){echo $Meta_description;}?>">
<meta name="keywords" content="<?php if(isset($Meta_keywords)){echo $Meta_keywords;}?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="<?php if(isset($Meta_author)){echo $Meta_author;}?>" />

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