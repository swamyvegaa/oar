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
<!--<div id="treeMenu">
	<ul>   First Li Start Here.... 
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
   </li>  First Li End Here.... 
   
   Second Li Start Here.... 
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
</div>-->
</div>

<!--<div class="left_menu_main">
            <div class="accordion"> <a class="menuitem submenuheader" href="#">Antique Furniture
            </a>
              <div class="submenu">
			  <ul>
                  <li><a href="#">Armories</a></li>
                 
                </ul>
				<ul>
                  <li><a href="#">Bedroom Furniture</a></li>
                 
                </ul>
				<ul>
                  <li><a href="#">Clocks</a></li>
                 
                </ul>
				<ul>
                  <li><a href="#">Desks &amp; Secretaires</a></li>
                 
                </ul>
				</div>
              <a class="menuitem submenuheader" href="#" >Fine Art</a>
              <div class="submenu">
			  <ul>
                  <li><a href="#">Director Academic</a></li>
                  
                </ul>
				<ul>
                  <li><a href="#">Director Student Services</a></li>
                  
                </ul>
				<ul>
                  <li><a href="#">Director GRADE</a></li>
                  
                </ul>
				<ul>
                  <li><a href="#">I/C Officer Material Production</a></li>
                  
                </ul>
				<ul>
                  <li><a href="#">Staff Training Development</a></li>
                  
                </ul>
				</div>
              	<a class="menuitem submenuheader" href="#">Architechtural Elements</a>
              	<div class="submenu">
				<ul>
                  <li><a href="#">Bathrooms</a></li>
                 
                </ul>
				<ul>
                  <li><a href="#">Doors</a></li>
                 
                </ul>
				<ul>
                  <li><a href="#">Gates</a></li>
                 
                </ul>
				</div>
              	<a class="menuitem submenuheader" href="#">Asian Antiques</a>
              	<div class="submenu">
			    <ul>
                  <li><a href="#">Library</a></li>
                  
                </ul>
				<ul>
                  <li><a href="#">SC / ST Cell</a></li>
                  
                </ul>
				<ul>
                  <li><a href="#">STML</a></li>
                  
                </ul>
				</div>
			   	<a class="menuitem submenuheader" href="#">American Antiques</a>
              	<div class="submenu">
			    <ul>
                  <li><a href="#">Director Academic</a></li>
                </ul>
				<ul>
                  <li><a href="#">Faculty Details</a></li>
                </ul>
				<ul>
                  <li><a href="#">Academic Programs</a></li>
                </ul>
				</div>
                <a class="menuitem submenuheader" href="#">French Antiques</a>
                <div class="submenu">
			    <ul>
                  <li><a href="#">Director Academic</a></li>
                </ul>
				<ul>
                  <li><a href="#">Faculty Details</a></li>
                </ul>
				<ul>
                  <li><a href="#">Academic Programs</a></li>
                </ul>
				</div>
                <a class="menuitem submenuheader" href="#">Collections</a>
                <div class="submenu">
			    <ul>
                  <li><a href="#">Director Academic</a></li>
                </ul>
				<ul>
                  <li><a href="#">Faculty Details</a></li>
                </ul>
				<ul>
                  <li><a href="#">Academic Programs</a></li>
                </ul>
				</div>
                <a class="menuitem submenuheader" href="#">Gift Ideas</a>
                <div class="submenu">
			    <ul>
                  <li><a href="#">Director Academic</a></li>
                </ul>
				<ul>
                  <li><a href="#">Faculty Details</a></li>
                </ul>
				<ul>
                  <li><a href="#">Academic Programs</a></li>
                </ul>
				</div>
                <a class="menuitem submenuheader" href="#">New Arrivals</a>
                <div class="submenu">
			    <ul>
                  <li><a href="#">Director Academic</a></li>
                </ul>
				<ul>
                  <li><a href="#">Faculty Details</a></li>
                </ul>
				<ul>
                  <li><a href="#">Academic Programs</a></li>
                </ul>
				</div>
                <a class="menuitem submenuheader" href="#">Coming Soon!</a>
                <div class="submenu">
			    <ul>
                  <li><a href="#">Director Academic</a></li>
                </ul>
				<ul>
                  <li><a href="#">Faculty Details</a></li>
                </ul>
				<ul>
                  <li><a href="#">Academic Programs</a></li>
                </ul>
				</div>
                <a class="menuitem submenuheader" href="#">Sale!</a>
                <div class="submenu">
			    <ul>
                  <li><a href="#">Director Academic</a></li>
                </ul>
				<ul>
                  <li><a href="#">Faculty Details</a></li>
                </ul>
				<ul>
                  <li><a href="#">Academic Programs</a></li>
                </ul>
				</div>
	</div>
</div> -->
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
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br/><br/>

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
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
<!-- End of Products paging -->
</section>
<!--category Page End -->