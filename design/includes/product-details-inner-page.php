
<!--category Page Start -->
<div class="bread-crumb"><a href="index.php">Home</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="category.php">Category</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="product.php">Product</a></div>
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
<div class="product-details-box">

<h1><?php echo $product_data['product_name'];?></h1>
<div class="full-width-brdr"></div>
<div class="product-details-left">
<a href="design/images/products/lighting-img-large-01.jpg" rel="lightbox"><img src="design/images/products/lighting-img-500x500-01.jpg" width="500" height="500"  /></a>
<a href="#"><img src="design/images/products/dealer-logo.jpg"  /></a>

<a href="#"><img style="margin:0px 10px 0px 10px;" src="design/images/icons/dealer-storefront-button.jpg"  /></a>
<a href="#"><img style="margin:0px 10px 0px 10px;" src="design/images/icons/contact-dealer-button.jpg"  /></a>
<a href="pop-up-window.html" target="_blank"><img style="margin:0px 10px 0px 10px;" src="design/images/icons/print.jpg"  /></a>
<br/><br/>
<div class="clear"></div>


<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<!--<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js"></script>-->
<!-- AddThis Button END -->
<br/>
<h1>Superb Swedish Art Deco 3 drawer chest with pewter inlay.</h1>
<br/><br/>
<table>
<tr>
<td style="width:125px; text-align:left; color:#444;">Period:</td>
<td style="width:125px; text-align:left; color:#444;">1947</td>
<td style="width:125px; text-align:left; color:#444;">Origin:</td>
<td style="width:125px; text-align:left; color:#444;" align="left" valign="top">France</td>
</tr>
<tr>
<td style="width:125px; text-align:left; color:#444;">Condition:</td>
<td style="width:125px; text-align:left; color:#444;">Excellent</td>
<td style="width:125px; text-align:left; color:#444;">Free Shipping:</td>
<td style="width:125px; text-align:left; color:#444;">Yes</td>
</tr>
<tr>
<td style="width:125px; text-align:left; color:#444;">Number of Items:</td>
<td style="width:125px; text-align:left; color:#444;">2</td>
<td style="width:125px; text-align:left; color:#444;">Status:</td>
<td style="width:125px; text-align:left; color:#444;">Avaliable</td>
</tr>

<tr>
<td style="width:125px; text-align:left; color:#444;">Width:</td>
<td style="width:125px; text-align:left; color:#444;">26.55"</td>
<td style="width:125px; text-align:left; color:#444;">Height:</td>
<td style="width:125px; text-align:left; color:#444;">88.99"</td>
</tr>
<tr>
<td style="width:125px; text-align:left; color:#444;">Depth:</td>
<td style="width:125px; text-align:left; color:#444;">44.55"</td>
<td style="width:125px; text-align:left; color:#444;">&nbsp;</td>
<td style="width:125px; text-align:left; color:#444;">&nbsp;</td>
</tr>
<tr>
<td style="width:125px; text-align:left; color:#444;">Sale Price:</td>
<td style="width:125px; text-align:left; color:#444;">$999.99</td>
<td style="width:125px; text-align:left; color:#444;">Offer Price:</td>
<td style="width:125px; text-align:left; color:#444;">$888.88</td>
</tr>
</table>
<br/><br/>
<p>
<strong>Product Overview:</strong><br/>
hgjhgkjhgsdhgajhgdjhgjhsgahgjsahgjdh
<br/><br/>
<strong>Product Description:</strong><br/>
Superb Swedish Art Deco 3 drawer chest with wood marquetry and inlay in pewter. The chest's center drawer features a young male figure wearing a laurel wreath on his head and a quiver around his waist. He is delighted by a butterfly which is above his head. A stylized neo-classical wreath frames this scene. The center round ring pulls are offset from upper and lower pairs. and pewter inlays detail the feet and the upper and lower edges of the chest. The body is stained lemon wood. H: 28.75", L 33.5", D 17.25". Restored in excellent condition.
<br/><br/>
<strong>Product Additional Information:</strong><br/>
* If you are purchasing this item directly from the dealer based on their description above, please request to have this page acknowledged and incorporated into a dated receipt of sale and request that the item be promptly marked sold on the 1stdibs system. All items purchased on-line through 1stdibs will automatically incorporate the description into the record.
<br/><br/>
* It is highly recommended, when arranging your own shipping, that you request from the shipper a condition report generated at the time of collection and acknowledged by the dealer.<br/><br/>  
<br/><br/>
<strong>Dealer Information:</strong><br/>
Dealer Name
Dealer Address:
Phone:
Email:
</p>
</div>
<div class="product-details-right">
<a href="design/images/products/lighting-img-large-01.jpg" rel="lightbox">
<img src="design/images/products/lighting-img-225x170-01.jpg"  /></a>
<a href="design/images/products/lighting-img-large-02.jpg" rel="lightbox">
<img src="design/images/products/lighting-img-225x170-02.jpg"  /></a>
<a href="design/images/products/lighting-img-large-03.jpg" rel="lightbox">
<img src="design/images/products/lighting-img-225x170-03.jpg"  /></a>
<a href="design/images/products/lighting-img-large-04.jpg" rel="lightbox">
<img src="design/images/products/lighting-img-225x170-04.jpg"  /></a>
<a href="design/images/products/lighting-img-large-05.jpg" rel="lightbox">
<img src="design/images/products/lighting-img-225x170-05.jpg"  /></a>
<a href="design/images/products/lighting-img-large-06.jpg" rel="lightbox">
<img src="design/images/products/lighting-img-225x170-06.jpg"  /></a>

</div>
<div class="clear"></div>
<h4>Other Items You May Like:</h4>
<div class="full-width-brdr"></div>
<div class="featured-products-list">
<ul>
<li><a href="#"><img src="design/images/products/featured-product-1.jpg"  /></a>
<span class="details">Product-01<br/>$78,500</span>
</li>
<li><a href="#"><img src="design/images/products/featured-product-2.jpg"  /></a>
<span class="details">Product-02<br/>$78,500</span>
</li>
<li><a href="#"><img src="design/images/products/featured-product-3.jpg"  /></a>
<span class="details">Product-03<br/>$25,200</span>
</li>
<li><a href="#"><img src="design/images/products/featured-product-4.jpg"  /></a>
<span class="details">Product-04<br/>$42,100</span>
</li>
<li><a href="#"><img src="design/images/products/featured-product-5.jpg"  /></a>
<span class="details">Product-05<br/>$36,500</span>
</li>
<li><a href="#"><img src="design/images/products/featured-product-6.jpg"  /></a>
<span class="details">Product-06<br/>$58,250</span>
</li>
</ul>
</div>
</div>

<!--Product Details Page End -->