
<!--Dealer inventory Page Start -->
<?php
$start_count = 1;
$page_id = $_GET['page_id']; //If not getting the the page_id value.

$limit = 99; // Results per page.
$show_pages=5;
$start = ($page_id - 1) * $limit; //Setting the starting limit.
//$last = $page_id * $limit; //Setting the ending limit.
$products_data = "select * from products where product_dealer=" . $dealer_row['id'] . " and product_available=1 ORDER BY id limit " .$start."," .$limit; //Getting the products data based on dealer id.
$products_rows = $db->getrows($products_data); // Fetching the results.
?>
<div class="bread-crumb"><a href="<?php echo $base_url; ?>index">Home</a><img src="<?php echo $base_url; ?>design/images/icons/bread-crumb-icon.png" /><a href="<?php echo $base_url; ?>dealers">Dealers</a><img src="<?php echo $base_url; ?>design/images/icons/bread-crumb-icon.png" /><a href="<?php echo $base_url; ?>dealer/<?php echo $dealer_row['dealer_name']; ?>"><?php echo $dealer_row['dealer_store_name']; ?></a></div>
<div class="clear"></div>
<aside id="category-page-leftside">
    <address>
        <?php if (!empty($dealer_row['dealer_store_name'])) { ?>
            <h3 style="font-size:17px; margin:0px; line-height:24px;"><?php echo $dealer_row['dealer_store_name']; ?></h3>
            <?php if (!empty($dealer_row['dealer_address1']))
                echo $dealer_row['dealer_address1'] . '<br/>'; ?>
            <?php if (!empty($dealer_row['dealer_address2']))
                echo $dealer_row['dealer_address2'] . '<br/>'; ?>
            <?php if (!empty($dealer_row['dealer_address3']))
                echo $dealer_row['dealer_address3'] . '<br/>'; ?>
                <?php if (!empty($dealer_row['dealer_city']))
                    echo $dealer_row['dealer_city'] . ','; ?> <?php if (!empty($dealer_row['dealer_state']))
                echo $dealer_row['dealer_state'] . ','; ?> <?php echo $dealer_row['dealer_zip_code'] . '<br/>'; ?>
                <?php if (!empty($dealer_row['dealer_country']))
                    echo $dealer_row['dealer_country'] . '<br/><br/>'; ?>
            <div>
            <?php if (!empty($dealer_row['dealer_phone'])) { ?><p><span><strong>Phone: </strong></span><span><?php echo $dealer_row['dealer_phone']; ?></span></p><?php } ?>
    <?php if (!empty($dealer_row['dealer_fax'])) { ?><p><span><strong>Fax: </strong></span><span><?php echo $dealer_row['dealer_fax']; ?></span></p><?php } ?>
    <?php if (!empty($dealer_row['dealer_toll_free'])) { ?><p><span><strong>Toll-free: </strong></span><span><?php echo $dealer_row['dealer_toll_free']; ?></span></p><?php } ?>
    <?php if (!empty($dealer_row['dealer_email'])) { ?><p><span><strong>E-Mail: </strong></span><br/><span><?php echo $dealer_row['dealer_email']; ?></span></p><?php } ?>
    <?php if (!empty($dealer_row['dealer_website'])) { ?><p><span><strong>Website: </strong></span><br/><span><?php echo $dealer_row['dealer_website']; ?></span></p><?php } ?>
            </div>
            <?php } ?>
    </address>
    <h4>Store</h4>
    <div class="full-width-brdr"></div>
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

                <img src="<?php echo $base_url; ?>design/images/news-letter-form-logo.jpg" class="news-letter-side-logo" />
                <form class="news-letter-form">
                    <input type="text" id="" name="text-box" onblur="if(this.value=='')this.value='Name:'" onfocus="if(this.value=='Name:')this.value=''" value="Name:" />
                    <input type="text" id="" name="text-box" onblur="if(this.value=='')this.value='Email:'" onfocus="if(this.value=='Email:')this.value=''" value="Email:" />
                    <input type="button" value="Subscribe" id="" />
                </form>

                </aside>
                <section id="category-page-rightside">
	
                    <p><img src="<?php echo $base_url; ?><?php echo $dealer_row['dealer_banner']; ?>" width="740px" height="350px;"  /></p><br/>
<div><h1><?php echo $dealer_row['dealer_title'] ?></h1>
<p><?php echo $dealer_row['dealer_description_top'] ?></p>
</div><br/><br/>
                    <h4>Products</h4>
                    <div class="full-width-brdr"></div>
                    <div class="category-list-imgs">
                            <?php
							$i=1;
							$results=count($products_rows); //counting the total number of results
                            foreach ($products_rows as $row => $product_value) {
							if($i==1){
        echo "<ul>";
    }
                                ?>

                                <li><a href="<?php echo $base_url; ?>products/<?php echo url_rewite($product_value['product_name']); ?>/<?php echo url_rewite($product_value['id']); ?>/1" title=""><img src="<?php echo $base_url; ?><?php echo $product_value['product_primary_image']; ?>" /></a>
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
                        <div class="full-width-brdr"></div>
                    </div>
                    <!-- Products listing query -->
                        <?php
                        $products_count = "select * from products where product_dealer=" . $dealer_row['id'] . " and product_available=1";
                        $products_rows_count = sqlnumber($products_count);
                        $page_count = ceil($products_rows_count / $limit);
                        
                        ?>
                    <!-- Paging for products -->
                    <?php if($page_count>1){?>
                    <div class="page-numeric">
                        <?php
                        //Previous
                        if ($page_id <= 1) {
                            echo "<span id='page_links' style='font-weight:bold;'><<</span>";
                        } else {
                            $j = $page_id - 1;
                            ?>
                            <a href="<?php echo $base_url; ?>dealer/<?php echo url_rewite($dealer_row['dealer_name']); ?>/<?php echo $dealer_row['id']; ?>/<?php echo $j ?>"><<</a>

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
                                    <a href="<?php echo $base_url; ?>dealer/<?php echo url_rewite($dealer_row['dealer_name']); ?>/<?php echo $dealer_row['id']; ?>/<?php echo $i ?>"><?php echo $i ?></a>
                                    <?php
                                } else {
                                    echo "<span id='page_links' style='font-weight:bold;'>$i</span>";
                                }
								
                            }
                        } else {
                            for ($i = $start_count; $i <= $page_count; $i++) {
							
                                if ($i <> $page_id) {
                                    ?>
                                    <a href="<?php echo $base_url; ?>dealer/<?php echo url_rewite($dealer_row['dealer_name']); ?>/<?php echo $dealer_row['id']; ?>/<?php echo $i ?>"><?php echo $i ?></a>
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
                            <a href="<?php echo $base_url; ?>dealer/<?php echo url_rewite($dealer_row['dealer_name']); ?>/<?php echo $dealer_row['id']; ?>/<?php echo $j ?>">>></a>
                            <?php
                        }
                        ?>
                            
                    </div>
                    <?php }else if($page_count==0){?>
                    <div class="page-numeric">
                        <p>No products available</p>
                    </div>
                    <?php }?>
                    <!-- End Paging for products -->
<div><p><?php echo $dealer_row['dealer_description_bottom'] ?></p></div><br/><br/>
<div><p><?php echo $dealer_row['dealer_ad'] ?></p></div>
                </section>
                <!--category Page End -->