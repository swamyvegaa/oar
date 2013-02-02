<?php


header ("Content-Type:text/css");


/** ===============================================================
 *
 *      Edit your Color Configurations below:
 *      You should only enter 6-Digits HEX Colors.
 *
 ================================================================== */


$color = "#D20C0C"; // Change this to your desired HEX Value for the Color Scheme of your Website.

$topbar = "#333333"; // Change this to your desired HEX Value for the Top Bar of your Website.

$topmenu = "#FFFFFF"; // Change this to your desired HEX Value for the Top Menu Bar of your Website.

$menu = "#444444"; // Change this to your desired HEX Value for the Primary Menu of your Website.

$footer = "#444444"; // Change this to your desired HEX Value for the Footer of your Website.

$copyrights = "#333333"; // Change this to your desired HEX Value for the Copyrights Area of your Website.


/** ===============================================================
 *
 *      Do not Edit anything below this line if you do not know
 *      what you are trying to do..!
 *
 ================================================================== */


function checkhexcolor($color) {

    return preg_match('/^#[a-f0-9]{6}$/i', $color);

}


/** ===============================================================
 *
 *      Primary Color Scheme
 *
 ================================================================== */


if( isset( $_GET[ 'color' ] ) AND $_GET[ 'color' ] != '' ):

    $color = "#" . $_GET[ 'color' ];
    
endif;

if( !$color OR !checkhexcolor( $color ) ) {
    
    $color = "#D20C0C";
    
}


/** ===============================================================
 *
 *      Top Promotional Bar Area Color
 *
 ================================================================== */


if( isset( $_GET[ 'topbar' ] ) AND $_GET[ 'topbar' ] != '' ):

    $topbar = "#" . $_GET[ 'topbar' ];

endif;

if( !$topbar OR !checkhexcolor( $topbar ) ) {
    
    $topbar = "#333333";
    
}


/** ===============================================================
 *
 *      Top Menu Area Color
 *
 ================================================================== */


if( isset( $_GET[ 'topmenu' ] ) AND $_GET[ 'topmenu' ] != '' ):

    $topmenu = "#" . $_GET[ 'topmenu' ];

endif;

if( !$topmenu OR !checkhexcolor( $topmenu ) ) {
    
    $topmenu = "#444444";
    
}


/** ===============================================================
 *
 *      Primary Menu Area Color
 *
 ================================================================== */


if( isset( $_GET[ 'menu' ] ) AND $_GET[ 'menu' ] != '' ):

    $menu = "#" . $_GET[ 'menu' ];

endif;

if( !$menu OR !checkhexcolor( $menu ) ) {
    
    $menu = "#444444";
    
}


/** ===============================================================
 *
 *      Footer Area Color
 *
 ================================================================== */


if( isset( $_GET[ 'footer' ] ) AND $_GET[ 'footer' ] != '' ):

    $footer = "#" . $_GET[ 'footer' ];

endif;

if( !$footer OR !checkhexcolor( $footer ) ) {
    
    $footer = "#444444";
    
}


/** ===============================================================
 *
 *      Copyrights Area Color
 *
 ================================================================== */


if( isset( $_GET[ 'copyrights' ] ) AND $_GET[ 'copyrights' ] != '' ):

    $copyrights = "#" . $_GET[ 'copyrights' ];

endif;

if( !$copyrights OR !checkhexcolor( $copyrights ) ) {
    
    $copyrights = "#333333";
    
}


?>


/* ----------------------------------------------------------------
    Content Areas Background Colors
-----------------------------------------------------------------*/


#top-area { background-color: <?php echo $topbar; ?>; }


#top-bar { background-color: <?php echo $topmenu; ?>; }


#primary-menu,
#primary-menu ul ul { background-color: <?php echo $menu; ?>; }


#footer { background-color: <?php echo $footer; ?>; }


#copyrights { background-color: <?php echo $copyrights; ?>; }


/* ----------------------------------------------------------------
    Colors
-----------------------------------------------------------------*/


a,
.portfolio-item:hover .portfolio-desc a,
.home-post-content h5 a:hover,
.faq-category h4:hover a { color: <?php echo $color; ?>; }


/* ----------------------------------------------------------------
    Background Colors
-----------------------------------------------------------------*/


.top-area-wrap a:hover,
a#top-area-trigger,
.pagination a:hover,
#portfolio-filter li a,
#home-portfolio-pagination a.selected,
.entry_date:hover,
.home-post-img a:hover,
img.alignleft:hover,
img.alignnone:hover,
img.aligncenter:hover,
img.alignright:hover,
.wp-caption img:hover,
.faq-category h4:hover a span,
.classic-button:hover,
#gotoTop,
a.twitter-follow-me,
.tagcloud a:hover,
#footer .tagcloud a:hover { background-color: <?php echo $color; ?>; }


/* ----------------------------------------------------------------
    Border Colors
-----------------------------------------------------------------*/


.portfolio-item:hover .portfolio-image,
.portfolio-item:hover .portfolio-desc,
.related-projects a:hover,
.entry_image a:hover,
input:active,
textarea:active,
select:active,
input:focus,
textarea:focus,
select:focus,
.flickr-widget-wrap .flickr_badge_image img:hover,
.posts-widget li .post_image img:hover,
#footer .flickr_badge_image img:hover,
#footer .posts-widget li .post_image img:hover { border-color: <?php echo $color; ?>; }


#top-bar,
#primary-menu > ul > li.current,
#primary-menu > ul > li.current-menu-ancestor,
#primary-menu > ul > li.current-menu-parent,
#primary-menu > ul > li.current-menu-item,
#primary-menu > ul > li.current_page_parent,
.slide .slide-caption { border-top-color: <?php echo $color; ?>; }


/* ----------------------------------------------------------------
    Box Shadow Colors
-----------------------------------------------------------------*/


input:active,
textarea:active,
select:active,
input:focus,
textarea:focus,
select:focus {
    box-shadow: 0px 0px 4px <?php echo $color; ?>;
    -moz-box-shadow: 0px 0px 4px <?php echo $color; ?>;
	-webkit-box-shadow: 0px 0px 4px <?php echo $color; ?>;
}


/* ----------------------------------------------------------------
    Selection Colors
-----------------------------------------------------------------*/


::selection,
::-moz-selection,
::-webkit-selection { background-color: <?php echo $color; ?>; }