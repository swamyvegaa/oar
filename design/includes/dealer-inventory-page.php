
<!--Dealer inventory Page Start -->
<?php
$dealer_data="select * from dealers where dealer_code='".$_GET['name']."'";
$dealer_row=$db->getrow($dealer_data);
$page_id=$_GET['page'];
$limit=10;
$start=($page_id-1)*$limit;
$last=$page_id*$limit;
$products_data="select * from products where product_dealer=".$dealer_row['id']." and product_available=1 limit ".$start.",".$last;
$products_rows=$db->getrows($products_data);

//$categories_parent_data="select id, category_name from categories where category_root=0 and category_status=1";
//$categories_parent_rows=$db->getrows($categories_parent_data);
//$categories_parent_data="select category_name from categories where category_status=1 and id in(select category_root from categories where category_status=1)";
//$categories_parent_rows=$db->getrows($categories_parent_data);
//$categories_child_data="select id, category_name from categories where category_root=";
//$categories_child_rows=$db->getrows($categories_parent_data);
//print_r($categories_parent_rows);

?>
<div class="bread-crumb"><a href="index.php">Home</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="dealers.php">Dealers</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="#">Nicholas Haslam LTD</a></div>
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
  <li><a href="#" class="parent"><?php echo $categorylist_result['category_name']; ?></a><span></span><div>
  <?php 
   $categorylist_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$categorylist_result['id']; 
   $category_sub = $db->getRows($categorylist_sub);
   $category_num2 = sqlnumber($categorylist_sub);
   
	if($category_num2>0){
 echo "<ul>";  
  foreach($category_sub as  $category_sub_re){?>
  
  <li><span></span><a href="#" class="parent"><?php echo $category_sub_re['category_name']; ?></a>
   	<div>
   <?php 
   $categorylist_sub_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$category_sub_re['id']; 
   $category_sub_sub = $db->getRows($categorylist_sub_sub);
 $category_num3 = sqlnumber($categorylist_sub_sub);
   
	if($category_num3>0) {
   echo "<ul>";
  foreach($category_sub_sub as  $category_sub_res){?>
   <li><span></span><a href="#" class="parent"><?php echo $category_sub_res['category_name']; ?></a>
   	<div>
	  <?php 
   $categorylist_sub_sub1 = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$category_sub_res['id']; 
   $category_sub_sub1 = $db->getRows($categorylist_sub_sub1);
 $category_num4 = sqlnumber($categorylist_sub_sub1);
   
	if($category_num4>0){
   echo "<ul>".$category_num4;
  foreach($category_sub_sub1 as  $category_sub_res1){?>
   <span></span><a href="#"><?php echo $category_sub_res1['category_name']; ?></a></li>
   
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
<?php 
$products_count="select count(*) from products where product_dealer=".$dealer_row['id']." and product_available=1";
$products_rows_count=$db->numrows($products_count);
echo $products_rows_count;

?>



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
</section>
<!--category Page End -->