/* ========================================================================= */
/* BE SURE TO COMMENT CODE/IDENTIFY PER PLUGIN CALL */
/* ========================================================================= */

jQuery(function($){


//MOBILE NAV TOGGLE

$('.nav-toggle').click(function(){
                $('#nav-container').toggleClass('show');
                $('.mobile').toggleClass( 'icon-menu');
                $('.mobile').toggleClass('icon-cancel');
    });

    $('a.newpost').on('click',function(){
        $('.bbp-topic-form').slideToggle(200);
        if($(this).text() == 'Start New Topic'){
            $(this).text('Cancel New Topic');
        }else{
            $(this).text('Start New Topic');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top - 50
        },200);
        return false;
    })

    $('.postreply .replybtn').on('click',function(e){
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $('#new-post').offset().top
        },200);
        return false;
    });

    $('.comcontent .replies:first').each(function(){
        if($('p:first',this).text() == $('.intro p:first').text()){
            $(this).hide();
        }
    })

    // PARALLAX
/*
    $(document).scroll(function(){
        var nm = $("html").scrollTop();
        var nw = $("body").scrollTop();
        var n = (nm > nw ? nm : nw);

        $('#element').css({
            'webkitTransform' : 'translate3d(0, ' + n + 'px, 0)',
            'MozTransform'    : 'translate3d(0, ' + n + 'px, 0)',
            'msTransform'     : 'translateY('     + n + 'px)',
            'OTransform'      : 'translate3d(0, ' + n + 'px, 0)',
            'transform'       : 'translate3d(0, ' + n + 'px, 0)',
        });

        // if transform3d isn't available, use top over background-position
        //$('#element').css('top', Math.ceil(n/2) + 'px');

    });
*/



    /* ====== Twitter API Call =============================================
        Note: Script Automatically adds <li> before and after template. Don't forget to setup Auth info in /twitter/index.php */
    /*
    $('#tweets-loading').tweet({
        modpath: '/path/to/twitter/', // only needed if twitter folder is not in root
        username: 'jackrabbits',
        count: 1,
		template: '<p>{text}</p><p class="tweetlink">{time}</p>'
	});
    */

});
