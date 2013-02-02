<?php


$nextid = $_POST['portnext'];
$previd = $_POST['portprev'];
$postid = $_POST['portid'];


$portfolio = array();


$portfolio['title'] = ''; // Portfolio Project Title
$portfolio['desc'] = ''; // Portfolio Project Description
$portfolio['client'] = ''; // Portfolio Project Client Name
$portfolio['link'] = ''; // Portfolio Project URL. Do not forget to include http://
$portfolio['date'] = ''; // Portfolio Project Date
$portfolio['image'] = ''; // Portfolio Image. The Dimensions of the Image will be 660px in Width & anything in Height.
$portfolio['video'] = ''; // Portfolio Project Video Embed Code. The Width of the Video should not exceed 660px.
$portfolio['gallery'] = ''; // Portfolio Images. The Width of the Image should not exceed 660px. The Height of the Image can be variable. To use a Gallery enter multiple images. Eg. <a href="http://google.com"><img src="img1.jpg" /></a> etc.


if( isset( $postid ) AND $postid != '' ):

    
    switch( $postid ):
    
    
        case 1:
        
            $portfolio['title'] = 'New York Wall Street';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['image'] = '<a href="images/portfolio/single/1.jpg" class="triggerLightbox">
                            
                                <img src="images/portfolio/single/1.jpg" alt="New York Wall Street" title="New York Wall Street" />
                                
                                <div class="item-overlay overlay-icon-pic"><span></span></div>
                                
                            </a>';
        
        break;
        
        
        case 2:
        
            $portfolio['title'] = 'Balcony View';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['image'] = '<a href="images/portfolio/single/1.jpg" class="triggerLightbox">
                            
                                <img src="images/portfolio/single/1.jpg" alt="New York Wall Street" title="New York Wall Street" />
                                
                                <div class="item-overlay overlay-icon-pic"><span></span></div>
                                
                            </a>';
        
        break;
        
        
        case 3:
        
            $portfolio['title'] = 'Seaside Stroll (Video Embed)';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['video'] = '<iframe src="http://player.vimeo.com/video/40675833?title=0&amp;byline=0&amp;portrait=0" width="660" height="371" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
        
        break;
        
        
        case 4:
        
            $portfolio['title'] = 'Crossroads';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['image'] = '<a href="images/portfolio/single/1.jpg" class="triggerLightbox">
                            
                                <img src="images/portfolio/single/1.jpg" alt="New York Wall Street" title="New York Wall Street" />
                                
                                <div class="item-overlay overlay-icon-pic"><span></span></div>
                                
                            </a>';
        
        break;
        
        
        case 5:
        
            $portfolio['title'] = 'Scintillating Dubai (Image Gallery)';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['gallery'] = '<a href="images/portfolio/single/4.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/4.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/6.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/6.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/7.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/7.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/8.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/8.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>';
        
        break;
        
        
        case 6:
        
            $portfolio['title'] = 'Glorious Streets (Video Embed)';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['video'] = '<iframe src="http://player.vimeo.com/video/40675833?title=0&amp;byline=0&amp;portrait=0" width="660" height="371" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
        
        break;
        
        
        case 7:
        
            $portfolio['title'] = 'Broad Way';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['image'] = '<a href="images/portfolio/single/1.jpg" class="triggerLightbox">
                            
                                <img src="images/portfolio/single/1.jpg" alt="New York Wall Street" title="New York Wall Street" />
                                
                                <div class="item-overlay overlay-icon-pic"><span></span></div>
                                
                            </a>';
        
        break;
        
        
        case 8:
        
            $portfolio['title'] = 'Circular Maze (Image Gallery)';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['gallery'] = '<a href="images/portfolio/single/4.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/4.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/6.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/6.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/7.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/7.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/8.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/8.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>';
        
        break;
        
        
        case 9:
        
            $portfolio['title'] = 'Sleeping Wanderer';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['image'] = '<a href="images/portfolio/single/1.jpg" class="triggerLightbox">
                            
                                <img src="images/portfolio/single/1.jpg" alt="New York Wall Street" title="New York Wall Street" />
                                
                                <div class="item-overlay overlay-icon-pic"><span></span></div>
                                
                            </a>';
        
        break;
        
        
        case 10:
        
            $portfolio['title'] = 'The Apple Store (Video Embed)';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['video'] = '<iframe src="http://player.vimeo.com/video/40675833?title=0&amp;byline=0&amp;portrait=0" width="660" height="371" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
        
        break;
        
        
        case 11:
        
            $portfolio['title'] = 'Ground Zero';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['image'] = '<a href="images/portfolio/single/1.jpg" class="triggerLightbox">
                            
                                <img src="images/portfolio/single/1.jpg" alt="New York Wall Street" title="New York Wall Street" />
                                
                                <div class="item-overlay overlay-icon-pic"><span></span></div>
                                
                            </a>';
        
        break;
        
        
        case 12:
        
            $portfolio['title'] = 'Pitt Street (Image Gallery)';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['gallery'] = '<a href="images/portfolio/single/4.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/4.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/6.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/6.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/7.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/7.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/8.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/8.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>';
        
        break;
        
        
        case 13:
        
            $portfolio['title'] = 'Raffles City Development (Image Gallery)';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['gallery'] = '<a href="images/portfolio/single/4.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/4.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/6.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/6.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/7.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/7.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/8.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/8.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>';
        
        break;
        
        
        case 14:
        
            $portfolio['title'] = 'Sydney Meriton View';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['image'] = '<a href="images/portfolio/single/1.jpg" class="triggerLightbox">
                            
                                <img src="images/portfolio/single/1.jpg" alt="New York Wall Street" title="New York Wall Street" />
                                
                                <div class="item-overlay overlay-icon-pic"><span></span></div>
                                
                            </a>';
        
        break;
        
        
        case 15:
        
            $portfolio['title'] = 'The Downer Macquarie (Video Embed)';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['video'] = '<iframe src="http://player.vimeo.com/video/40675833?title=0&amp;byline=0&amp;portrait=0" width="660" height="371" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
        
        break;
        
        
        case 16:
        
            $portfolio['title'] = 'Vaci Utca (Image Gallery)';
            $portfolio['desc'] = 'Bulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aenean sagittis diam vel enim tempus sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis.';
            $portfolio['client'] = 'Google Inc.';
            $portfolio['link'] = 'http://google.com/analytics';
            $portfolio['date'] = '26th May 2012';
            $portfolio['gallery'] = '<a href="images/portfolio/single/4.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/4.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/6.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/6.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/7.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/7.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>
                                    
                                    <a href="images/portfolio/single/8.jpg" class="triggerLightbox">
                                    
                                        <img src="images/portfolio/single/8.jpg" alt="Glorious Streets" title="Glorious Streets" />
                                        
                                        <div class="item-overlay overlay-icon-pic"><span></span></div>
                                        
                                    </a>';
        
        break;
    
    
    endswitch;
    

endif;


?>

<div class="portfolio-details-wrapper clearfix">


    <div id="page-title" class="clearfix">


        <h1><?php echo $portfolio['title']; ?></h1>
        
        
        <div class="portfolio-navigation">
        
        
            <?php if( $previd ){ ?><a id="prev-portfolio" href="#" class="portfolio-prev" title="Previous Item" data-id="<?php echo $previd; ?>">Previous Item</a><?php } ?>

            <?php if( $nextid ){ ?><a id="next-portfolio" href="#" class="portfolio-next" title="Next Item" data-id="<?php echo $nextid; ?>">Next Item</a><?php } ?>
            
            <a id="close-portfolio" href="#" class="portfolio-close" title="Close">Close Portfolio Item</a>
        
        
        </div>
    
    
    </div>
    
    
    <div class="clear"></div>
    
    
    <div class="postcontent nobottommargin">
                    
                        
        <div class="single-portfolio-image">
        
        <?php
            
                
            if( $portfolio['gallery'] != '' ):
            
        ?>
        
            <div id="portfolio-slider">
                            
                            
                <div class="flexslider">
                
                
                    <div class="portfolio-slider-wrap">
        
        <?php                        
            
                echo $portfolio['gallery'];
                
        ?>
        
                    </div>
                    
                    
                </div>
                
            
            </div>
        
        <?php
            
            elseif( $portfolio['video'] != '' ):
            
                echo $portfolio['video'];
            
            elseif( $portfolio['image'] != '' ):
            
                echo $portfolio['image'];
            
            endif;
                            
        
        ?>
        
        </div>
                                
    
    </div>
    
    
    <div class="portfolio-meta nobottommargin col_last">
                    
                    
        <div class="single-portfolio-description">
        
            
            <ul>
            
                
                <?php if( $portfolio['desc'] != '' ): ?>
                <li>
                
                    <h4>Description</h4>
            
                    <p><?php echo $portfolio['desc']; ?></p>
                
                </li>
                <?php endif; ?>
                
                
                <?php if( $portfolio['date'] != '' ): ?>
                <li>
                
                    <h4>Date Completed</h4>
            
                    <p><?php echo $portfolio['date']; ?></p>
                
                </li>
                <?php endif; ?>
                
                
                <?php if( $portfolio['client'] != '' ): ?>
                <li>
                
                    <h4>Client</h4>
            
                    <p><?php echo $portfolio['client']; ?></p>
                
                </li>
                <?php endif; ?>
                
                
                <?php if( $portfolio['link'] != '' ): ?>
                <li>
                
                    <h4>Project URL</h4>
            
                    <a href="<?php echo $portfolio['link']; ?>" target="_blank"><?php echo $portfolio['link']; ?></a>
                
                </li>
                <?php endif; ?>
            
            
            </ul>
        
        
        </div>
    

    </div>
    
    
    <div class="clear"></div>
    

</div>