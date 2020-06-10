jQuery(document).ready(function($) {


    // Check to see if element is in viewport
    (function($) {

        /**
         * Copyright 2012, Digital Fusion
         * Licensed under the MIT license.
         * http://teamdf.com/jquery-plugins/license/
         *
         * @author Sam Sehnert
         * @desc A small plugin that checks whether elements are within
         *     the user visible viewport of a web browser.
         *     only accounts for vertical position, not horizontal.
         */
      
        $.fn.visible = function(partial) {
          
            var $t            = $(this),
                $w            = $(window),
                viewTop       = $w.scrollTop(),
                viewBottom    = viewTop + $w.height(),
                _top          = $t.offset().top,
                _bottom       = _top + $t.height(),
                compareTop    = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;
          
          return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
      
        };
          
      })(jQuery);


    // Add an animation class when it is in view
    $(window).scroll(function(event) {


    // Home page
    $(".leftslide").each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
        el.addClass("animate__animated animate__slideInLeft"); 
        } 
    });

    $(".rightslide").each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("animate__animated animate__slideInRight"); 
        } 
        });

    // Portfolio Page
    $(".fadeup").each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("animate__animated animate__fadeInUp"); 
        } 
        });
    
    
    });

    
});