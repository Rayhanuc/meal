(function ($) {
    "use strict";

    jQuery(document).ready(function($){
        $(".portfolio-list").isotope({
            layoutMode: 'masonry',
            masonry: {
                columnwidth: '.col-md-4',
                // horizontalOrder: true
            }
        });

        $(".portfolio-filter li").on('click', function() {
            $(".portfolio-filter li").removeClass("active");
            $(this).addClass("active");

            var filterValue = $(this).attr("data-filter");
            $(".portfolio-list").isotope({
                filter: filterValue,
            });
        });

    });


    jQuery(window).load(function(){

        
    });


}(jQuery)); 