<!-- Maim Menu : Start -->

<div id="primary-menu" style="clear:both;">
	<ul>
		<li><a class="menu-home" href="<?php echo $base_url;?>index"><div>Home</div></a></li>
		<li><a href="<?php echo $base_url;?>shop"><div>Shop</div></a>
        	
		
		<?php
$categorylist = "SELECT id,category_name,category_root  FROM  categories WHERE category_status='1' AND category_root=0"; 
 $categorylistre = $db->getRows($categorylist);
 $category_num = sqlnumber($categorylist);
 if( $category_num>0){
 echo "<ul>";
 foreach($categorylistre as  $categorylist_result){?>
  <li><a href="<?php echo $base_url; ?>category/<?php echo url_rewite($categorylist_result['category_name']); ?>/<?php echo $categorylist_result['id']; ?>/1" class="parent"><div><?php echo $categorylist_result['category_name']; ?></div></a>
  <?php 
   $categorylist_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_status='1' AND category_root=".$categorylist_result['id']; 
   $category_sub = $db->getRows($categorylist_sub);
   $category_num2 = sqlnumber($categorylist_sub);
   
	if($category_num2>0){
 echo "<ul>";  
  foreach($category_sub as  $category_sub_re){?>
  
  <li><a href="<?php echo $base_url; ?>category/<?php echo url_rewite($categorylist_result['category_name']); ?>/<?php echo $category_sub_re['id']; ?>/1" class="parent"><div><?php echo $category_sub_re['category_name']; ?></div></a>
   	
   <?php 
   $categorylist_sub_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_status='1' AND category_root=".$category_sub_re['id']; 
   $category_sub_sub = $db->getRows($categorylist_sub_sub);
 $category_num3 = sqlnumber($categorylist_sub_sub);
   
	if($category_num3>0) {
   echo "<ul>";
  foreach($category_sub_sub as  $category_sub_res){?>
   <li><a href="<?php echo $base_url; ?>category/<?php echo url_rewite($categorylist_result['category_name']); ?>/<?php echo $category_sub_res['id']; ?>/1" class="parent"><div><?php echo $category_sub_res['category_name']; ?></div></a>
	  <?php 
   $categorylist_sub_sub1 = "SELECT id,category_name,category_root  FROM  categories WHERE category_status='1' AND category_root=".$category_sub_res['id']; 
   $category_sub_sub1 = $db->getRows($categorylist_sub_sub1);
 $category_num4 = sqlnumber($categorylist_sub_sub1);
   
	if($category_num4>0){
   echo "<ul>".$category_num4;
  foreach($category_sub_sub1 as  $category_sub_res1){?>
   <li><a href="<?php echo $base_url; ?>category/<?php echo url_rewite($categorylist_result['category_name']); ?>/<?php echo $category_sub_res1['id']; ?>/1"><div><?php echo $category_sub_res1['category_name']; ?></div></a></li>
   
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
		<li><a href="<?php echo $base_url;?>dealers"><div>Dealers</div></a></li>
		<li><a href="<?php echo $base_url;?>designers"><div>Designers</div></a></li>
		<li><a href="<?php echo $base_url;?>services"><div>Services</div></a></li>
		<li><a href="<?php echo $base_url;?>sale"><div>Sale</div></a></li>
		<li><a href="<?php echo $base_url;?>new-arrivals"><div>New Arrivals</div></a></li>
        <li><a href="<?php echo $base_url;?>events"><div>Events</div></a></li>
        <li><a href="<?php echo $base_url;?>gallery"><div>Gallery</div></a></li>
        <li><a href="<?php echo $base_url;?>/blog"><div>Blog</div></a></li>
        <li><a href="<?php echo $base_url;?>contact-us"><div>Contact Us</div></a></li>
	</ul>
</div>

<!-- Maim Menu : End -->