<!--category Page Start -->
<div class="bread-crumb"><a href="index.php">Home</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="category.php?name=<?php echo $category_row['category_name'];?>"><?php echo $category_row['category_name'];?></a></div>
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
<h4><?php echo $category_row['category_name'];?></h4>
<div class="full-width-brdr"></div>
<?php
if(!empty($category_row['category_description_top'])){
?>
<p><?php echo $category_row['category_description_top'];?></p><br><br>
<?php
}
?>
<div class="category-list-imgs">
<!-- Category products -->
<?php
$page_id=1;
if(!empty($_GET['page'])){
$page_id=$_GET['page'];//checks for page id.
}
$limit=10; // results per page.
$start=($page_id-1)*$limit; // Setting the starting limit value.
$last=$page_id*$limit; // Setting the last limit value.
//Query to get all products list under perticular category.
$products_data="select * from products where product_primary_category=".$category_row['id']." or product_secodary_category= ".$category_row['id']." and product_available=1 limit ".$start.",".$last;
$products_rows=$db->getrows($products_data);// Fetching the results.
?>
<!-- Category products html generating -->
<!-- Products listing query -->
<?php 
$products_count="select * from products where product_primary_category=".$category_row['id']." and product_available=1";
$products_rows_count=sqlnumber($products_count);
$page_count=round($products_rows_count/$limit);
$show=10;
?>
<!-- Paging for products -->
<?php 
$i=1;
$results=count($products_rows); //counting the total number of results
if($results!=0){
foreach($products_rows as $row => $product_value){
?>
<ul>
<li><a href="#" title=""><img src="<?php echo $product_value['product_primary_image'];?>" /></a>
<h3><?php echo $product_value['product_name'];?></h3>
<span class="price">$<?php echo $product_value['product_sale_price'];?></span>
</li>
<?php
if($i!=$results){//If $i value not equal to $results appendinding with </ul>.
if($i==3)
{
echo '</ul>
<div class="full-width-brdr"></div>';
$i=1;
}
else{
$i=$i+1;
}
}
else{
echo '</ul>';
}
}
?>
<!-- End of Category Products Listing -->
</div>
<!-- Pagination for Products list -->

<div class="page-numeric">
<a href="#"><<</a>
<a href="#">1</a>
<a href="#">2</a>
<a href="#">3</a>
<a href="#">4</a>
<a href="#">5</a>
<a href="#">6</a>
<a href="#">7</a>
<a href="#">8</a>
<a href="#">9</a>
<a href="#">10</a>
<a href="#">....</a>
<a href="#">>></a>
</div>
<?php } else{
echo "<p>No products to display.</p>";
}?>
<!-- End of Products paging -->
<p><?php echo $category_row['category_description_bottom'];?></p><br><br>
<p><?php echo $category_row['category_ad'];?></p><br><br>
</section>
<!--category Page End -->