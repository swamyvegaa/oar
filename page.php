<?php 
include 'common.php';
$page_alias_name=$_GET['name'];
$pages="select * from pages where page_status=1 and page_alias='".$page_alias_name."'" ;
$page_data=$db->getrow($pages);
//Meta tags data
if(!empty($page_data['page_meta_title'])){
$Meta_title=$page_data['page_meta_title'];
}
else{
$Meta_title=$page_data['page_title'];
}
if(!empty($page_data['page_meta_description'])){
$Meta_description=$page_data['page_meta_description'];
}
else{
$Meta_description=$page_data['page_title'];
}
if(!empty($page_data['page_meta_keywords'])){
$Meta_keywords=$page_data['page_meta_keywords'];
}
else{
$Meta_keywords=$page_data['page_title'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<title><?php echo $Meta_title;?></title>
<meta name="description" content="<?php echo $Meta_description;?>">
<meta name="keywords" content="<?php echo $Meta_keywords;?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Onantiquerow" />

<?php include 'design/includes/head.php'; ?>

</head>

<body class="fitVids">

<div class="container clearfix">

<?php include 'design/includes/header.php'; ?>
<?php include 'design/includes/main-menu.php'; ?>        

<div id="content" class="clearfix">
<div id="content-wrap" class="clearfix">
<div class="bread-crumb"><a href="<?php echo $base_url; ?>">Home</a><img src="<?php echo $base_url;?>design/images/icons/bread-crumb-icon.png" /><a href="<?php echo $base_url;?><?php $page_data['page_alias']?>"><?php echo $page_data['page_name'];?></a></div>
<div class="clear"></div>
<aside id="category-page-leftside">
<h4>Store</h4>
<div class="left_menu_main">
<div id="treeMenu">
            <?php
            $categorylist = "SELECT id,category_name,category_root  FROM  categories WHERE category_status=1 AND category_root=0";
            $categorylistre = $db->getRows($categorylist);
            $category_num = sqlnumber($categorylist);
            if ($category_num > 0) {
                echo "<ul>";
                foreach ($categorylistre as $categorylist_result) {
                    ?>
                    <li><a href="<?php echo $base_url; ?>category/<?php echo url_rewite($categorylist_result['category_name']); ?>/<?php echo $categorylist_result['id']; ?>/1" class="parent"><?php echo $categorylist_result['category_name']; ?></a><span></span><div>
                            <?php
                            $categorylist_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_status=1 AND category_root=" . $categorylist_result['id'];
                            $category_sub = $db->getRows($categorylist_sub);
                            $category_num2 = sqlnumber($categorylist_sub);

                            if ($category_num2 > 0) {
                                echo "<ul>";
                                foreach ($category_sub as $category_sub_re) {
                                    ?>

                                    <li><span></span><a href="<?php echo $base_url; ?>category/<?php echo url_rewite($categorylist_result['category_name']); ?>/<?php echo $category_sub_re['id']; ?>/1" class="parent"><?php echo $category_sub_re['category_name']; ?></a>
                                        <div>
                <?php
                $categorylist_sub_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_status=1 AND category_root=" . $category_sub_re['id'];
                $category_sub_sub = $db->getRows($categorylist_sub_sub);
                $category_num3 = sqlnumber($categorylist_sub_sub);

                if ($category_num3 > 0) {
                    echo "<ul>";
                    foreach ($category_sub_sub as $category_sub_res) {
                        ?>
                                                    <li><span></span><a href="<?php echo $base_url; ?>category/<?php echo url_rewite($categorylist_result['category_name']); ?>/<?php echo $category_sub_res['id']; ?>/1" class="parent"><?php echo $category_sub_res['category_name']; ?></a>
                                                        <div>
                                                    <?php
                                                    $categorylist_sub_sub1 = "SELECT id,category_name,category_root  FROM  categories WHERE category_status=1 AND category_root=" . $category_sub_res['id'];
                                                    $category_sub_sub1 = $db->getRows($categorylist_sub_sub1);
                                                    $category_num4 = sqlnumber($categorylist_sub_sub1);

                                                    if ($category_num4 > 0) {
                                                        echo "<ul>" . $category_num4;
                                                        foreach ($category_sub_sub1 as $category_sub_res1) {
                                                            ?>
                                                                    <span></span><a href="<?php echo $base_url; ?>category/<?php echo url_rewite($categorylist_result['category_name']); ?>/<?php echo $category_sub_res1['id']; ?>/1"><?php echo $category_sub_res1['category_name']; ?></a></li>

                                                        <?php
                                                        }
                                                        echo "</ul>";
                                                    }
                                                }
                                                echo "</div></li></ul>";
                                            }
                                        }
                                        echo "</div></li></ul>";
                                    }
                                }
                                echo "</div></li></ul>";
                            }
                            ?>

                        </div>

</div>


<div class="clear"></div>
<div class="category-leftside-form">
    		<form>
    			<input type="text" name="" id="product-search" onblur="if(this.value=='')this.value='Product Search'" onfocus="if(this.value=='Product Search')this.value=''" value="Product Search" />
        		<input type="button" name="" id="" value="GO" />
        		<input type="text" name="" id="Dealer-search" onblur="if(this.value=='')this.value='Dealer Search'" onfocus="if(this.value=='Dealer Search')this.value=''" value="Dealer Search" />
        		<input type="button" name="" id="" value="GO" />
    		</form>
            <div class="clear"></div>
</div>
<div class="full-width-brdr"></div>
<div class="page-link-buttons">
<h4 class="clearleft">News Letter</h4>
</div>
<div class="full-width-brdr"></div>

<img src="<?php echo $base_url;?>design/images/news-letter-form-logo.jpg" class="news-letter-side-logo" />
<form class="news-letter-form">
<input type="text" id="" name="text-box" onblur="if(this.value=='')this.value='Name:'" onfocus="if(this.value=='Name:')this.value=''" value="Name:" />
<input type="text" id="" name="text-box" onblur="if(this.value=='')this.value='Email:'" onfocus="if(this.value=='Email:')this.value=''" value="Email:" />
<input type="button" value="Subscribe" id="" />
</form>

</aside>
<section id="category-page-rightside">
<p><img src="<?php echo $base_url; ?><?php echo $page_data['page_banner'];?>" style="width:750px;height:250px;" /></p>

<h1><?php echo $page_data['page_title'];?></h1>
<div class="full-width-brdr"></div>
<?php echo $page_data['page_content'];?>

<div>
<?php
if($page_alias_name=='contact'){
include 'design/includes/contact-form.php';
}
?>
</div>

</section>
</div>                
</div>
<!--<?php include 'design/includes/twitter-tweets.php'; ?>-->
<?php include 'design/includes/footer.php'; ?>

</div>

</body>

</html>