<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<?php
ob_start();
include 'common.php';
include 'includes/head.php';
?>
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

<?php
$featuredDealers = "SELECT dealer_thumbnail,dealer_store_name FROM  `dealers` WHERE `dealer_featured` = 1 ORDER BY `id` desc LIMIT 0, 4"; 
 $featuredDealersData = $db->getRows($featuredDealers);
 //print_r($featuredDealersData);
 //echo $featuredDealersData[0]
 //$category_sub_re['category_name']
 echo "<br />";
 $featuredProducts = "SELECT product_name,product_primary_image FROM  `products` WHERE `product_featured` = 1 ORDER BY `id` desc LIMIT 0, 4"; 
 $featuredProductsData = $db->getRows($featuredProducts);
 //print_r($featuredProductsData);
 echo "<br />";
 $featuredCategories = "SELECT category_thumbnail,category_name FROM  `categories` WHERE `category_featured_status` = 1 ORDER BY `id` desc LIMIT 0, 4"; 
 $featuredCategoriesData = $db->getRows($featuredCategories);
 //print_r($featuredCategoriesData[0]);
 //echo "<br /> arrr";
 $newArrProducts = "SELECT product_name,product_primary_image FROM  `products` WHERE `product_new_arrival` = 1 ORDER BY `id` desc LIMIT 0, 4"; 
 $newArrProductsData = $db->getRows($newArrProducts);
 //print_r($newArrProductsData);
 echo "<br /> sale";
 $saleProducts = "SELECT product_name,product_primary_image FROM  `products` WHERE `product_on_sale` = 1 ORDER BY `id` desc LIMIT 0, 12"; 
 $saleProductsData = $db->getRows($saleProducts);
 //print_r($saleProductsData);
 
?>

<div id="content" class="clearfix">
<div id="content-wrap" class="clearfix">
<?php include 'design/includes/home-page-content.php'; ?>
</div>                
</div>
     
<!--<?php include 'design/includes/twitter-tweets.php'; ?>-->
<?php include 'design/includes/footer.php'; ?>

</div>

</body>

</html>