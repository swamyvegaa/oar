var $ = jQuery.noConflict();

function goToByScroll(id){
	if($().scrollTo) { jQuery.scrollTo($("#"+id), 400); }
}


//=============== Image Preloader Function ===============//

function image_preload(selector, parameters) {
	var params = {
		delay: 250,
		transition: 400,
		easing: 'linear'
	};
	$.extend(params, parameters);
		
	$(selector).each(function() {
		var image = $(this);
		image.css({visibility:'hidden', opacity: 0, display:'block'});
		image.wrap('<span class="preloader" />');
		image.one("load", function(evt) {
			$(this).delay(params.delay).css({visibility:'visible'}).animate({opacity: 1}, params.transition, params.easing, function() {
				$(this).unwrap('<span class="preloader" />');
			});
		}).each(function() {
			if(this.complete) $(this).trigger("load");
		});
	});
}


//=============== Tab Widget Function ===============//

function tab_widget(selector) {
    
    $( selector + " .tab_content").hide();
                    	
    $( selector + " ul.tabs li:first").addClass("active").show();
	
    $( selector + " .tab_content:first").show();
	
    $( selector + " ul.tabs li").click(function() {    
		
        $( selector + " ul.tabs li").removeClass("active");
		
        $(this).addClass("active");
		
        $( selector + " .tab_content").hide();
		
        var activeTab = $(this).find("a").attr("href");
        
        var $selectTab = $(this);
		
        $(activeTab).fadeIn(600,function(){
            if( $selectTab.parent().parent().hasClass("side_tabs") ) {
                if($().scrollTo) { jQuery.scrollTo(activeTab, 400, {offset:-30}); }
            }            
        });
		
        return false;
        
	});
    
}


$(document).ready(function() {
    
        
        //=============== Primary Menu ===============//
		
        $("#primary-menu ul").superfish({
            delay: 500,
            speed: 450,
			animation: {opacity:'show', height:'show'},
			autoArrows: false,
			dropShadows: false
        });
        
        
        $("#primary-menu ul ul li:has(ul)").children('a').addClass('has-sub-menu');
               
        
        //=============== Siblings Fader ===============//
        
        siblingsFader=function(){
		
            $(".flickr_badge_image").hover(function() {
    			$(this).siblings().stop().fadeTo(400,0.5);
    		}, function() {
    			$(this).siblings().stop().fadeTo(400,1);
    		});
		
        };
		siblingsFader();
        
        
        //=============== Image Preloader Call ===============//
        
        image_preload('.portfolio-image img');
        
        
        //=============== Image Hoverlay ===============//
        
        itemOverlay=function(){
        
            $(".portfolio-image,.entry_image,.related-projects a").hover(function() {
                var portImageW = $(this).width();
                var portImageL = Math.ceil( ( portImageW - 66 ) / 2 );
    			$(this).find('.item-overlay').stop().animate({opacity: 'show'}, 400);
                $(this).find('.item-overlay span').stop().animate({left: portImageL}, 400);
    		}, function() {
                $(this).find('.item-overlay span').stop().animate({left: '-66px'}, 400);
    			$(this).find('.item-overlay').stop().animate({opacity: 'hide'}, 400);
    		});
        
        };
		itemOverlay();
        
        
        //=============== Image Fade Function ===============//
		
        imgFade=function(){
		
            $('.imgfade,img.alignleft,img.alignnone,img.aligncenter,img.alignright,div.alignleft img,div.alignnone img,div.aligncenter img,div.alignright img').hover(function(){
    			$(this).filter(':not(:animated)').animate({opacity: 0.6}, 400);
    		}, function () {
    			$(this).animate({opacity: 1}, 400);
    		});
		
        };
		imgFade();
        
        
        //=============== Toggles ===============//
        
        $(".togglec").hide();
    	
    	$(".togglet").click(function(){
    	
    	   $(this).toggleClass("toggleta").next(".togglec").slideToggle("normal");
    	   return true;
        
    	});
        
        
        //=============== Accordions ===============//
        
        $('.acc-content').hide();
        
        $('.acc-title:first').addClass('acc-titlec').next().show();
        
        $('.acc-title').click(function(){
        
            if( $(this).next().is(':hidden') ) {
            
                $('.acc-title').removeClass('acc-titlec').next().slideUp("normal");
                $(this).toggleClass('acc-titlec').next().slideDown("normal");
            
            }
        
            return false;
        
        });
        
        
        //=============== Go to Top Control ===============//
		
        $(window).scroll(function() {
			if($(this).scrollTop() > 300) {
                $('#gotoTop').css('display','block');
				$('#gotoTop').stop().animate({opacity: 1});
			} else {
				$('#gotoTop').stop().animate({opacity: 0}, function(){
				    $(this).css('display','none');
                });
			}
		});
        
        
		$('#gotoTop').click(function() {
			$('body,html').animate({scrollTop:0},400);
            return false;
		});
        
        
        //=============== FitVids for Responsive Videos ===============//
        
        if ( $().fitVids ) { $(".fitVids").fitVids(); }
        
        
        //=============== Tipsy Tool Tips ===============//
        
        if ( $().tipsy ) {
            
            nTip=function(){ $('.ntip,.flickr_badge_image img').tipsy({gravity: 's', fade:true}); }; nTip();
    		sTip=function(){ $('.stip').tipsy({gravity: 'n', fade:true}); }; sTip();
    		eTip=function(){ $('.etip').tipsy({gravity: 'w', fade:true}); }; eTip();
    		wTip=function(){ $('.wtip').tipsy({gravity: 'e', fade:true}); }; wTip();
        
        }
        
        
        //=============== Top Hidden Area ===============//
        
                
        var tophidden = $('#top-area');
    	var tophiddenOn = $('#top-area-trigger');
    	
    	tophidden.css({
    		marginTop: -tophidden.outerHeight()
    	});
    	
    	var tophiddenState = 'close';
    	
    	tophiddenOn.toggle( function() {
    	
    		tophiddenState = 'open';
    		
    		tophiddenOn.removeClass('top-area-closed').addClass('top-area-opened');
    		
    		tophidden.animate({
    			marginTop: 0
    		}, 900, 'easeInOutQuart');
    		
    	}, function () {
    		
    		tophiddenState = 'close';
    		
    		tophiddenOn.removeClass('top-area-opened').addClass('top-area-closed');
    		
    		tophidden.animate({
    			marginTop: -tophidden.outerHeight()
    		}, 900, 'easeInOutQuart');
    		
    	});
        
        
        $(window).on("resize", function(){
            
            if( tophiddenState == 'close' ) {
            
                tophidden.css({
            		marginTop: -tophidden.outerHeight()
            	});
            
            }
         
         
        });
        
        
        //=============== Twitter Panel Feed ===============//
        
        var twitterUser = "envato"; // Change this to your Twitter Username
        
        $("#tweet-feed .tweet-feed-wrap p").load("functions/twitter.php?username=" + twitterUser);
        
                
        //=============== Lightbox Plugin ===============//
        
        if ( $().fancybox ) {
        
            initFancyBox=function(){
                
                $("a.triggerLightbox").fancybox({
            		'transitionIn'	:	'elastic',
            		'transitionOut'	:	'elastic',
            		'speedIn'		:	500,
            		'speedOut'		:	200
            	});
            
            };
            initFancyBox();
        
        }
        
        
        //=============== Responsiveness ===============//
        
        $('img').each(function(){
            
            $(this).removeAttr('width');
            $(this).removeAttr('height');
        
        });
        
        
        if($().mobileMenu) { $('#primary-menu > ul').mobileMenu(); }
        
        
        if($().uniform) { $("#primary-menu select").uniform({selectClass: 'responsive-menu'}); }
        
        
        //=============== Portfolio Loader ===============//
        
        var portfolioRevealer = $('#portfolio-revealer');
        var portfoliourl = "functions/portfolio.php";
        var portfolioItems = $('.ajax-portfolio .portfolio-item');
        
        
        $('.ajax-portfolio .portfolio-item .portfolio-image a').click( function(e) {
		
    		if( !$(this).parent().parent().hasClass('portfolio-revealed') ) {
    			portfolioItems.removeClass('portfolio-revealed');
    			$(this).parent().parent().addClass('portfolio-revealed');
    			var portPostId = $(this).parent().parent().attr('id').split('portfolio-')[1];
    			initiatePortfolio(portPostId);
    		}
    		e.preventDefault();
    		
    	});
        
        
        $('.ajax-portfolio .portfolio-item .portfolio-desc h3 a').click( function(e) {
		
    		if( !$(this).parent().parent().parent().hasClass('portfolio-revealed') ) {
    			portfolioItems.removeClass('portfolio-revealed');
    			$(this).parent().parent().parent().addClass('portfolio-revealed');
    			var portPostId = $(this).parent().parent().parent().attr('id').split('portfolio-')[1];
    			initiatePortfolio(portPostId);
    		}
    		e.preventDefault();
    		
    	});
        
        
        function newNextPrev(portPostId) {
		
    		var portNext = getNextPortfolio(portPostId);
    		var portPrev = getPrevPortfolio(portPostId);
    		$('#next-portfolio').attr('data-id', portNext);
    		$('#prev-portfolio').attr('data-id', portPrev);
    	}
        
        
        function initiatePortfolio(portPostId, getIt) {
		
    		if(!getIt) { getIt = false; }
    		var portNext = getNextPortfolio(portPostId);
    		var portPrev = getPrevPortfolio(portPostId);
    		if(getIt == false) {
    			var portfolioLoader = $('#portfolio-loader');
    			portfolioLoader.fadeIn(200);
    			closeRevealer();
    			portfolioRevealer.find('.portfolio-reveal-wrap').load(portfoliourl, { portid: portPostId, portnext: portNext, portprev: portPrev },
                function() {
    				initializePortfolio();
                    initializePortSlider();
                    initFancyBox();
                    $(".fitVids").fitVids();
    				openRevealer();
    				portfolioLoader.fadeOut(200);
    			});
    		}
            
    		if($().scrollTo) { jQuery.scrollTo('#portfolio-revealer', 400, {offset:-50}); }
            
    	}
        
        
        function closeRevealer() {
    		if( portfolioRevealer.height() != 0 ) {
    			portfolioRevealer.find('.portfolio-reveal-wrapper').stop(true).animate({ opacity: 0 }, 200);
    			portfolioRevealer.stop(true).animate({ height: 0 }, 500, 'easeOutQuad');
    		}
    	}
    	
    	
        function openRevealer() {
    		portfolioRevealer.stop(true).animate({ height: portfolioRevealer.find('#portfolio-reveal').outerHeight() }, 650, 'easeOutQuad', function () {
                portfolioRevealer.css({ height: 'auto' });
    		});
    	}
        
        
        function getNextPortfolio(portPostId) {
		
    		var portNext = $('#portfolio .portfolio-item').first().attr('id').split('portfolio-')[1];
    		var hasNext = $('#portfolio-' + portPostId).next();
    		if(hasNext.length != 0) {
                while( hasNext.hasClass('portfolio-item') == false && hasNext.length != 0 ) {
    				hasNext = hasNext.next();
    			}
    			if(hasNext.length != 0) {
    				var portNext = hasNext.attr('id').split('portfolio-')[1];
    			}
    		}
    		return portNext;

    	}
        
        
        function getPrevPortfolio(portPostId) {
		
    		var portPrev = jQuery('#portfolio .portfolio-item').last().attr('id').split('portfolio-')[1];
    		var hasPrev = jQuery('#portfolio-' + portPostId).prev();
    		if(hasPrev.length != 0) {
    			while( hasPrev.hasClass('portfolio-item') == false && hasPrev.length != 0 ) {
    				hasPrev = hasPrev.prev();
    			}
    			if(hasPrev.length != 0) {
    				var portPrev = hasPrev.attr('id').split('portfolio-')[1];
    			}
    		}
    		return portPrev;
            
    	}
        
        
        function initializePortfolio() {
            
            $('#next-portfolio, #prev-portfolio').click( function() {
                var portPostId = $(this).attr('data-id');
                portfolioItems.removeClass('portfolio-revealed');
    			$('#portfolio-' + portPostId).addClass('portfolio-revealed');
    			initiatePortfolio(portPostId);
    			return false;
    		});
    		$('#close-portfolio').click( function() {
    			portfolioRevealer.stop(true).animate({ height: 0 }, 500, 'easeOutQuad', function(){
                    portfolioRevealer.find('#portfolio-slider').remove();
    			});
                portfolioItems.removeClass('portfolio-revealed');
    			return false;
    		});
            
    	}
        
        
        initializePortSlider=function(){
        if($().flexslider) {
            
            $(".single-portfolio-image a").hover(function() {
                var portImageW = $(this).width();
                var portImageL = Math.ceil( ( portImageW - 66 ) / 2 );
    			$(this).find('.item-overlay').stop().animate({opacity: 'show'}, 400);
                $(this).find('.item-overlay span').stop().animate({left: portImageL}, 400);
    		}, function() {
                $(this).find('.item-overlay span').stop().animate({left: '-66px'}, 400);
    			$(this).find('.item-overlay').stop().animate({opacity: 'hide'}, 400);
    		});

            $(".single-portfolio-image .flexslider").flexslider({
                        
                selector: ".portfolio-slider-wrap > a",
                animation: "slide",
                easing: "easeOutExpo",
                direction: "horizontal",
                slideshowSpeed: 5000,
                animationSpeed: 550,
                slideshow: false,
                smoothHeight: true,
                pauseOnAction: true,
                pauseOnHover: true,
                useCSS: true,
                touch: true,
                video: true,
                controlNav: false,
                directionNav: true,
                keyboard: true
    		
            });
            
        }
        };
		initializePortSlider();
		
        
});