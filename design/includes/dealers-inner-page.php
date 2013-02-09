

<!--Dealers Inner Page Content:Start -->
<div class="bread-crumb"><a href="<?php echo $base_url;?>index.php">Home</a><img src="<?php echo $base_url;?>design/images/icons/bread-crumb-icon.png" /><a href="dealers.php">Dealers</a></div>
<div class="clear"></div>
<div class="featured-dealers-box" align="center" style="margin-left:5px; margin-right:5px;">
<ul>
<?php
foreach($dealers_data as $data => $value){
?>
<li style=""><a href="<?php echo $base_url;?>dealer-inventory/<?php echo url_rewite($value['dealer_name']);?>/<?php echo $value['id'];?>/1" title=""><img src="<?php echo $base_url;?><?php echo $value['dealer_thumbnail'];?>" width="225px" height="170px" alt="<?php echo $value['dealer_store_name'];?>" title="<?php echo $value['dealer_store_name'];?>" /></a>
<h3><a href="<?php echo $base_url;?>dealer-inventory/<?php echo url_rewite($value['dealer_name']);?>/<?php echo $value['id'];?>/1" title=""><?php echo $value['dealer_store_name'];?></a></h3>
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
