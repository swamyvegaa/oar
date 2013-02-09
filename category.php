<?php
include('common.php');
?>
<?php 
if(!empty($_GET['id'])){
$category_id=$_GET['id'];
}
$category_data="select * from categories where id='".$category_id."' and category_status=1";
$category_row=$db->getrow($category_data);
//print_r($category_row);
//exit;
$Meta_description=$category_row['category_meta_description'];
$Meta_keywords=$category_row['category_meta_keywords'];
$Meta_title=$category_row['category_meta_title'];
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
<?php include 'design/includes/category-page.php'; ?>
</div>                
</div>
     
<!--<?php include 'design/includes/twitter-tweets.php'; ?>-->
<?php include 'design/includes/footer.php'; ?>

</div>

</body>

</html>