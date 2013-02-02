<!--Google Fonts Link Style Starts Here: -->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

<!--Google Fonts Link Style Ends Here: -->

<link rel="stylesheet" href="design/css/style.css" type="text/css" />
<link rel="stylesheet" href="design/css/oar-style.css" type="text/css" />
<link rel="stylesheet" href="design/css/tipsy.css" type="text/css" />
<link rel="stylesheet" href="design/images/fancybox/jquery.fancybox.css" type="text/css" />
<!--<link rel="stylesheet" href="design/css/responsive.css" type="text/css" />-->

<link rel="stylesheet" href="design/images/flexslider.css" type="text/css" />
<link rel="stylesheet" href="design/css/gallery-style.css" type="text/css" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


<script type="text/javascript" src="design/scripts/jquery.js"></script>
<script type="text/javascript" src="design/scripts/jquery.easing.js"></script>
<script type="text/javascript" src="design/scripts/superfish.js"></script>
<script type="text/javascript" src="design/scripts/jquery.fitvids.js"></script>
<script type="text/javascript" src="design/scripts/accordion.js"></script>

<script type="text/javascript" src="design/scripts/jquery.flexslider.js"></script>
<script type="text/javascript" src="design/scripts/amazon_scroller.js"></script>
<script type="text/javascript" src="design/scripts/jquery.ad-gallery.js"></script>
<script type="text/javascript" src="design/scripts/treeMenu.js"></script>

<script type="text/javascript" src="design/scripts/lightbox-01.js"></script>
<style type="text/css">
#lightbox{
	background-color:#eaeaea;
	padding: 10px;
	box-shadow:0 0 10px rgba(0, 0, 0, 0.5);
	}
#lightboxDetails{
	font-size: 0.8em;
	padding-top: 0.4em;
	}	
#lightboxCaption{ float: left; }
#keyboardMsg{ float: right; }
#closeButton{ top: 5px; right: 5px; }

#lightbox img{ border: none; clear: both;} 
#overlay img{ border: none; }

#overlay{ background-image: url(overlay.png); }

* html #overlay{
	background-color: #333;
	back\ground-color: transparent;
	background-image: url(blank.gif);
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="images/overlay.png", sizingMethod="scale");
	}
</style>




<script type="text/javascript">
$(function() {
    $('img.image1').data('ad-desc', '');
    $('img.image1').data('ad-title', '');
    $('img.image4').data('ad-desc', '');
    $('img.image5').data('ad-desc', '');
    var galleries = $('.ad-gallery').adGallery();
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
     }
);
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
});
</script>

<script type="text/javascript" language="javascript" src="jquery-acc.js"></script>
<script type="text/javascript">
<!--//---------------------------------+
//  Developed by Roshan Bhattarai 
//  Visit http://roshanbh.com.np for this script and more.
//  This notice MUST stay intact for legal use
// --------------------------------->
$(document).ready(function()
{
	//slides the element with class "menu_body" when paragraph with class "menu_head" is clicked 
	$("#firstpane p.menu_head").click(function()
    {
		$(this).css({backgroundImage:"url(design/images/icons/down.png)"}).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
       	$(this).siblings().css({backgroundImage:"url(design/images/icons/left.png)"});
	});
	//slides the element with class "menu_body" when mouse is over the paragraph
	$("#secondpane p.menu_head").mouseover(function()
    {
	     $(this).css({backgroundImage:"url(design/images/icons/down.png)"}).next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
         $(this).siblings().css({backgroundImage:"url(design/images/icons/left.png)"});
	});
});
</script>




<script type="text/javascript">
ddaccordion.init({
headerclass: "submenuheader", //Shared CSS class name of headers group
contentclass: "submenu", //Shared CSS class name of contents group
revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
animatedefault: false, //Should contents open by default be animated into view?
persiststate: true, //persist state of opened contents within browser session?
toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
togglehtml: ["suffix", "<img src='design/images/icons/plus.png' class='statusicon' />", "<img src='design/images/icons/minus.png' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
animatespeed: "slow", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
//do nothing
},
onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
//do nothing
}
})
</script>





