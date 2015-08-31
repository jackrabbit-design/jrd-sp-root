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

    if($('#chgpass').length){
        $.magnificPopup.open({
            items:{
                src: '#chgpass',
                type: 'inline'
            },
            closeOnBgClick: false,
            enableEscapeKey: false,
            showCloseBtn: false
        })
    }

    /* Ajax load more Pagination */
    $(document).on('click', '.em-calendar .month_name a', function(e)  {
        e.preventDefault();
       // $('.text_holder').append("<div class=\"loader\">&nbsp;</div>");
        var link = jQuery(this).attr('href');

        var $content = '.em-calendar';
        $('.em-calendar').animate({
            opacity: 0.3
        },150).after('<div class="loader"></div>');
        $.get(link+'', function(data){
            var $elements = $('<div>').append(data);
            var $new_content = $elements.find($content).wrapInner('').html(); // Grab just the content
            $($content).html($new_content); // Append the new content

        }).done(function(data){
            $('.em-calendar').animate({
                opacity: 1
            },50).siblings('.loader').remove();
        });
    });

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
