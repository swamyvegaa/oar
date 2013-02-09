<!--New Arrivals Page Start -->
<?php
$newArrProducts = "SELECT * FROM  `products` WHERE `product_new_arrival` = 1 ORDER BY `id` desc LIMIT 0, 4"; 
 $newArrProductsData = $db->getRows($newArrProducts);
//$dealer_data="select * from dealers where dealer_code='".$_GET['code']."'";
//$dealer_row=$db->getrow($dealer_data);
//$products_data="select * from products where product_dealer=".$dealer_row['id']." and product_available=1";
//$products_rows=$db->getrows($products_data);
//print_r($dealer_row['id']);
?>
<div class="bread-crumb"><a href="index.php">Home</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="new-arrivals.php">New Arrivals</a></div>
<div class="clear"></div>
<aside id="category-page-leftside">
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
<h4>New Arrivals</h4>
<div class="full-width-brdr"></div>
<div class="category-list-imgs">
<ul>
<?php 
foreach($newArrProductsData as $row => $product_value){
?>
<li>

<a href="product-details.php" title="<?php echo $product_value['product_name'];?>">
<img src="<?php echo $product_value['product_primary_image'];?>" style="width:225px;height:225px;" alt="<?php echo $product_value['product_name'];?>" title="<?php echo $product_value['product_name'];?>"/></a>
</a>
<h3><?php echo $product_value['product_name'];?></h3>
<span class="price">$<?php echo $product_value['product_sale_price'];?></span>
</li>
<?php
}
?>
</ul>
</div>




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
<!--New Arrivals Page End -->