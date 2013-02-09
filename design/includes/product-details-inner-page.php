
<!--category Page Start -->
<div class="bread-crumb"><a href="<?php echo $base_url; ?>">Home</a><img src="<?php echo $base_url; ?>design/images/icons/bread-crumb-icon.png" /><a href="<?php echo $base_url;?>dealer/<?php echo url_rewite($dealer_data['dealer_name']);?>/<?php echo $dealer_data['id'];?>/1"><?php echo $dealer_data['dealer_name'];?></a><img src="<?php echo $base_url; ?>design/images/icons/bread-crumb-icon.png" /><a href="<?php echo $base_url; ?>products/<?php echo url_rewite($product_data['product_name'])?>/<?php echo url_rewite($product_data['id'])?>/1"><?php echo $product_data['product_name']?></a></div>
<div class="clear"></div>
<div class="product-details-box">
    <h1><?php echo $product_data['product_title']; ?></h1>
    <div class="full-width-brdr"></div>
    <div class="product-details-left">
        <a href="<?php echo $base_url; ?><?php echo $product_data['product_primary_image']; ?>" rel="lightbox"><img style="width:500px;height:500px" src="<?php echo $base_url; ?><?php echo str_replace('images/products/','images/products/primary/',$product_data['product_primary_image']); ?>" width="500" height="500"  /></a><br/><br/>
        <a href="<?php echo $base_url; ?>#"><img style="margin:5px 0px;" src="<?php echo $base_url; ?><?php echo $dealer_data['dealer_icon']; ?>"  /><br/>


            <a href="<?php echo $base_url; ?>#"><img style="margin:0px 10px 0px 0px;" src="<?php echo $base_url; ?>design/images/icons/dealer-storefront-button.jpg"  /></a>
            <a href="<?php echo $base_url; ?>#"><img style="margin:0px 10px 0px 10px;" src="<?php echo $base_url; ?>design/images/icons/contact-dealer-button.jpg"  /></a>
            <a href="<?php echo $base_url; ?>pop-up-window.html" target="_blank"><img style="margin:0px 10px 0px 10px;" src="<?php echo $base_url; ?>design/images/icons/print.jpg"  /></a>
            <br/><br/>
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_pinterest_pinit"></a>
                <a class="addthis_counter addthis_pill_style"></a>
            </div>
            <!--<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>-->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js"></script>
            <!-- AddThis Button END -->
            <div class="clear"></div>
            <br/>
            <h1><?php echo $product_data['product_title']; ?></h1>
            <br/>
            <div style="margin-top:15px; margin-bottom:15px;">
                <?php if (!empty($product_data['product_code'])) { ?><p><strong>Product Code: </strong><strong><?php echo $product_data['product_code']; ?></strong></p><br/><?php } ?>
            </div>
            <div style="margin-top:15px; margin-bottom:15px;">
                <?php if (!empty($product_data['product_sale_price'])) { ?><p><strong>Sale Price: </strong><strong><?php echo $product_data['product_sale_price']; ?></strong></p><br/><?php } ?>
                <?php if (!empty($product_data['product_offer_price'])) { ?><p><strong>Offer Price: </strong><strong><?php echo $product_data['product_offer_price']; ?></strong></p><br/><?php } ?>
                <?php if (!empty($product_data['product_call_for_fee'])) { ?><p><strong>Call for Price: </strong><strong><?php echo $product_data['product_call_for_fee']; ?></strong></p><br/><?php } ?>
            </div>
            <div style="margin-top:15px; margin-bottom:15px;">
                <?php if (!empty($product_data['product_period'])) { ?><p><strong>Period: </strong><strong><?php echo $product_data['product_period']; ?></strong></p><br/><?php } ?>
                <?php if (!empty($product_data['product_origin'])) { ?><p><strong>Origin: </strong><strong><?php echo $product_data['product_origin']; ?></strong></p><br/><?php } ?>
            </div>
            <div style="margin-top:15px; margin-bottom:15px;">
                <?php if (!empty($product_data['product_width'])) { ?><p><strong>Width: </strong><strong><?php echo $product_data['product_width']; ?></strong></p><br/><?php } ?>
                <?php if (!empty($product_data['product_height'])) { ?><p><strong>Height: </strong><strong><?php echo $product_data['product_height']; ?></strong></p><br/><?php } ?>
                <?php if (!empty($product_data['product_depth'])) { ?><p><strong>Depth: </strong><strong><?php echo $product_data['product_depth']; ?></strong></p><br/><?php } ?>
                <?php if (!empty($product_data['product_weight'])) { ?><p><strong>Weight: </strong><strong><?php echo $product_data['product_weight']; ?></strong></p><br/><?php } ?>
            </div>
            <div style="margin-top:15px; margin-bottom:15px;">
                <?php if (!empty($product_data['product_instock_qty'])) { ?><p><strong>Number of Items: </strong><strong><?php echo $product_data['product_instock_qty']; ?></strong></p><br/><?php } ?>
                <?php if (!empty($product_data['product_condition'])) { ?><p><strong>Condition: </strong><strong><?php echo $product_data['product_condition']; ?></strong></p><br/><?php } ?>

                <?php if ($product_data['product_on_hold'] = 1) { ?>
                    <p><img src="<?php echo $base_url; ?>design/images/icons/on-hold.jpg"/></p><br/>
                <?php } else if ($product_data['product_sold'] = 1) { ?>
                    <p><img src="<?php echo $base_url; ?>design/images/icons/sold.jpg"/></p><br/>
                <?php } ?>
            </div>
            <div style="margin-top:15px; margin-bottom:15px;">
                <?php if (!empty($product_data['product_shipping_price'])) { ?><p><strong>Shipping Price: </strong><strong><?php echo $product_data['product_shipping_price']; ?></strong></p><br/><?php } ?>
                <?php if (!empty($product_data['product_free_shipping'])) { ?><p><strong>Free Shipping: </strong><strong><?php echo $product_data['product_free_shipping']; ?></strong></p><br/><?php } ?>
            </div>
            <p>
                <!-- Product Overview -->
                <?php if (!empty($product_data['product_overview'])) { ?>
                    <strong>Product Overview:</strong><br/>
                    <?php echo $product_data['product_overview']; ?>
                    <br/><br/>
                <?php } ?>
                <!-- End of Product Overview -->
                <!-- Product Description -->
                <?php if (!empty($product_data['product_description'])) { ?>
                    <strong>Product Description:</strong><br/>
                    <?php echo $product_data['product_description']; ?>
                    <br/><br/>
                <?php } ?>
                <!-- End of Product Description -->
                <!-- Product Additional Information -->
                <?php if (!empty($product_data['product_additional_information'])) { ?>
                    <strong>Product Additional Information:</strong><br/>
                    <?php echo $product_data['product_additional_information']; ?>
                    <br/><br/>
                <?php } ?>
                <!-- End of Product Additional Information -->
                <!-- Product Dealer Information -->
                <?php if (!empty($dealer_data['dealer_store_name'])) { ?>
                    <strong>Dealer Information:</strong><br/>
                    <?php echo $dealer_data['dealer_store_name']; ?><br/>
                    <?php echo $dealer_data['dealer_city']; ?>, 
                    <?php echo $dealer_data['dealer_state']; ?>, 
                    <?php echo $dealer_data['dealer_zip_code']; ?><br/>
                    <?php echo $dealer_data['dealer_country']; ?><br/>
                <?php } ?><br/><br/>
                <!-- End of Product Dealer Information -->
            </p>
    </div>
    <!-- Product details right -->
    <div class="product-details-right">
        <?php
        $product_secondary_images = "select product_secondary_image from product_secondary_images where product_id=" . $product_id;
        $product_secondary_image_data = $db->getRows($product_secondary_images);
		//print_r($product_secondary_image_data);
		//exit;

        foreach ($product_secondary_image_data as $key => $value) {
//print_r($product_secondary_image_data);
//exit;
            ?>
            <a href="<?php echo $base_url; ?><?php echo $value['product_secondary_image']; ?>" rel="lightbox">
                <img src="<?php echo $base_url; ?><?php echo str_replace('images/products/secondary/','images/products/secondary_thumb/',$value['product_secondary_image']); ?>"  /></a>
        <?php } ?>
    </div>
    <!-- End of Product details right -->

    <div class="clear"></div>
    <h4>Other Items You May Like:</h4>
    <div class="full-width-brdr"></div>
    <div class="featured-products-list">

        <?php
        /*if ($page['0'] == 'category') {
            $category_products = "select * from products where product_primary_category=" . $product_data['product_primary_category'] . " or product_secodary_category=" . $product_data['product_secodary_category'] . " and product_status=1";
            $category_products_data = $db->getRows($category_products);
            //print_r($category_products_data);
            //exit;
            $i = 1;
            foreach ($category_products_data as $key => $value) {
                if ($i == 1) {
                    echo '<div><ul>';
                }
                ?>

                <li><a href="<?php echo $base_url; ?>category/product-details/<?php echo url_rewite($value['product_name']); ?>/<?php echo url_rewite($value['id']); ?>/1"><img src="<?php echo $base_url; ?><?php echo $value['product_primary_image']; ?>"  /></a>
                    <span class="details"><a href="<?php echo $base_url; ?>category/product-details/<?php echo url_rewite($value['product_name']); ?>/<?php echo url_rewite($value['id']); ?>/1"><?php echo $value['product_name']; ?></a><br/><?php echo $value['product_sale_price']; ?></span>
                </li>
                <?php
                $i = $i + 1;
                if ($i == 8) {
                    echo '</ul></div>';
                    $i = 1;
                }
            }
        } else if ($page['0'] == 'dealer') {*/
            $dealer_products = "select * from products where product_dealer=" . $product_data['product_dealer'] . " and product_status=1 limit 8";
            $dealer_products_data = $db->getRows($dealer_products);
            $i = 1;

            foreach ($dealer_products_data as $key => $value) {
                if ($i == 1) {
                    echo '<div><ul>';
                }
                ?>
                <li><a href="<?php echo $base_url; ?>products/<?php echo url_rewite($value['product_name']); ?>/<?php echo url_rewite($value['id']); ?>"><img src="<?php echo $base_url; ?><?php echo str_replace('images/products/','images/products/thumb/',$value['product_primary_image']); ?>"  /></a>
                    <!--<span class="details"><a href="<?php //echo $base_url; ?>dealer/product-details/<?php //echo url_rewite($value['product_name']); ?>/<?php //echo url_rewite($value['id']); ?>/1"><?php //echo $value['product_name']; ?></a><br/><?php //echo $value['product_sale_price']; ?></span>-->
                </li>
                <?php
                $i = $i + 1;
                if ($i == 8) {
                    echo '</ul></div>';
                    $i = 1;
                }
            }
        //}
        ?>


    </div>
</div>

<!--Product Details Page End -->