
<?php 
$dealers = "select dealer_code,dealer_name,dealer_thumbnail,dealer_store_name from dealers where dealer_status=1 order by dealer_order asc"; 
 $dealers_data = $db->getRows($dealers);
 $dealers_rows=$db->numRows($dealers_data);
?>
<!--Dealers Inner Page Content:Start -->
<div class="bread-crumb"><a href="index.php">Home</a><img src="design/images/icons/bread-crumb-icon.png" /><a href="dealers.php">Dealers</a></div>
<div class="clear"></div>
<div class="featured-dealers-box" align="center" style="margin-left:5px; margin-right:5px;">
<ul>
<?php
foreach($dealers_data as $data => $value){
?>
<li style=""><a href="dealer-inventory.php?name=<?php echo $value['dealer_name'];?>&code=<?php echo $value['dealer_code'];?>" title=""><img src="<?php echo $value['dealer_thumbnail'];?>" width="225px" height="170px" alt="<?php echo $value['dealer_store_name'];?>" title="<?php echo $value['dealer_store_name'];?>" /></a>
<h3><a href="dealer-inventory.php" title=""><?php echo $value['dealer_store_name'];?></a></h3>
<?php
}
?>

</ul>
</div>
<div class="ad-content-btm">
<!--<img src="design/images/ad-slider/ad-slide-img.jpg" /> -->
<?php include 'design/includes/ad-slider.php'; ?>
</div>
<!--Dealers Inner Page Content:End -->
