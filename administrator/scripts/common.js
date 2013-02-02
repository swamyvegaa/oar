$(function(){
	$('.top-navigation > li:last,.navigation > li:last,.footer > li:last,.left-nav > li:last').addClass('last');
	$('.top-navigation li').hover(function(){
		$('ul',this).stop().show();
	},function(){
		$('ul',this).stop().hide();
	})
	$('.groups').hover(function(){
		$('ul',this).stop().show();
	},function(){
		$('ul',this).stop().hide();
	});
	$.myPlugin.cycle();

	$('.bimg').hide().eq(0).show();	
	$(".bimg").each(function(){
		$("#pagination").append($("<a>").attr("href", "javascript:void(0)").html("&nbsp;"))	});
	$("#pagination a:first").addClass('active');
	$("#pagination a").live("click", function(e){
		clearInterval(interval);
		var index = $("#pagination a").index(this);
		$(".bimg").hide().eq(index).show();
		$("#pagination a").removeClass('active');
		$(this).addClass('active');
		interval = setInterval('slideFunc()', 3000)
	});

	interval = setInterval('slideFunc()', 3000)
	slideFunc = function(){
		var imgIndx = $(".bimg:visible").index();
		var imgIndx1 = $(".bimg:visible").next().index();
		$(".bimg:visible").hide().next().show();
		if ( imgIndx == ( $(".bimg").size() - 1 ))	{
			$('.bimg').eq(0).show();
			imgIndx1 = 0;
		};
		$("#pagination a").removeClass('active').eq(imgIndx1).addClass('active');}

	/* dropdown */

	$('.navigation ul li').hover(function(){
		$(this).addClass('active');
		$('> ul',this).stop().show();
	},function(){
		$(this).removeClass('active')
		$('> ul',this).stop().hide();
	})
});
(function($){
	$.myPlugin ={
		cycle:function(a){
			var b = {selector:'.scroller',speed:1000,delay:3000}
			var a = $.extend(b,a);
			var scroller = $('ul',a.selector);
			var listArea = $('li',scroller).outerHeight();
			var out = null;
			return $(a.selector).each(function(){
				function start(){
					out = setInterval(function(){
						$(scroller).children('li:first').animate({marginTop:'-' + listArea+'px',opacity:'hide'},a.speed,function(){
									$(scroller).children('li:first').appendTo(scroller).css('marginTop',0).fadeIn(300);
								});
					},a.delay);
				}
				start();
				function stop(){clearTimeout(out);}
				$(scroller).hover(function(){stop();},function(){start();});
			});
		},
	tabs:function(a){
			var b = {selector:'.tabs',className:'active',activeTab:0,container:'.container'}
			var a = $.extend(b,a);
			return $(a.selector).each(function(){
				var c = $('> ul li',this);
				var d = $(a.container,this);
				$(d).hide();
				$(c).eq(a.activeTab).addClass(a.className);
				$(d).eq(a.activeTab).show();
				$(c).click(function(){
					if($(this).hasClass(a.className)){
						return false;
					}else{
						$(c).removeClass(a.className);
						$(this).addClass(a.className);
						$(d).hide();
						var e = $('a',this).attr('rel');
						$(e).fadeIn();
					}
				});
			});
		}
	}
})($);