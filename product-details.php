<?php 
include 'common.php';
$product_id=$_GET['product_id'];
$products="select * from products where product_status=1 and id=".$product_id;
$product_data = $db->getRow($products);
$dealers="select * from dealers where id=".$product_data['product_dealer'];
$dealer_data=$db->getRow($dealers);
//print_r($dealer_data);
//exit;
if(!empty($product_data['product_meta_description'])) {
$Meta_description=$product_data['product_meta_description']; 
}
else{ 
$Meta_description=substr($product_data['product_description'], 0, 300);
}
// End of Meta description

// Meta Keywords
if(!empty($product_data['product_meta_keywords'])) {
$Meta_keywords=$product_data['product_meta_keywords']; 
}
else{ 
$Meta_keywords=substr($product_data['product_title'], 0, 300);
}
// End of Meta Keywords

// Meta Title
if(!empty($product_data['product_meta_title'])) {
$Meta_title=$product_data['product_meta_title']; 
}
else{ 
$Meta_title=substr($product_data['product_title'], 0, 300);
}
// End of Meta Title
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>

<title><?php echo $Meta_description;?></title>

<meta name="description" content="<?php echo $Meta_description;?>">
<meta name="keywords" content="<?php echo $Meta_description;?>">
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
<?php include 'design/includes/product-details-inner-page.php'; ?>
</div>                
</div>
     
<!--<?php include 'design/includes/twitter-tweets.php'; ?>-->
<?php include 'design/includes/footer.php'; ?>

</div>

</body>

</html>