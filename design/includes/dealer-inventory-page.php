
<!--Dealer inventory Page Start -->
<?php
$dealer_data="select * from dealers where dealer_code='".$_GET['code']."'";
$dealer_row=$db->getrow($dealer_data);
$products_data="select * from products where product_dealer='".$_GET['code']."'";
$products_rows=$db->getrow($products_data);
//print_r($products_rows);
?>
<div class="bread-crumb"><a href="index.php">Home</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="dealers.php">Dealers</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="#">Nicholas Haslam LTD</a></div>
<div class="clear"></div>
<aside id="category-page-leftside">
<address>
<h3 style="font-size:17px; margin:0px; line-height:24px;">Nicholas Haslam LTD</h3>
12-14 Holbein Place<br/>
London, UK SW1W8NL<br/>
UK<br/><br/>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>Phone:</td>
<td>305-446-1688</td>
</tr>
<tr>
<td>Fax:</td>
<td>305-446-1689</td>
</tr>
<tr>
<td>Toll-free:</td>
<td>866-446-1688</td>
</tr>
<tr>
<td>E-Mail:</td>
<td style="font-size:11px;">sales@nicholashaslam.com</td>
</tr>
<tr>
<td>Website:</td>
<td style="font-size:11px;">http://www.nicholashaslam.com</td>
</tr>
</table>
</address>
<h4>Store</h4>
<div class="full-width-brdr"></div>
<div class="left_menu_main">
<div id="treeMenu">
	<ul>   <!-- First Li Start Here.... -->
   	<li><a href="#" class="parent">Antique Furniture</a><span></span>
   	<div>
   	<ul>
   	<li><span></span><a href="#" class="parent">Armories</a>
   	<div>
   	<ul>
   	<li><span></span><a href="#">Subcategory1.1</a>
   	<div>
   	<ul>
   	<li><span></span><a href="#">Subcategory1.1.1</a></li>
   <li><span></span><a href="#">Subcategory1.1.2</a></li>
   </ul>
   </div>
   </li>
   <li><span></span><a href="#">Other links</a></li>
   </ul>
   </div>
   </li>
   <li><span></span><a href="#" class="parent">Bedroom Furniture</a>
   <div>
   <ul>
   <li><span></span><a href="#">Subcategory1.2.1</a></li>
   <li><span></span><a href="#">Subcategory1.2.2</a></li>
   <li><span></span><a href="#">Subcategory1.2.3</a></li>
   <li><span></span><a href="#">Subcategory1.2.4</a></li>
   </ul>
   </div>
   </li>
   <li><span></span><a href="#" class="parent">Clocks</a>
   <div>
   <ul>
   <li><span></span><a href="#">Other links</a></li>
   <li><span></span><a href="#">Other links</a></li>
   <li><span></span><a href="#">Other links</a></li>
   <li><span></span><a href="#">Other links</a></li>
   </ul>
   </div>
   </li>
   <li><span></span><a href="#" class="parent">Desks &amp; Secretaires</a>
   <div>
   <ul>
   <li><span></span><a href="#">Other links</a></li>
   <li><span></span><a href="#">Other links</a></li>
   <li><span></span><a href="#">Other links</a></li>
   <li><span></span><a href="#">Other links</a></li>
   </ul>
   </div>
   </li>
   </ul>
   </div>
   </li> <!-- First Li End Here.... -->
   
   <!-- Second Li Start Here.... -->
   <li><a href="#">Fine Art</a><span></span>
   <div>
   <ul>
   <li><span></span><a href="#">Director Academic</a></li>
   <li><span></span><a href="#" class="parent">Director Student Services</a> 
   <div>
   <ul>
   <li><span></span><a href="#">Other links</a></li>
   <li><span></span><a href="#">Other links</a></li>
   <li><span></span><a href="#">Other links</a></li>
                      <li><span></span><a href="#">Other links</a></li>
                      <li><span></span><a href="#">Other links</a></li>
                      <li><span></span><a href="#">Other links</a></li>
                    </ul>
                  </div>
                </li>
	<li><span></span><a href="#">Director GRADE</a></li>
	<li><span></span><a href="#" class="parent">I/C Officer Material Production</a>
    	<div>
		<ul>
			<li><span></span><a href="#">Other links</a></li>
			<li><span></span><a href="#">Other links</a></li>
			<li><span></span><a href="#">Other links</a></li>
		</ul>
		</div>
	</li>
	<li><span></span><a href="#">Staff Training Development</a></li>
	</ul>
	</div>
	</li>
    <li><span></span><a href="#" class="parent">Architechtural Elements</a> 
            <div>
              <ul>
                <li><span></span><a href="#">Bathrooms</a> 
                  <div>
                    <ul>
                      <li><span></span><a href="#">Bathrooms-01</a></li>
                      <li><span></span><a href="#">Bathrooms-02</a></li>
                      <li><span></span><a href="#">Bathrooms-03</a></li>
                      <li><span></span><a href="#">Bathrooms-04</a></li>
                      <li><span></span><a href="#">Bathrooms-05</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="#">Doors</a>
                  <div>
                    <ul>
                      <li><span></span><a href="#">Doors-01</a></li>
                      <li><span></span><a href="#">Doors-02</a></li>
                      <li><span></span><a href="#">Doors-03</a></li>
                      <li><span></span><a href="#">Doors-04</a></li>
                      <li><span></span><a href="#">Doors-05</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="#">Gates</a></li>
              </ul>
            </div>
          </li>
	<li><a href="#" class="parent">Asian Antiques</a><span></span>
            <div>
              <ul>
                <li><span></span><a href="#">Library</a>
                  <div>
                    <ul>
                      <li><span></span><a href="#">Other links</a></li>
                      <li><span></span><a href="#">Other links</a></li>
                      <li><span></span><a href="#">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="#">SC / ST Cell</a>
                  <div>
                    <ul>
                      <li><span></span><a href="#">Other links</a></li>
                      <li><span></span><a href="#">Other links</a></li>
                      <li><span></span><a href="#">Other links</a></li>
                    </ul>
                  </div>
                </li>
                <li><span></span><a href="#">STML</a>
                  <div>
                    <ul>
                      <li><span></span><a href="#">Other links</a></li>
                      <li><span></span><a href="#">Other links</a></li>
                      <li><span></span><a href="#">Other links</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          	<li><span></span><a href="#">American Antiques</a>
                  <div>
                    <ul>
                      <li><span></span><a href="#">Director Academic</a></li>
                      <li><span></span><a href="#">Faculty Details</a></li>
                      <li><span></span><a href="#">Academic Programs</a></li>
                    </ul>
                  </div>
		</li>
        <li><span></span><a href="#">French Antiques</a>
                  <div>
                    <ul>
                      <li><span></span><a href="#">Director Academic</a></li>
                      <li><span></span><a href="#">Faculty Details</a></li>
                      <li><span></span><a href="#">Academic Programs</a></li>
                    </ul>
                  </div>
		</li>
        <li><span></span><a href="#">Collections</a>
                  <div>
                    <ul>
                      <li><span></span><a href="#">Director Academic</a></li>
                      <li><span></span><a href="#">Faculty Details</a></li>
                      <li><span></span><a href="#">Academic Programs</a></li>
                    </ul>
                  </div>
		</li>
        <li><span></span><a href="#">Gift Ideas</a>
                  <div>
                    <ul>
                      <li><span></span><a href="#">Director Academic</a></li>
                      <li><span></span><a href="#">Faculty Details</a></li>
                      <li><span></span><a href="#">Academic Programs</a></li>
                    </ul>
                  </div>
		</li>
        <li><span></span><a href="#">New Arrivals</a>
                  <div>
                    <ul>
                      <li><span></span><a href="#">Director Academic</a></li>
                      <li><span></span><a href="#">Faculty Details</a></li>
                      <li><span></span><a href="#">Academic Programs</a></li>
                    </ul>
                  </div>
		</li>
        <li><span></span><a href="#">Coming Soon!</a>
                  <div>
                    <ul>
                      <li><span></span><a href="#">Director Academic</a></li>
                      <li><span></span><a href="#">Faculty Details</a></li>
                      <li><span></span><a href="#">Academic Programs</a></li>
                    </ul>
                  </div>
		</li>
        <li><span></span><a href="#">Sale!</a>
                  <div>
                    <ul>
                      <li><span></span><a href="#">Director Academic</a></li>
                      <li><span></span><a href="#">Faculty Details</a></li>
                      <li><span></span><a href="#">Academic Programs</a></li>
                    </ul>
                  </div>
		</li>
	</ul>
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
<li><a href="#" title=""><img src="design/images/category-img-1.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
<li><a href="#" title=""><img src="design/images/category-img-2.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
<li><a href="#" title=""><img src="design/images/category-img-3.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
</ul>
<div class="full-width-brdr"></div>
<ul>
<li><a href="#" title=""><img src="design/images/category-img-4.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
<li><a href="#" title=""><img src="design/images/category-img-5.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
<li><a href="#" title=""><img src="design/images/category-img-6.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
</ul>
<div class="full-width-brdr"></div>
<ul>
<li><a href="#" title=""><img src="design/images/category-img-7.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
<li><a href="#" title=""><img src="design/images/category-img-8.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
<li><a href="#" title=""><img src="design/images/category-img-9.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
</ul>
<div class="full-width-brdr"></div>
<ul>
<li><a href="#" title=""><img src="design/images/category-img-10.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
<li><a href="#" title=""><img src="design/images/category-img-11.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
<li><a href="#" title=""><img src="design/images/category-img-12.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
</ul>
<div class="full-width-brdr"></div>
<ul>
<li><a href="#" title=""><img src="design/images/category-img-13.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
<li><a href="#" title=""><img src="design/images/category-img-14.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
<li><a href="#" title=""><img src="design/images/category-img-15.jpg" /></a>
<h3>Pair of Vintage Pineapple<br/>Table Lamp</h3>
<span class="price">$4,520</span>
</li>
</ul>
<div class="full-width-brdr"></div>

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
<!--category Page End -->