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

    //uses classList, setAttribute, and querySelectorAll
    //if you want this to work in IE8/9 youll need to polyfill these
    (function(){
        var d = document,
        accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
        setAria,
        setAccordionAria,
        switchAccordion,
      touchSupported = ('ontouchstart' in window),
      pointerSupported = ('pointerdown' in window);

      skipClickDelay = function(e){
        e.preventDefault();
        e.target.click();
      }

            setAriaAttr = function(el, ariaType, newProperty){
            el.setAttribute(ariaType, newProperty);
        };
        setAccordionAria = function(el1, el2, expanded){
            switch(expanded) {
          case "true":
            setAriaAttr(el1, 'aria-expanded', 'true');
            setAriaAttr(el2, 'aria-hidden', 'false');
            break;
          case "false":
            setAriaAttr(el1, 'aria-expanded', 'false');
            setAriaAttr(el2, 'aria-hidden', 'true');
            break;
          default:
                    break;
            }
        };
    //function
    switchAccordion = function(e) {
        e.preventDefault();
        var thisAnswer = e.target.parentNode.nextElementSibling;
        var thisQuestion = e.target;
        if(thisAnswer.classList.contains('is-collapsed')) {
            setAccordionAria(thisQuestion, thisAnswer, 'true');
        } else {
            setAccordionAria(thisQuestion, thisAnswer, 'false');
        }
        thisQuestion.classList.toggle('is-collapsed');
        thisQuestion.classList.toggle('is-expanded');
            thisAnswer.classList.toggle('is-collapsed');
            thisAnswer.classList.toggle('is-expanded');

        thisAnswer.classList.toggle('animateIn');
        };
        for (var i=0,len=accordionToggles.length; i<len; i++) {
            if(touchSupported) {
          accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
        }
        if(pointerSupported){
          accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
        }
        accordionToggles[i].addEventListener('click', switchAccordion, false);
      }
    })();

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
