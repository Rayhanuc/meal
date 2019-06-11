(function (jQuery) {
    "use strict";

    jQuery(document).ready(function(jQuery){
        jQuery(".portfolio-list").isotope({
            layoutMode: 'masonry',
            masonry: {
                columnwidth: '.col-md-4',
                // horizontalOrder: true
            }
        });

        jQuery(".portfolio-filter li").on('click', function() {
            jQuery(".portfolio-filter li").removeClass("active");
            jQuery(this).addClass("active");

            var filterValue = jQuery(this).attr("data-filter");
            jQuery(".portfolio-list").isotope({
                filter: filterValue,
            });
        });

    });


    jQuery(window).load(function(){

        
    });


}(jQuery)); 