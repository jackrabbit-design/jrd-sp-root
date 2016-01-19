/* ========================================================================= */
/* BE SURE TO COMMENT CODE/IDENTIFY PER PLUGIN CALL */
/* ========================================================================= */

jQuery(function($) {

    var ww = document.body.clientWidth;
    
    $(document).ready(function() {
    	$(".nav li a").each(function() {
    		if ($(this).next().length > 0) {
    			$(this).addClass("parent");
    		};
    	})
    	
    	$(".toggleMenu").click(function(e) {
    		e.preventDefault();
    		$(this).toggleClass("active");
    		$(".nav").toggle();
    	});
    	adjustMenu();
    });
    
    $(".lb-yt").colorbox({
        iframe:true, 
        innerWidth:640, 
        innerHeight:390
    });
    
    $(window).bind('resize orientationchange', function() {
    	ww = document.body.clientWidth;
    	adjustMenu();
    });
    
    var adjustMenu = function() {
    	if (ww < 768) {
    		$(".toggleMenu").css("display", "inline-block");
    		if (!$(".toggleMenu").hasClass("active")) {
    			$(".nav").hide();
    		} else {
    			$(".nav").show();
    		}
    		$(".nav li").unbind('mouseenter mouseleave');
    		$(".nav li a.parent").unbind('click').bind('click', function(e) {
    			// must be attached to anchor element to prevent bubbling
    			e.preventDefault();
    			$(this).parent("li").toggleClass("hover");
    		});
    	} 
    	else if (ww >= 768) {
    		$(".toggleMenu").css("display", "none");
    		$(".nav").show();
    		$(".nav li").removeClass("hover");
    		$(".nav li a").unbind('click');
    		$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
    		 	$(this).toggleClass('hover');
    		});
    	}
    }

    var $searchBox = $('#search .search-box');
    var $searchTrigger = $('#search-trigger');

    $searchTrigger.on('click', function(e) {
        $searchBox.toggle();
        e.preventDefault();
    });
    $(".search-nav-button").click(function() {
        $(this).toggleClass("color");
    });

    $("#owl-demo").owlCarousel({

        navigation: true,
        slideSpeed: 200,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: true,
        responsiveRefreshRate: 0,
        dragBeforeAnimFinish: true,
        mouseDrag: true,
        touchDrag: true,
        pagination: true,
        navigation: false,

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });
    $("#owl-demo2").owlCarousel({

        navigation: true,
        slideSpeed: 200,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: true,
        responsiveRefreshRate: 0,
        dragBeforeAnimFinish: true,
        mouseDrag: true,
        touchDrag: true,
        pagination: false,
        navigation: false,

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });
    $("#owl-demo3").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        mob: [767, 1],
    });
    $("#owl-demo4").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items: 1,
        itemsMobile: false,
        autoHeight: true,
    });

    function DropDown(el) {
        this.dd = el;
        this.placeholder = this.dd.children('span');
        this.opts = this.dd.find('ul.dropdown > li');
        this.val = '';
        this.index = -1;
        this.initEvents();
    }
    DropDown.prototype = {
        initEvents: function() {
            var obj = this;

            obj.dd.on('click', function(event) {
                $(this).toggleClass('active');
                return false;
            });

            obj.opts.on('click', function() {
                var opt = $(this);
                obj.val = opt.text();
                obj.index = opt.index();
                obj.placeholder.text(obj.val);
            });
        },
        getValue: function() {
            return this.val;
        },
        getIndex: function() {
            return this.index;
        }
    }

    $(function() {

        var dd = new DropDown($('#dd'));

        $(document).click(function() {
            // all dropdowns
            $('.wrapper-dropdown-3').removeClass('active');
        });

    });
    
    $.fn.isOnScreen = function(){
        var win = $(window);
        var viewport = {
            top : win.scrollTop()
        };
        viewport.bottom = viewport.top + win.height();
        var bounds = this.offset();
        bounds.bottom = bounds.top + this.outerHeight();
        return (!(viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    };
    
    /* Ajax load more Pagination */
    $.fn.loadMore = function(){
        if($(this).length > 0){
            if($(this).isOnScreen() === true){
                $(this).parent().addClass('loading');
                var link = jQuery(this).attr('href');
                var $content = '.query-results';
                var $nav_wrap = '.load-more';
                var $anchor = '.load-more a';
                var $next_href = $($anchor).attr('href'); // Get URL for the next set of posts
            
                $.get(link+'', function(data){
                    var $new_content = $($content, data).wrapInner('').html(); // Grab just the content
                    $next_href = $($anchor, data).attr('href'); // Get the new href
                    $('.query-results>div:last-child').after($new_content); // Append the new content
                    $('.load-more a').attr('href', $next_href); // Change the next URL
                    var nlink = $('.load-more a').attr('href');
                    if(nlink == link){ $('.load-more a').remove(); }
                    
                }).done(function(data){ 
                    $('.load-more.loading').removeClass('loading');
                });
            }
        }
    };
    
    $('.load-more a').loadMore();
    
    $(document).on('scroll ready', function(){
        if($('.load-more').hasClass('loading')){}else{
            $('.load-more a').loadMore();
        }
    })

   $('#careers h3').click(function(){
       $(this).toggleClass('active').siblings('div').slideToggle();
       $('body,html').animate({
           scrollTop: $(this).offset().top - 50
        }, 400)
   });
   
    $('#careers .btn').click(function(){
        var app = $(this).closest('div').siblings('h3').text();
        $('.hideme').slideDown().find('.getintouch.apply').find('.gfield.hide').find('input').attr('value',app);
        setTimeout(function(){
           $('body,html').animate({
               scrollTop: $('.hideme').offset().top - 50
            }, 300)
        }, 300);
    })
    
});