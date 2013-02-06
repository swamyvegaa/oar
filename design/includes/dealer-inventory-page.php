
<!--Dealer inventory Page Start -->
<?php
$page_id=1;
$start_count = 1;
if(!empty($_GET['page'])){//Check wether page is empty

if($_GET['page']<=0){//Checking the page id wether 0 or less than zero.
$page_id=1; // Then assigning the page id value is equal to 1
}
else{
$page_id=$_GET['page']; //If not getting the the page_id value.
}
}
$limit=10; // Results per page.
$start=($page_id-1)*$limit; //Setting the starting limit.
$last=$page_id*$limit; //Setting the ending limit.
$products_data="select * from products where product_dealer=".$dealer_row['id']." and product_available=1 limit ".$start.",".$last; //Getting the products data based on dealer id.
$products_rows=$db->getrows($products_data); // Fetching the results.
//print_r($dealer_row['id']);
//exit;
?>
<div class="bread-crumb"><a href="index.php">Home</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="dealers.php">Dealers</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="dealer-inventory.php?name=<?php echo $dealer_row['dealer_name'];?>&code=<?php echo $dealer_row['dealer_code'];?>"><?php echo $dealer_row['dealer_store_name'];?></a></div>
<div class="clear"></div>
<aside id="category-page-leftside">
<address>
<h3 style="font-size:17px; margin:0px; line-height:24px;"><?php echo $dealer_row['dealer_store_name'];?></h3>
<?php if(!empty($dealer_row['dealer_address1'])) echo $dealer_row['dealer_address1']."<br/>";?>
<?php if(!empty($dealer_row['dealer_address2'])) echo $dealer_row['dealer_address2']."<br/>";?>
<?php  if(!empty($dealer_row['dealer_address3'])) echo $dealer_row['dealer_address3']."<br/>";?>
<?php  if(!empty($dealer_row['dealer_city'])) echo $dealer_row['dealer_city']."<br/>";?>
<?php  if(!empty($dealer_row['dealer_state'])) echo $dealer_row['dealer_state']."<br/>";?> 
<?php  if(!empty($dealer_row['dealer_zip_code'])) echo $dealer_row['dealer_zip_code']."<br/>";?>
<?php  if(!empty($dealer_row['dealer_country'])) echo $dealer_row['dealer_country']."<br/><br/>";?>


<?php  if(!empty($dealer_row['dealer_phone'])) echo "Phone: ".$dealer_row['dealer_phone']."<br/>";?>
<?php  if(!empty($dealer_row['dealer_fax'])) echo "Fax: ".$dealer_row['dealer_fax']."<br/>";?>
<?php  if(!empty($dealer_row['dealer_toll_free'])) echo "Toll-Free: ".$dealer_row['dealer_toll_free']."<br/>";?>
<?php  if(!empty($dealer_row['dealer_email'])) echo "E-Mail: <br/>".$dealer_row['dealer_email']."<br/>";?>
<?php  if(!empty($dealer_row['dealer_website'])) echo "Website: <br/><a target='_blank' href='".$dealer_row['dealer_website']."'>".$dealer_row['dealer_website']."</a><br/>";?>



</address>
<h4>Store</h4>
<div class="full-width-brdr"></div>
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
   <li><span></span><a href="category.php?name=<?php echo $category_sub_res1['category_name']; ?>"><?php echo $category_sub_res1['category_name']; ?></a></li>
   
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

<p><img src="<?php echo $dealer_row['dealer_banner'];?>" width="740px" height="250px;"  /></p><br/>
<?php if(!empty($dealer_row['dealer_description_top'])){?>
<p><?php echo $dealer_row['dealer_description_top'];?></p><br><br>
<?php
}
?>
<h4>Products</h4>
<div class="full-width-brdr"></div>
<div class="category-list-imgs">
<ul>
<?php 
if(!empty($products_rows)){
foreach($products_rows as $row => $product_value){
?>
<li><a href="product-details.php?product_id=<?php echo $product_value['id'];?>" title=""><img src="<?php echo $product_value['product_primary_image'];?>" />
<h3><?php echo $product_value['product_name'];?></h3></a>
<span class="price">$<?php echo $product_value['product_sale_price'];?></span>
<?php 
if($product_value['product_on_hold']==1){
echo "<div style='text-align:center; font-weight:bold;'>On Hold</div>";
}
else if($product_value['product_on_sale']==1){
echo "<div style='text-align:center; font-weight:bold;'>Sale</div>";
}
else if($product_value['product_sold']==1){
echo "<div style='text-align:center; font-weight:bold;'>Sold</div>";
}
else if($product_value['product_new_arrival']==1){
echo "<div style='text-align:center; font-weight:bold;'>New Arrivals</div>";
}
else if($product_value['product_coming_soon']==1){
echo "<div style='text-align:center; font-weight:bold;'>Coming Soon</div>";
}
?>
</li>
<?php
}

?>
</ul>
</div>
<!-- Products listing query -->
<?php 
$products_count="select * from products where product_dealer=".$dealer_row['id']." and product_available=1";
$products_rows_count=sqlnumber($products_count);
$page_count=ceil($products_rows_count/$limit);
$show=10;
?>
<!-- Paging for products -->
<div class="page-numeric">
<?php

   
if($page_id <=1)
   {
    echo "<span id='page_links' style='font-weight:bold;'><<</span>";
   }
   else
   {
    $j = $page_id - 1;
    ?>
	<a href="dealer-inventory.php?name=<?php echo $dealer_row['dealer_name'];?>&code=<?php echo $dealer_row['dealer_code'];?>&page=<?php echo $j ?>"><<</a>
	
	<?php
	if($page_id > $limit)
   {
   echo "<span id='page_links' style='font-weight:bold;'>...</span>";
   }
   }
   $start_count=$page_id-$limit;
   if($start_count<0)
   {
	for($i=1; $i <= $page_count; $i++)
   {
    if($i<>$page_id)
    {
	?>
     <a href="dealer-inventory.php?name=<?php echo $dealer_row['dealer_name'];?>&code=<?php echo $dealer_row['dealer_code'];?>&page=<?php echo $i ?>"><?php echo $i ?></a>
    <?php
	}
    else
    {
     echo "<span id='page_links' style='font-weight:bold;'>$i</span>";
    }

   }
   }
   else{
   for($i=$start_count; $i <= $page_count; $i++)
   {
    if($i<>$page_id)
    {
	?>
     <a href="dealer-inventory.php?name=<?php echo $dealer_row['dealer_name'];?>&code=<?php echo $dealer_row['dealer_code'];?>&page=<?php echo $i ?>"><?php echo $i ?></a>
    <?php
	}
    else
    {
     echo "<span id='page_links' style='font-weight:bold;'>$i</span>";
    }

   }
   }
   if($page_id == $page_count )
   {
    echo "<span id='page_links' style='font-weight:bold;'>>></span>";
   }
   else
   {
    $j = $page_id + 1;
	if($page_count > $page_id)
   {
   echo "<span id='page_links' style='font-weight:bold;'>...</span>";
   }
	?>
	<a href="dealer-inventory.php?name=<?php echo $dealer_row['dealer_name'];?>&code=<?php echo $dealer_row['dealer_code'];?>&page=<?php echo $j ?>">>></a>
	<?php
   }
   }
else{
echo "<p>No products to display.</p>";
}
?>

</div>
<!-- End Paging for products -->
<p><?php echo $dealer_row['dealer_description_bottom'];?></p><br><br>
<p><?php echo $dealer_row['dealer_ad'];?></p><br><br>

<!--
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
</div>-->
</section>
<!--category Page End -->