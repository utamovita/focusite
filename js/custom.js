jQuery( document ).ready(function() {
    function sticky(){
        var scrollPosition = jQuery(window).scrollTop();
        if (scrollPosition > 0) {
            jQuery("nav").addClass('sticky');
        }
        else jQuery("nav").removeClass('sticky');
    }
    
    sticky();
    
    jQuery(window).on("scroll", function() {
        sticky();
    });
    
    jQuery('.hamburger').click(function() {
        jQuery('nav').toggleClass('opened');
    });
    
    jQuery('.choosePricing .btn').click(function(){
        jQuery('.choosePricing .btn').removeClass('active');
        jQuery(this).addClass('active');
        var thisID = jQuery(this).attr('id');
        jQuery('#section2').load('../wp-content/themes/focusite/form-' + thisID + '.php');
        jQuery('#section2').addClass('loaded');
    });
    
    jQuery('.darkness, .close-btn').click(function() {
        jQuery('.darkness, .light-box').removeClass('on');
    });
});

