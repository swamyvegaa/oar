<!--category Page Start -->
<div class="bread-crumb"><a href="">Home</a><img src="<?php echo $base_url; ?>design/images/icons/bread-crumb-icon.png" /><a href="<?php echo $base_url; ?>designers">Designers</a></div>
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
<h4>Designers</h4>
<div class="full-width-brdr"></div>
<div class="category-page-alphabet">
<p>Coming soon</p>
<!--<a href="#">#</a>
<a href="#">A</a>
<a href="#">B</a>
<a href="#">C</a>
<a href="#">D</a>
<a href="#">E</a>
<a href="#">F</a>
<a href="#">G</a>
<a href="#">H</a>
<a href="#">I</a>
<a href="#">J</a>
<a href="#">K</a>
<a href="#">L</a>
<a href="#">M</a>
<a href="#">N</a>
<a href="#">O</a>
<a href="#">P</a>
<a href="#">Q</a>
<a href="#">R</a>
<a href="#">S</a>
<a href="#">T</a>
<a href="#">U</a>
<a href="#">V</a>
<a href="#">W</a>
<a href="#">X</a>
<a href="#">Y</a>
<a href="#">Z</a>
</div>
<div id="designer-page-leftside">
<div class="img-box-225"><a href="<?php echo $base_url; ?>designer-profile.php"><img src="<?php echo $base_url; ?>design/images/designer-225-img-1.jpg" /></a></div>
<div class="img-box-170"><a href="<?php echo $base_url; ?>designer-profile.php"><img src="<?php echo $base_url; ?>design/images/designer-170-img-1.jpg" /></a></div>
<div class="text-box-340">
<h3>Rubelli</h3><h4>Chicago, IL</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<!--<div class="view-profile-btn clearfix"><a href="<?php echo $base_url; ?>designer-profile.php" title="">View Profile</a></div> -->
<!--<a href="<?php echo $base_url; ?>designer-profile.php"><img src="<?php echo $base_url; ?>design/images/icons/view-profile-button.jpg" style="border:0; float:right; margin-top:35px;" /></a>
</div>
</div>

<div id="designer-page-leftside">
<div class="img-box-225"><img src="<?php echo $base_url; ?>design/images/designer-225-img-2.jpg" /></div>
<div class="img-box-170"><img src="<?php echo $base_url; ?>design/images/designer-170-img-2.jpg" /></div>
<div class="text-box-340">
<h3>Rubelli</h3><h4>Chicago, IL</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<a href="<?php echo $base_url; ?>designer-profile.php"><img src="<?php echo $base_url; ?>design/images/icons/view-profile-button.jpg" style="border:0; float:right; margin-top:35px;" /></a>
</div>
</div>

<div id="designer-page-leftside">
<div class="img-box-225"><img src="<?php echo $base_url; ?>design/images/designer-225-img-3.jpg" /></div>
<div class="img-box-170"><img src="<?php echo $base_url; ?>design/images/designer-170-img-3.jpg" /></div>
<div class="text-box-340">
<h3>Rubelli</h3><h4>Chicago, IL</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<a href="<?php echo $base_url; ?>designer-profile.php"><img src="<?php echo $base_url; ?>design/images/icons/view-profile-button.jpg" style="border:0; float:right; margin-top:35px;" /></a>
</div>
</div>

<div id="designer-page-leftside">
<div class="img-box-225"><img src="<?php echo $base_url; ?>design/images/designer-225-img-4.jpg" /></div>
<div class="img-box-170"><img src="<?php echo $base_url; ?>design/images/designer-170-img-4.jpg" /></div>
<div class="text-box-340">
<h3>Rubelli</h3><h4>Chicago, IL</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<a href="<?php echo $base_url; ?>designer-profile.php"><img src="<?php echo $base_url; ?>design/images/icons/view-profile-button.jpg" style="border:0; float:right; margin-top:35px;" /></a>
</div>
</div>

<div id="designer-page-leftside">
<div class="img-box-225"><img src="<?php echo $base_url; ?>design/images/designer-225-img-5.jpg" /></div>
<div class="img-box-170"><img src="<?php echo $base_url; ?>design/images/designer-170-img-5.jpg" /></div>
<div class="text-box-340">
<h3>Rubelli</h3><h4>Chicago, IL</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<a href="<?php echo $base_url; ?>designer-profile.php"><img src="<?php echo $base_url; ?>design/images/icons/view-profile-button.jpg" style="border:0; float:right; margin-top:35px;" /></a>
</div>
</div>

<div id="designer-page-leftside">
<div class="img-box-225"><img src="<?php echo $base_url; ?>design/images/designer-225-img-6.jpg" /></div>
<div class="img-box-170"><img src="<?php echo $base_url; ?>design/images/designer-170-img-6.jpg" /></div>
<div class="text-box-340">
<h3>Rubelli</h3><h4>Chicago, IL</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<a href="<?php echo $base_url; ?>designer-profile.php"><img src="<?php echo $base_url; ?>design/images/icons/view-profile-button.jpg" style="border:0; float:right; margin-top:35px;" /></a>
</div>
</div>

<div id="designer-page-leftside">
<div class="img-box-225"><img src="<?php echo $base_url; ?>design/images/designer-225-img-7.jpg" /></div>
<div class="img-box-170"><img src="<?php echo $base_url; ?>design/images/designer-170-img-7.jpg" /></div>
<div class="text-box-340">
<h3>Rubelli</h3><h4>Chicago, IL</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<a href="<?php echo $base_url; ?>designer-profile.php"><img src="<?php echo $base_url; ?>design/images/icons/view-profile-button.jpg" style="border:0; float:right; margin-top:35px;" /></a>
</div>
</div>

<div id="designer-page-leftside">
<div class="img-box-225"><img src="<?php echo $base_url; ?>design/images/designer-225-img-8.jpg" /></div>
<div class="img-box-170"><img src="<?php echo $base_url; ?>design/images/designer-170-img-8.jpg" /></div>
<div class="text-box-340">
<h3>Rubelli</h3><h4>Chicago, IL</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<a href="<?php echo $base_url; ?>designer-profile.php"><img src="<?php echo $base_url; ?>design/images/icons/view-profile-button.jpg" style="border:0; float:right; margin-top:35px;" /></a>
</div>
</div>

<div id="designer-page-leftside">
<div class="img-box-225"><img src="<?php echo $base_url; ?>design/images/designer-225-img-9.jpg" /></div>
<div class="img-box-170"><img src="<?php echo $base_url; ?>design/images/designer-170-img-9.jpg" /></div>
<div class="text-box-340">
<h3>Rubelli</h3><h4>Chicago, IL</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<a href="<?php echo $base_url; ?>designer-profile.php"><img src="<?php echo $base_url; ?>design/images/icons/view-profile-button.jpg" style="border:0; float:right; margin-top:35px;" /></a>
</div>
</div>

<div id="designer-page-leftside">
<div class="img-box-225"><img src="<?php echo $base_url; ?>design/images/designer-225-img-10.jpg" /></div>
<div class="img-box-170"><img src="<?php echo $base_url; ?>design/images/designer-170-img-10.jpg" /></div>
<div class="text-box-340">
<h3>Rubelli</h3><h4>Chicago, IL</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<a href="<?php echo $base_url; ?>designer-profile.php"><img src="<?php echo $base_url; ?>design/images/icons/view-profile-button.jpg" style="border:0; float:right; margin-top:35px;" /></a>
</div>
</div>

<div class="category-page-alphabet">
<a href="#">#</a>
<a href="#">A</a>
<a href="#">B</a>
<a href="#">C</a>
<a href="#">D</a>
<a href="#">E</a>
<a href="#">F</a>
<a href="#">G</a>
<a href="#">H</a>
<a href="#">I</a>
<a href="#">J</a>
<a href="#">K</a>
<a href="#">L</a>
<a href="#">M</a>
<a href="#">N</a>
<a href="#">O</a>
<a href="#">P</a>
<a href="#">Q</a>
<a href="#">R</a>
<a href="#">S</a>
<a href="#">T</a>
<a href="#">U</a>
<a href="#">V</a>
<a href="#">W</a>
<a href="#">X</a>
<a href="#">Y</a>
<a href="#">Z</a>
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
<a href="#">>></a>-->
</div>
</section>
<!--category Page End -->