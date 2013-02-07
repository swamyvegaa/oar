
<!--category Page Start -->
<div class="bread-crumb"><a href="index.php">Home</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="category.php">Category</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="product.php">Product</a></div>
<div class="clear"></div>
<div class="product-details-box">
<h1><?php echo $product_data['product_title'];?></h1>
<div class="full-width-brdr"></div>
<div class="product-details-left">
<a href="<?php echo $product_data['product_primary_image'];?>" rel="lightbox"><img style="width:500px;height:500px" src="<?php echo $product_data['product_primary_image'];?>" width="500" height="500"  /></a><br/><br/>
<a href="#"><img style="margin:5px 0px;" src="<?php echo $dealer_data['dealer_icon'];?>"  /><br/>


<a href="#"><img style="margin:0px 10px 0px 0px;" src="design/images/icons/dealer-storefront-button.jpg"  /></a>
<a href="#"><img style="margin:0px 10px 0px 10px;" src="design/images/icons/contact-dealer-button.jpg"  /></a>
<a href="pop-up-window.html" target="_blank"><img style="margin:0px 10px 0px 10px;" src="design/images/icons/print.jpg"  /></a>
<br/><br/>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js"></script>
<!-- AddThis Button END -->
<div class="clear"></div>
<br/>
<h1><?php echo $product_data['product_title'];?></h1>
<br/>
<div style="margin-top:15px; margin-bottom:15px;">
<?php if(!empty($product_data['product_code'])){?><p><strong>Product Code: </strong><strong><?php echo $product_data['product_code'];?></strong></p><br/><?php }?>
</div>
<div style="margin-top:15px; margin-bottom:15px;">
<?php if(!empty($product_data['product_sale_price'])){?><p><strong>Sale Price: </strong><strong><?php echo $product_data['product_sale_price'];?></strong></p><br/><?php }?>
<?php if(!empty($product_data['product_offer_price'])){?><p><strong>Offer Price: </strong><strong><?php echo $product_data['product_offer_price'];?></strong></p><br/><?php }?>
<?php if(!empty($product_data['product_call_for_fee'])){?><p><strong>Call for Price: </strong><strong><?php echo $product_data['product_call_for_fee'];?></strong></p><br/><?php }?>
</div>
<div style="margin-top:15px; margin-bottom:15px;">
<?php if(!empty($product_data['product_period'])){?><p><strong>Period: </strong><strong><?php echo $product_data['product_period'];?></strong></p><br/><?php }?>
<?php if(!empty($product_data['product_origin'])){?><p><strong>Origin: </strong><strong><?php echo $product_data['product_origin'];?></strong></p><br/><?php }?>
</div>
<div style="margin-top:15px; margin-bottom:15px;">
<?php if(!empty($product_data['product_width'])){?><p><strong>Width: </strong><strong><?php echo $product_data['product_width'];?></strong></p><br/><?php }?>
<?php if(!empty($product_data['product_height'])){?><p><strong>Height: </strong><strong><?php echo $product_data['product_height'];?></strong></p><br/><?php }?>
<?php if(!empty($product_data['product_depth'])){?><p><strong>Depth: </strong><strong><?php echo $product_data['product_depth'];?></strong></p><br/><?php }?>
<?php if(!empty($product_data['product_weight'])){?><p><strong>Weight: </strong><strong><?php echo $product_data['product_weight'];?></strong></p><br/><?php }?>
</div>
<div style="margin-top:15px; margin-bottom:15px;">
<?php if(!empty($product_data['product_instock_qty'])){?><p><strong>Number of Items: </strong><strong><?php echo $product_data['product_instock_qty'];?></strong></p><br/><?php }?>
<?php if(!empty($product_data['product_condition'])){?><p><strong>Condition: </strong><strong><?php echo $product_data['product_condition'];?></strong></p><br/><?php }?>
<?php if(!empty($product_data['product_status'])){?><p><strong>Status: </strong><strong><?php echo $product_data['product_status'];?></strong></p><br/><?php }?>
</div>
<div style="margin-top:15px; margin-bottom:15px;">
<?php if(!empty($product_data['product_shipping_price'])){?><p><strong>Shipping Price: </strong><strong><?php echo $product_data['product_shipping_price'];?></strong></p><br/><?php }?>
<?php if(!empty($product_data['product_free_shipping'])){?><p><strong>Free Shipping: </strong><strong><?php echo $product_data['product_free_shipping'];?></strong></p><br/><?php }?>
</div>
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
<?php echo $dealer_data['dealer_store_name'];?></a><br/>
<br/><br/>
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