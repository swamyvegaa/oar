
<!--Dealer inventory Page Start -->
<?php
$dealer_data="select * from dealers where dealer_code='".$_GET['name']."'";// get the dealer data.
$dealer_row=$db->getrow($dealer_data);// fetching the dealer data
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
?>
<div class="bread-crumb"><a href="index.php">Home</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="dealers.php">Dealers</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="dealer-inventory.php?name=<?php echo $dealer_row['dealer_name'];?>"><?php echo $dealer_row['dealer_store_name'];?></a></div>
<div class="clear"></div>
<aside id="category-page-leftside">
<address>
<h3 style="font-size:17px; margin:0px; line-height:24px;"><?php echo $dealer_row['dealer_store_name'];?></h3>
<?php echo $dealer_row['dealer_address1'];?><br/>
<?php echo $dealer_row['dealer_address2'];?><br/>
<?php echo $dealer_row['dealer_address3'];?><br/>
<?php echo $dealer_row['dealer_city'];?>, <?php echo $dealer_row['dealer_state'];?>, <?php echo $dealer_row['dealer_zip_code'];?><br/>
<?php echo $dealer_row['dealer_country'];?><br/><br/>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>Phone:</td>
<td><?php echo $dealer_row['dealer_phone'];?></td>
</tr>
<tr>
<td>Fax:</td>
<td><?php echo $dealer_row['dealer_fax'];?></td>
</tr>
<tr>
<td>Toll-free:</td>
<td><?php echo $dealer_row['dealer_toll_free'];?></td>
</tr>
<tr>
<td>E-Mail:</td>
<td style="font-size:11px;"><?php echo $dealer_row['dealer_email'];?></td>
</tr>
<tr>
<td>Website:</td>
<td style="font-size:11px;"><?php echo $dealer_row['dealer_website'];?></td>
</tr>
</table>
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

<h4>Products</h4>
<div class="full-width-brdr"></div>
<div class="category-list-imgs">
<ul>
<?php 
foreach($products_rows as $row => $product_value){
?>
<li><a href="#" title=""><img src="<?php echo $product_value['product_primary_image'];?>" /></a>
<h3><?php echo $product_value['product_name'];?></h3>
<span class="price">$<?php echo $product_value['product_sale_price'];?></span>
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
$page_count=round($products_rows_count/$limit);
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
	<a href="dealer-inventory.php?name=<?php echo $dealer_row['dealer_name'];?>&page=<?php echo $j ?>"><<</a>
	
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
     <a href="dealer-inventory.php?name=<?php echo $dealer_row['dealer_name'];?>&page=<?php echo $i ?>"><?php echo $i ?></a>
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
     <a href="dealer-inventory.php?name=<?php echo $dealer_row['dealer_name'];?>&page=<?php echo $i ?>"><?php echo $i ?></a>
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
	<a href="dealer-inventory.php?name=<?php echo $dealer_row['dealer_name'];?>&page=<?php echo $j ?>">>></a>
	<?php
   }
?>

</div>
<!-- End Paging for products -->


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