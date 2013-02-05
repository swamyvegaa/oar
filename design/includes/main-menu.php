<!-- Maim Menu : Start -->

<div id="primary-menu" style="clear:both;">
	<ul>
		<li><a class="menu-home" href="index.php"><div>Home</div></a></li>
		<li><a href="shop.php"><div>Shop</div></a>
		
		
		<?php
$categorylist = "SELECT id,category_name,category_root  FROM  categories WHERE category_status!='-1' AND category_root=0"; 
 $categorylistre = $db->getRows($categorylist);
 $category_num = sqlnumber($categorylist);
 if( $category_num>0){
 echo "<ul>";
 foreach($categorylistre as  $categorylist_result){?>
  <li><a href="category.php?name=<?php echo $categorylist_result['category_name']; ?>" class="parent"><div><?php echo $categorylist_result['category_name']; ?></div></a>
  <?php 
   $categorylist_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$categorylist_result['id']; 
   $category_sub = $db->getRows($categorylist_sub);
   $category_num2 = sqlnumber($categorylist_sub);
   
	if($category_num2>0){
 echo "<ul>";  
  foreach($category_sub as  $category_sub_re){?>
  
  <li><a href="category.php?name=<?php echo $category_sub_re['category_name']; ?>" class="parent"><div><?php echo $category_sub_re['category_name']; ?></div></a>
   	
   <?php 
   $categorylist_sub_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$category_sub_re['id']; 
   $category_sub_sub = $db->getRows($categorylist_sub_sub);
 $category_num3 = sqlnumber($categorylist_sub_sub);
   
	if($category_num3>0) {
   echo "<ul>";
  foreach($category_sub_sub as  $category_sub_res){?>
   <li><a href="category.php?name=<?php echo $category_sub_res['category_name']; ?>" class="parent"><div><?php echo $category_sub_res['category_name']; ?></div></a>
	  <?php 
   $categorylist_sub_sub1 = "SELECT id,category_name,category_root  FROM  categories WHERE category_root=".$category_sub_res['id']; 
   $category_sub_sub1 = $db->getRows($categorylist_sub_sub1);
 $category_num4 = sqlnumber($categorylist_sub_sub1);
   
	if($category_num4>0){
   echo "<ul>".$category_num4;
  foreach($category_sub_sub1 as  $category_sub_res1){?>
   <li><a href="category.php?name=<?php echo $category_sub_res1['category_name']; ?>"><div><?php echo $category_sub_res1['category_name']; ?></div></a></li>
   
  <?php }
   echo "</ul>";
  }
 
  }
  echo "</li></ul>";
  }
  
  }
   echo "</li></ul>";
  }
 
  }
  echo "</li></ul>";
}
?>
</li>

		<li><a href="dealers.php"><div>Dealers</div></a></li>
		<li><a href="designers.php"><div>Designers</div></a></li>
		<li><a href="services.php"><div>Services</div></a></li>
		<li><a href="sale.php"><div>Sale</div></a></li>
		<li><a href="new-arrivals.php"><div>New Arrivals</div></a></li>
        <li><a href="events.php"><div>Events</div></a></li>
        <li><a href="gallery.php"><div>Gallery</div></a></li>
        <li><a href="/blog"><div>Blog</div></a></li>
        <li><a href="contact-us.php"><div>Contact Us</div></a></li>
	</ul>
</div>

<!-- Maim Menu : End -->