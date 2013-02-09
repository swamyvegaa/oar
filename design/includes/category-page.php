<!--category Page Start -->
<div class="bread-crumb"><a href="<?php echo $base_url; ?>">Home</a><img src="<?php echo $base_url;?>design/images/icons/bread-crumb-icon.png" /><a href="<?php echo $base_url; ?>category/<?php echo url_rewite($category_row['category_name']); ?>/<?php echo $category_row['id']; ?>/1"><?php echo $category_row['category_name'];?></a></div>
<div class="clear"></div>
<aside id="category-page-leftside">
<h4>Store</h4>
<div class="left_menu_main">
<div id="treeMenu">
            <?php
            $categorylist = "SELECT id,category_name,category_root  FROM  categories WHERE category_status=1 AND category_root=0";
            $categorylistre = $db->getRows($categorylist);
            $category_num = sqlnumber($categorylist);
            if ($category_num > 0) {
                echo "<ul>";
                foreach ($categorylistre as $categorylist_result) {
                    ?>
                    <li><a href="<?php echo $base_url; ?>category/<?php echo url_rewite($categorylist_result['category_name']); ?>/<?php echo $categorylist_result['id']; ?>/1" class="parent"><?php echo $categorylist_result['category_name']; ?></a><span></span><div>
                            <?php
                            $categorylist_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_status=1 AND category_root=" . $categorylist_result['id'];
                            $category_sub = $db->getRows($categorylist_sub);
                            $category_num2 = sqlnumber($categorylist_sub);

                            if ($category_num2 > 0) {
                                echo "<ul>";
                                foreach ($category_sub as $category_sub_re) {
                                    ?>

                                    <li><span></span><a href="<?php echo $base_url; ?>category/<?php echo url_rewite($categorylist_result['category_name']); ?>/<?php echo $category_sub_re['id']; ?>/1" class="parent"><?php echo $category_sub_re['category_name']; ?></a>
                                        <div>
                <?php
                $categorylist_sub_sub = "SELECT id,category_name,category_root  FROM  categories WHERE category_status=1 AND category_root=" . $category_sub_re['id'];
                $category_sub_sub = $db->getRows($categorylist_sub_sub);
                $category_num3 = sqlnumber($categorylist_sub_sub);

                if ($category_num3 > 0) {
                    echo "<ul>";
                    foreach ($category_sub_sub as $category_sub_res) {
                        ?>
                                                    <li><span></span><a href="<?php echo $base_url; ?>category/<?php echo url_rewite($categorylist_result['category_name']); ?>/<?php echo $category_sub_res['id']; ?>/1" class="parent"><?php echo $category_sub_res['category_name']; ?></a>
                                                        <div>
                                                    <?php
                                                    $categorylist_sub_sub1 = "SELECT id,category_name,category_root  FROM  categories WHERE category_status=1 AND category_root=" . $category_sub_res['id'];
                                                    $category_sub_sub1 = $db->getRows($categorylist_sub_sub1);
                                                    $category_num4 = sqlnumber($categorylist_sub_sub1);

                                                    if ($category_num4 > 0) {
                                                        echo "<ul>" . $category_num4;
                                                        foreach ($category_sub_sub1 as $category_sub_res1) {
                                                            ?>
                                                                    <span></span><a href="<?php echo $base_url; ?>category/<?php echo url_rewite($categorylist_result['category_name']); ?>/<?php echo $category_sub_res1['id']; ?>/1"><?php echo $category_sub_res1['category_name']; ?></a></li>

                                                        <?php
                                                        }
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

<img src="<?php echo $base_url;?>design/images/news-letter-form-logo.jpg" class="news-letter-side-logo" />
<form class="news-letter-form">
<input type="text" id="" name="text-box" onblur="if(this.value=='')this.value='Name:'" onfocus="if(this.value=='Name:')this.value=''" value="Name:" />
<input type="text" id="" name="text-box" onblur="if(this.value=='')this.value='Email:'" onfocus="if(this.value=='Email:')this.value=''" value="Email:" />
<input type="button" value="Subscribe" id="" />
</form>

</aside>

<section id="category-page-rightside">
<h4><?php echo $category_row['category_name'];?></h4>
<div class="full-width-brdr"></div>
<p><?php echo $category_row['category_description_top'];?></p>
<br/><br/>
<h4>Products</h4>
<div class="full-width-brdr"></div>
<div class="category-list-imgs">
<!-- Category products -->
<?php
$start_count = 1;
if(!empty($_GET['page_id'])){
$page_id=$_GET['page_id'];//checks for page id.
}
$limit=5; // results per page.
$start=($page_id-1)*$limit; // Setting the starting limit value.
//$last=$page_id*$limit; // Setting the last limit value.
//Query to get all products list under perticular category.
$products_data="select * from products where product_primary_category=".$category_row['id']." or product_secodary_category= ".$category_row['id']." and product_available=1 limit ".$start.",".$limit;
$products_rows=$db->getrows($products_data);// Fetching the results.
?>
<!-- Category products html generating -->
<!-- Products listing query -->
<?php 
$products_count="select * from products where product_primary_category=".$category_row['id']." or product_secodary_category= ".$category_row['id']." and product_available=1";
$products_rows_count=sqlnumber($products_count);
$page_count=ceil($products_rows_count/$limit);
?>
<!-- Paging for products -->
<?php 
$i=1;
$results=count($products_rows); //counting the total number of results
foreach($products_rows as $row => $product_value){
$dealers="select id,dealer_name,dealer_icon from dealers where id=".$product_value['product_dealer'];
$dealer_row=$db->getrow($dealers);
    if($i==1){
        echo "<ul>";
    }
?>
<li><a href="<?php echo $base_url; ?>products/<?php echo url_rewite($product_value['product_name']); ?>/<?php echo url_rewite($product_value['id']); ?>/1" title=""><img src="<?php echo $base_url;?><?php echo $product_value['product_primary_image'];?>" /></a>
    <div align="center"><a href="<?php echo $base_url; ?>dealer/<?php echo url_rewite($dealer_row['dealer_name']); ?>/<?php echo url_rewite($dealer_row['id']); ?>/1" title=""><img src="<?php echo $base_url; ?><?php echo $dealer_row['dealer_icon']?>" style="width:150px;height:50px;" /></a></div>
	<h3><a href="<?php echo $base_url; ?>products/<?php echo url_rewite($product_value['product_name']); ?>/<?php echo url_rewite($product_value['id']); ?>/1" title=""><?php if(strlen($product_value['product_name'])>50) echo substr($product_value['product_name'], 0, 50).'...'; else echo $product_value['product_name']; ?></a></h3>

<div align="center">
									
									<?php 
									
									if(!empty($product_value['product_offer_price'])){
									echo "<span><del>".$product_value['product_sale_price']."</del></span><br/><span style='color: #d90009;'>".$product_value['product_offer_price']."</span>";
									}
									else if(!empty($product_value['product_sale_price'])){
									echo "<span>".$product_value['product_sale_price']."</span>";
									}
									else if(!empty($product_value['product_call_for_fee'])){
									echo "<span>Call for price</span>";
									}
									?>
									</div>
									<div align="center">
									<?php 
									
									if($product_value['product_on_hold']==1){
									echo "<img src=".$base_url."design/images/icons/on-hold.jpg />";
									}
									else if($product_value['product_sold']==1){
									echo "<img src=".$base_url."design/images/icons/sold.jpg />";
									}
									?>
									</div>

</li>
<?php
if($i<$results){//If $i value not equal to $results appendinding with </ul>.
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
<?php if($page_count>1){?>
                    <div class="page-numeric">
                        <?php
                        //Previous
                        if ($page_id <= 1) {
                            echo "<span id='page_links' style='font-weight:bold;'><<</span>";
                        } else {
                            $j = $page_id - 1;
                            ?>
                            <a href="<?php echo $base_url; ?>category/<?php echo url_rewite($category_row['category_name']); ?>/<?php echo $category_row['id']; ?>/<?php echo $j ?>"><<</a>

                            <?php
                            if ($page_id > 1) {
                                echo "<span id='page_links' style='font-weight:bold;'>...</span>";
                            }
                        }
                        //Numbers
                        echo "<span style='margin-right:5px;margin-left:5px;'>";
                        $start_count = $page_id - $limit;
                        if ($start_count < 1) {
                            for ($i = 1; $i <= $page_count; $i++) {
                                if ($i <> $page_id) {
                                    ?>
                                    <a href="<?php echo $base_url; ?>category/<?php echo url_rewite($category_row['category_name']); ?>/<?php echo $category_row['id']; ?>/<?php echo $i ?>"><?php echo $i ?></a>
                                    <?php
                                } else {
                                    echo "<span id='page_links' style='font-weight:bold;'>$i</span>";
                                }
                            }
                        } else {
                            for ($i = $start_count; $i <= $page_count; $i++) {
                                if ($i <> $page_id) {
                                    ?>
                                    <a href="<?php echo $base_url; ?>category/<?php echo url_rewite($category_row['category_name']); ?>/<?php echo $category_row['id']; ?>/<?php echo $i ?>"><?php echo $i ?></a>
                                    <?php
                                } else {
                                    echo "<span id='page_links' style='font-weight:bold;'>$i</span>";
                                }
                            }
                        }
                        echo "</span>";
                        //Next
                        if ($page_id == $page_count) {
                            echo "<span id='page_links' style='font-weight:bold;'>>></span>";
                        } else {
                            $j = $page_id + 1;
                            if ($page_count > $page_id) {
                                echo "<span id='page_links' style='font-weight:bold;'>...</span>";
                            }
                            ?>
                            <a href="<?php echo $base_url; ?>category/<?php echo url_rewite($category_row['category_name']); ?>/<?php echo $category_row['id']; ?>/<?php echo $j ?>">>></a>
                            <?php
                        }
                        ?>
                            
                    </div>
                    <?php }else if($page_count==0){?>
                    <div class="page-numeric">
                        <p>No products available</p>
                    </div>
                    <?php }?>

<p><?php echo $category_row['category_description_bottom'];?></p>
<!-- End of Products paging -->
</section>
<!--category Page End -->