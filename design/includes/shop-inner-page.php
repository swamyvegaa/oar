<!--Store Page Start -->
<div class="bread-crumb"><a href="index.php">Home</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="shop.php">Shop</a></div>
<div class="clear"></div>
<aside id="category-page-leftside">
<h4>Store</h4>
<div class="left_menu_main">
<div id="treeMenu">
<?php
$categorylist = "SELECT id,category_name,category_root  FROM  categories WHERE category_status!='-1' AND category_root=0"; 
 $categorylistre = $db->getRows($categorylist);
 $category_num = sqlnumber($categorylist);
 if( $category_num>0){
 echo "<ul>";
 foreach($categorylistre as  $categorylist_result){?>
  <li><a href="category.php?name=<?php echo $categorylist_result['category_name']; ?>" class="parent"><?php echo $categorylist_result['category_name']; ?></a><span></span><div>
  <?php 
   $categorylist_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$categorylist_result['id']; 
   $category_sub = $db->getRows($categorylist_sub);
   $category_num2 = sqlnumber($categorylist_sub);
   
	if($category_num2>0){
 echo "<ul>";  
  foreach($category_sub as  $category_sub_re){?>
  
  <li><span></span><a href="category.php?name=<?php echo $category_sub_re['category_name']; ?>" class="parent"><?php echo $category_sub_re['category_name']; ?></a>
   	<div>
   <?php 
   $categorylist_sub_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$category_sub_re['id']; 
   $category_sub_sub = $db->getRows($categorylist_sub_sub);
 $category_num3 = sqlnumber($categorylist_sub_sub);
   
	if($category_num3>0) {
   echo "<ul>";
  foreach($category_sub_sub as  $category_sub_res){?>
   <li><span></span><a href="category.php?name=<?php echo $category_sub_res['category_name']; ?>" class="parent"><?php echo $category_sub_res['category_name']; ?></a>
   	<div>
	  <?php 
   $categorylist_sub_sub1 = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$category_sub_res['id']; 
   $category_sub_sub1 = $db->getRows($categorylist_sub_sub1);
 $category_num4 = sqlnumber($categorylist_sub_sub1);
   
	if($category_num4>0){
   echo "<ul>".$category_num4;
  foreach($category_sub_sub1 as  $category_sub_res1){?>
   <span></span><a href="category.php?name=<?php echo $category_sub_res1['category_name']; ?>"><?php echo $category_sub_res1['category_name']; ?></a></li>
   
  <?php }
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

<img src="design/images/news-letter-form-logo.jpg" class="news-letter-side-logo" />
<form class="news-letter-form">
<input type="text" id="" name="text-box" onblur="if(this.value=='')this.value='Name:'" onfocus="if(this.value=='Name:')this.value=''" value="Name:" />
<input type="text" id="" name="text-box" onblur="if(this.value=='')this.value='Email:'" onfocus="if(this.value=='Email:')this.value=''" value="Email:" />
<input type="button" value="Subscribe" id="" />
</form>

</aside>
<section id="category-page-rightside">
<h4>Shop</h4>
<div class="full-width-brdr"></div>

<div class="shop-collection">
<div class="featured-dealers-box">

<?php
$categorylist = "SELECT id,category_name,category_root,category_thumbnail  FROM  categories WHERE category_status=1 AND category_root=0"; 
 $categorylistre = $db->getRows($categorylist);
 $category_num = sqlnumber($categorylist);
 if( $category_num>0){
 echo "<ul>";   
 foreach($categorylistre as  $categorylist_result){?>
  <li><a href="category.php?name=<?php echo $categorylist_result['category_name']; ?>" class="parent"><img src="<?php if(!empty($categorylist_result['category_thumbnail']))echo $categorylist_result['category_thumbnail']; else echo"images/category/no-category-image.jpg"; ?>" /><br/><?php echo $categorylist_result['category_name']; ?></a></li>
  <?php 
   $categorylist_sub = "SELECT id,category_name,category_root,category_thumbnail  FROM  categories WHERE category_status=1 AND category_root=".$categorylist_result['id']; 
   $category_sub = $db->getRows($categorylist_sub);
   $category_num2 = sqlnumber($categorylist_sub);
   
	if($category_num2>0){
  foreach($category_sub as  $category_sub_re){?>
  
  <li><a href="category.php?name=<?php echo $category_sub_re['category_name']; ?>" class="parent"><img src="<?php if(!empty($categorylist_result['category_thumbnail']))echo $categorylist_result['category_thumbnail']; else echo"images/category/no-category-image.jpg"; ?>" /><br/><?php echo $category_sub_re['category_name']; ?></a></li>
   <?php 
   $categorylist_sub_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_status=1 AND category_root=".$category_sub_re['id']; 
   $category_sub_sub = $db->getRows($categorylist_sub_sub);
 $category_num3 = sqlnumber($categorylist_sub_sub);
   
	if($category_num3>0) {
  foreach($category_sub_sub as  $category_sub_res){?>
   <li><a href="category.php?name=<?php echo $category_sub_res['category_name']; ?>" class="parent"><img src="<?php if(!empty($categorylist_result['category_thumbnail']))echo $categorylist_result['category_thumbnail']; else echo"images/category/no-category-image.jpg"; ?>" /><br/><?php echo $category_sub_res['category_name']; ?></a></li>
	  <?php 
   $categorylist_sub_sub1 = "SELECT id,category_name,category_root  FROM  categories WHERE category_status=1 AND category_root=".$category_sub_res['id']; 
   $category_sub_sub1 = $db->getRows($categorylist_sub_sub1);
 $category_num4 = sqlnumber($categorylist_sub_sub1);
   
	if($category_num4>0){
  foreach($category_sub_sub1 as  $category_sub_res1){?>
  <a href="category.php?name=<?php echo $category_sub_res1['category_name']; ?>"><img src="<?php if(!empty($categorylist_result['category_thumbnail']))echo $categorylist_result['category_thumbnail']; else echo"images/category/no-category-image.jpg"; ?>" /><br/><?php echo $category_sub_res1['category_name']; ?></a></li>
   
  <?php }
  }
 
  }
  
  }
  
  }
  
  }
 
  }
  echo "</ul>";
}
?>



<!--
<ul>
<li><a href="dealers.php" title=""><img src="design/images/fea-dealers-img-225-1.jpg" /></a>
<h3><a href="dealers.php">Antiques of River Oaks Antiques of River Oaks Antiques of River Oaks12</a></h3>
</li>
<li><a href="dealers.php" title=""><img src="design/images/fea-dealers-img-225-2.jpg" /></a>
<h3><a href="dealers.php">Antiques of River Oaks</a></h3>
</li>
<li><a href="dealers.php" title=""><img src="design/images/fea-dealers-img-225-3.jpg" /></a>
<h3><a href="dealers.php">Antiques of River Oaks</a></h3>
</li>
<li><a href="dealers.php" title=""><img src="design/images/fea-dealers-img-225-4.jpg" /></a>
<h3><a href="dealers.php">Antiques of River Oaks</a></h3>
</li>
<li><a href="dealers.php" title=""><img src="design/images/fea-dealers-img-225-4.jpg" /></a>
<h3><a href="dealers.php">Antiques of River Oaks</a></h3>
</li>
<li><a href="dealers.php" title=""><img src="design/images/fea-dealers-img-225-4.jpg" /></a>
<h3><a href="dealers.php">Antiques of River Oaks</a></h3>
</li>
</ul>
-->



</div>
</div>

<div class="full-width-brdr"></div>


</section>
<!--Store Page End -->