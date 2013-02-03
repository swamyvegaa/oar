<aside class="home-page-left-side">
<div class="page-link-buttons">
<h4 class="clearleft">New Arrivals</h4>
</div>
<div class="page-link-buttons">
<div class="view-all"><a href="new-arrivals.php">View All New Arrivals</a>
<img src="design/images/icons/arrow-grey-icon.png" />
</div>
</div>




<?php include 'design/includes/new-arrivals-slider.php';?>


</aside>

<aside class="home-page-right-side">
<div class="home-slider-topscrolling">
<marquee onmouseout="this.start()" onmouseover="this.stop()" direction="left" scrollamount="5" behavior="scroll">
<a href="index.php">On Antique Row: All About Antiques	www.onantiquerow.com!</a>
</marquee>
</div>
<div class="home-slideshow-img"><?php include 'design/includes/home-slide.php'; ?></div>
<h4>About On Antique Row</h4>
<p class="home-text tjustify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<!--<div class="read-more-btn clearfix"><a href="#" title="">Read More...</a></div> -->
<div align="right" style="margin:10px 0px 0px;"><a href="#"><img src="design/images/icons/read-more-button.jpg"  /></a></div>
</aside>
<section class="section-full-width">
<div class="full-width-brdr clearfix"></div>
<div class="page-link-buttons">
<h4 class="clearleft">Featured Dealers</h4>
</div>
<div class="view-all"><a href="dealers.php">View All Dealers</a>
<img src="design/images/icons/arrow-grey-icon.png" />
</div>
<div class="full-width-brdr clearfix"></div>
<div class="featured-dealers-box">
<ul>

<li><a href="dealers.php" title="<?php echo $featuredDealersData[0]['dealer_store_name'];?>"><img src="<?php echo $featuredDealersData[0]['dealer_thumbnail'];?>" width="225px" height="170px" alt="<?php echo $featuredDealersData[0]['dealer_store_name'];?>" title="<?php echo $featuredDealersData[0]['dealer_store_name'];?>"/></a>
<h3><?php echo $featuredDealersData[0]['dealer_store_name'];?></h3>
<!--<p>Antiques of River Oaks is a 9,000 square foot<br/>gallery representin...</p> -->
</li>
<li><a href="dealers.php" title="<?php echo $featuredDealersData[1]['dealer_store_name'];?>"><img src="<?php echo $featuredDealersData[1]['dealer_thumbnail'];?>" width="225px" height="170px" alt="<?php echo $featuredDealersData[1]['dealer_store_name'];?>" title="<?php echo $featuredDealersData[1]['dealer_store_name'];?>"/></a>
<h3><?php echo $featuredDealersData[1]['dealer_store_name'];?></h3>
<!--<p>Antiques of River Oaks is a 9,000 square foot<br/>gallery representin...</p> -->
</li>
<li><a href="dealers.php" title="<?php echo $featuredDealersData[2]['dealer_store_name'];?>"><img src="<?php echo $featuredDealersData[2]['dealer_thumbnail'];?>" width="225px" height="170px" alt="<?php echo $featuredDealersData[2]['dealer_store_name'];?>" title="<?php echo $featuredDealersData[2]['dealer_store_name'];?>"/></a>
<h3><?php echo $featuredDealersData[2]['dealer_store_name'];?></h3>
<!--<p>Antiques of River Oaks is a 9,000 square foot<br/>gallery representin...</p> -->
</li>
<li><a href="dealers.php" title="<?php echo $featuredDealersData[3]['dealer_store_name'];?>"><img src="<?php echo $featuredDealersData[3]['dealer_thumbnail'];?>" width="225px" height="170px" alt="<?php echo $featuredDealersData[3]['dealer_store_name'];?>" title="<?php echo $featuredDealersData[3]['dealer_store_name'];?>"/></a>
<h3><?php echo $featuredDealersData[3]['dealer_store_name'];?></h3>

<!--<p>Antiques of River Oaks is a 9,000 square foot<br/>gallery representin...</p> -->
</li>
</ul>
</div>

<div class="full-width-brdr clearfix"></div>
<div class="page-link-buttons">
<h4 class="clearleft">Featured Products</h4>
</div>
<div class="view-all"><a href="product-details.php">View All Products</a>
<img src="design/images/icons/arrow-grey-icon.png" />
</div>
<div class="full-width-brdr clearfix"></div>
<div class="featured-dealers-box">
<ul>

<li><a href="product-details.php" title="<?php echo $featuredProductsData[0]['product_name'];?>"><img src="<?php echo $featuredProductsData[0]['product_primary_image'];?>" style="width:225px;height:225px;" alt="<?php echo $featuredProductsData[0]['product_name'];?>" title="<?php echo $featuredProductsData[0]['product_name'];?>"/></a>
<h3><?php echo $featuredProductsData[0]['product_name'];?><br/><br/></h3>
</li>
<li><a href="product-details.php" title="<?php echo $featuredProductsData[1]['product_name'];?>"><img src="<?php echo $featuredProductsData[1]['product_primary_image'];?>" style="width:225px;height:225px;" alt="<?php echo $featuredProductsData[1]['product_name'];?>" title="<?php echo $featuredProductsData[1]['product_name'];?>" /></a>
<h3><?php echo $featuredProductsData[1]['product_name'];?><br/><br/></h3>
</li>
<li><a href="product-details.php" title="<?php echo $featuredProductsData[2]['product_name'];?>"><img src="<?php echo $featuredProductsData[2]['product_primary_image'];?>" style="width:225px;height:225px;" alt="<?php echo $featuredProductsData[2]['product_name'];?>" title="<?php echo $featuredProductsData[2]['product_name'];?>"/></a>
<h3><?php echo $featuredProductsData[2]['product_name'];?><br/><br/></h3>
</li>
<li><a href="product-details.php" title="<?php echo $featuredProductsData[3]['product_name'];?>"><img src="<?php echo $featuredProductsData[3]['product_primary_image'];?>" style="width:225px;height:225px;"  alt="<?php echo $featuredProductsData[3]['product_name'];?>" title="<?php echo $featuredProductsData[3]['product_name'];?>"/></a>
<h3><?php echo $featuredProductsData[3]['product_name'];?><br/><br/></h3>

</li>
</ul>
</div>

<div class="full-width-brdr clearfix"></div>
<div class="page-link-buttons">
<h4 class="clearleft">Featured Categories</h4>
</div>
<div class="view-all"><a href="store.php">View All Categories</a>
<img src="design/images/icons/arrow-grey-icon.png" />
</div>
<div class="full-width-brdr clearfix"></div>
<div class="featured-dealers-box">
<ul>

<li><a href="category.php" title="<?php echo $featuredCategoriesData[0]['category_name'];?>"><img src="<?php echo $featuredCategoriesData[0]['category_thumbnail'];?>" style="width:225px;height:225px;" alt="<?php echo $featuredCategoriesData[0]['category_name'];?>" title="<?php echo $featuredCategoriesData[0]['category_name'];?>"/></a>
<h3><?php echo $featuredCategoriesData[0]['category_name'];?></h3>
</li>
<li><a href="category.php" title="<?php echo $featuredCategoriesData[0]['category_name'];?>"><img src="<?php echo $featuredCategoriesData[0]['category_thumbnail'];?>" style="width:225px;height:225px;" alt="<?php echo $featuredCategoriesData[0]['category_name'];?>" title="<?php echo $featuredCategoriesData[0]['category_name'];?>"/></a>
<h3><?php echo $featuredCategoriesData[0]['category_name'];?></h3>
</li>
<li><a href="category.php" title="<?php echo $featuredCategoriesData[0]['category_name'];?>"><img src="<?php echo $featuredCategoriesData[0]['category_thumbnail'];?>" style="width:225px;height:225px;" alt="<?php echo $featuredCategoriesData[0]['category_name'];?>" title="<?php echo $featuredCategoriesData[0]['category_name'];?>"/></a>
<h3><?php echo $featuredCategoriesData[0]['category_name'];?></h3>
</li>
<li><a href="category.php" title="<?php echo $featuredCategoriesData[0]['category_name'];?>"><img src="<?php echo $featuredCategoriesData[0]['category_thumbnail'];?>" style="width:225px;height:225px;" alt="<?php echo $featuredCategoriesData[0]['category_name'];?>" title="<?php echo $featuredCategoriesData[0]['category_name'];?>"/></a>
<h3><?php echo $featuredCategoriesData[0]['category_name'];?></h3>
</li>
</ul>
</div>

<div id="featured-designers-box">
<div class="page-link-buttons">
<h4 class="clearleft">Featured Designers</h4>
</div>
<div class="view-all"><a href="designers.php">View All Designers</a>
<img src="design/images/icons/arrow-grey-icon.png" />
</div>
<div class="full-width-brdr"></div>
<div class="featured-designers-200">
<a href="designers.php"><img src="design/images/designer-img-1.jpg" /></a>
</div>
<div class="featured-designers-150">
<a href="designers.php"><img src="design/images/designer-pic-1.jpg" /></a>
</div>
<div class="featured-designers-240">
<h5><a href="designers.php">Rubelli<br/>Chicago, IL</a></h5>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
</p>
<a href="designers.php"><img src="design/images/icons/view-profile-button.jpg" style="border:0; float:right;" alt=""  /></a>
<!--<div class="read-more-btn clearfix"><a href="#" title="">View Profile</a></div> -->
</div>

<div class="full-width-brdr"></div>
<div class="featured-designers-200">
<img src="design/images/designer-img-2.jpg" />
</div>
<div class="featured-designers-150">
<img src="design/images/designer-pic-2.jpg" />
</div>
<div class="featured-designers-240">
<h5><a href="designers.php">Rubelli<br/>Chicago, IL</a></h5>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<a href="designers.php"><img src="design/images/icons/view-profile-button.jpg" style="border:0; float:right;" alt=""  /></a>
</div>

<div class="full-width-brdr"></div>
<div class="featured-designers-200">
<img src="design/images/designer-img-3.jpg" />
</div>
<div class="featured-designers-150">
<img src="design/images/designer-pic-3.jpg" />
</div>
<div class="featured-designers-240">
<h5><a href="designers.php">Rubelli<br/>Chicago, IL</a></h5>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<a href="designers.php"><img src="design/images/icons/view-profile-button.jpg" style="border:0; float:right;" alt=""  /></a>
</div>
</div>

</section>


<div id="newsletter-box">
<!--<div class="page-link-buttons">
<h4 class="clearleft">Sale</h4>
</div>
<div class="full-width-brdr clearfix"></div>
<div class="sale-box">
<ul>
</ul>
</div>
<div class="clearfix"></div>
-->
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
<div class="page-link-buttons">
<h4 class="clearleft">Blog</h4>
</div>
<div class="full-width-brdr"></div>
<div class="blog-list">
<ul>
<li><a href="#">Great Gardens – Green With Envy</a></li>
<li><a href="#">Park Avenue Apartment of Brooke Astor</a></li>
<li><a href="#">MoMA Exhibit and Michelle Oka Doner Reception</a></li>
<li><a href="#">Shop Talk: Hyde Park Antiques</a></li>
<li><a href="#">Capsule Collection: Line Vautrin</a></li>
</ul>
</div>

</div>



<div id="event-right-side-box">


<div class="page-link-buttons">
<h4 class="clearleft">Events</h4>
</div>
<div class="view-all"><a href="events.php">View All Events</a>
<img src="design/images/icons/arrow-grey-icon.png" />
</div>
<div class="full-width-brdr"></div>
<img src="design/images/event-img-1.jpg" class="event-right-img" />
<div class="event-right-text-box">
<h4>Peter Pap Treasured Weavings</h4>
<h5>January 25-February 3, 2013</h5>
<p>A selling show at 1stdibs' gallery at the New York Design Center showcases more than 65 exquisite antique textiles from Africa, the Americas, Asia, Europe and the Middle East.</p>
<div align="right" style="margin:10px 0px 0px;"><a href="events.php"><img src="design/images/icons/read-more-button.jpg"  /></a></div>
</div>
<!--<div class="read-more-btn clearfix"><a href="#" title="">Read More...</a></div> -->

<div class="full-width-brdr"></div>
<img src="design/images/event-img-2.jpg" class="event-right-img" />
<div class="event-right-text-box">
<h4>Peter Pap Treasured Weavings</h4>
<h5>January 25-February 3, 2013</h5>
<p>A selling show at 1stdibs' gallery at the New York Design Center showcases more than 65 exquisite antique textiles from Africa, the Americas, Asia, Europe and the Middle East.</p>
<div align="right" style="margin:10px 0px 0px;"><a href="events.php"><img src="design/images/icons/read-more-button.jpg"  /></a></div>
</div>

<div class="full-width-brdr"></div>
<img src="design/images/event-img-3.jpg" class="event-right-img" />
<div class="event-right-text-box">
<h4>Peter Pap Treasured Weavings</h4>
<h5>January 25-February 3, 2013</h5>
<p>A selling show at 1stdibs' gallery at the New York Design Center showcases more than 65 exquisite antique textiles from Africa, the Americas, Asia, Europe and the Middle East.</p>
<div align="right" style="margin:10px 0px 0px;"><a href="events.php"><img src="design/images/icons/read-more-button.jpg"  /></a></div>
</div>

</div>

<div class="ad-content-btm">
<!--<img src="design/images/ad-slider/ad-slide-img.jpg" /> -->
<?php include 'design/includes/ad-slider.php'; ?>
</div>

