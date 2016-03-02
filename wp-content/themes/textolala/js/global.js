jQuery(window).load(function() {
    jQuery(".loader").fadeOut("800");
    //UPVOTE AND DOWNVOTE ELEM
    var templateDirectory = path.templateDirectory

    jQuery('.post-ratings img[title="+1"]').attr('src', templateDirectory + '/images/love.svg').addClass('home left like');

    jQuery('.post-ratings img[title="-1"]').attr('src', templateDirectory + '/images/poubelle.svg').addClass('home right unlike');//.after('<span class="mention unlike">-</span>')

    jQuery('.post-ratings img[title="-1"]').hover( function() {
        jQuery(this).attr('src', templateDirectory + '/images/poubelle.svg');
    });

    jQuery('.post-ratings img[title="+1"]').hover( function() {
        jQuery(this).attr('src', templateDirectory + '/images/love.svg');
    });

    jQuery('.post-ratings img[title="-1"]').mouseleave( function() {
        jQuery('.post-ratings img[title="-1"]').attr('src', templateDirectory + '/images/poubelle.svg');
        jQuery('.post-ratings img[title="+1"]').attr('src', templateDirectory + '/images/love.svg');
    });

    jQuery('.post-ratings img[title="+1"]').mouseleave( function() {
        jQuery('.post-ratings img[title="-1"]').attr('src', templateDirectory + '/images/poubelle.svg');
        jQuery('.post-ratings img[title="+1"]').attr('src', templateDirectory + '/images/love.svg');
    });
    jQuery('.post-ratings img[title="-1"]').mouseenter( function() {
        jQuery('.post-ratings img[title="-1"]').attr('src', templateDirectory + '/images/poubelle.svg');
        jQuery('.post-ratings img[title="+1"]').attr('src', templateDirectory + '/images/love.svg');
    });

    jQuery('.post-ratings img[title="+1"]').mouseenter( function() {
        jQuery('.post-ratings img[title="-1"]').attr('src', templateDirectory + '/images/poubelle.svg');
        jQuery('.post-ratings img[title="+1"]').attr('src', templateDirectory + '/images/love.svg');
    });
});

jQuery( document ).ready(function() {

	jQuery('a.open-pop-up').on('click',function(event){
        event.preventDefault();
        jQuery('.pop-up').slideDown(500);
        jQuery('.pop-up form').show();
    });
    
    jQuery('.cross').on('click',function(event){
        event.preventDefault();
        jQuery('.pop-up form').hide();
        jQuery('.pop-up').slideUp(500);
    });
    
    //INIT SLIDER
	jQuery('.slider').slick({
		fade: true
	});

    jQuery('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        var action = jQuery('.screen').addClass('other').delay(400);
        action.promise()
            .done(function () { this.removeClass('other'); })
    });

    //PREV & NEXT BUTTONS CLICKS EVENTS
    jQuery('.precedent').click(function() {
        jQuery('.slider').slick('slickPrev');
        var action = jQuery('.screen').addClass('other').delay(400);
        action.promise()
            .done(function () { this.removeClass('other'); })
        event.preventDefault();
    });

    jQuery('.suivant').click(function() {
        jQuery('.slider').slick('slickNext');
        var action = jQuery('.screen').addClass('other').delay(400);
        action.promise()
            .done(function () { this.removeClass('other'); })
        event.preventDefault();
    });

    //SCROLLBAR FOR OVERFLOWED ELEM
	jQuery('.texto-wrapper').slimScroll({
        height: 'auto',
        railOpacity : 0.01,
        color : '#ffffff'
    });

    

    

    //SHOW/HIDE COMMENTS SECTION
    jQuery('.show-comments').click(function() {
        var action = jQuery('.screen').addClass('other').delay(400);
        action.promise()
            .done(function () { this.removeClass('other'); })
        jQuery('.comments-wrapper').toggle().toggleClass('hidden');
        jQuery('.message').toggle();
        event.preventDefault;
        return false;
    });

    //SHOW/HIDE COMMENTS FORM
    jQuery('.show-form').click(function() {
        var action = jQuery('.form').toggle().delay();
        action.promise()
            .done(function () { this.toggleClass('hidden'); })
        jQuery(this).toggleClass('rotate');
        event.preventDefault;
        return false;
    });


	// MATCHMEDIA
	if (window.matchMedia("(max-width: 736px)").matches) {
      
      	jQuery(".menu-button").click(function() {
            jQuery('#page-header nav ul,.menu-button,#page-header').toggleClass('clicked');
      	});
	}

    if (window.matchMedia("(min-width: 1024px)").matches) {
      
        jQuery('.pop-up').slimScroll({
            width: '100%',
            height: 'auto',
            railOpacity : 0.01,
            color : '#ffffff'
        });
        
    }
	

});


