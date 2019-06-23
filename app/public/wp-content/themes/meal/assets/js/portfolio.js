(function (jQuery) {
    "use strict";

    jQuery(document).ready(function(jQuery){
        var $portfolio = jQuery(".portfolio-list");
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

        // lode more button js
        jQuery("#loadmorepb").on('click',function(){
            var current_offset = jQuery(".portfolio-list").data('images');
            var sid = jQuery(".portfolio-list").data('sid');
            var ni = jQuery(".portfolio-list").data('ni');
            var nonce = jQuery("#loadmorep").val();
            jQuery.post(mealurl.ajaxurl,{
                action:'loadmorep',
                nonce:nonce,
                offset:current_offset,
                sid:sid
            },function(data){
                jQuery(".portfolio-list").data('images',(parseInt(current_offset)+parseInt(ni)));
                var items = jQuery(data).find(".single-portfolio-item");
                console.log(items);
                $portfolio.append(items).isotope( 'appended', items );
            });
        });

    });


}(jQuery)); 