<!-- dynamic sections start -->
        <?php

          $meal_current_page_id = get_the_ID();
          $meal_page_meta = get_post_meta($meal_current_page_id,'meal-page-sections',true);
          foreach ($meal_page_meta['sections'] as $meal_page_section):
            $meal_section_id = $meal_page_section['section'];
            $meal_section_meta = get_post_meta($meal_section_id,'meal-section-type',true);
            $meal_section_type = $meal_section_meta['type'];
            get_template_part( "section-templates/{$meal_section_type}" );
          endforeach;
        ?>
        <!-- dynamic sections end -->





        <?php
        $meal_section_id = 10;
        get_template_part( 'section-templates/banner' );
        ?>



        <!--  -->
        <?php
        $meal_section_id = 11;
        get_template_part( 'section-templates/featured' );
        ?>


        <!-- Portfolio section -->
        <?php
        $meal_section_id = 12;
        get_template_part( 'section-templates/gallery' );
        ?>


        <!-- Chef section -->
        <?php
        $meal_section_id = 73;
        get_template_part( 'section-templates/chef' );
        ?> 


        <!-- Menu section start -->
        <?php
        $meal_section_id = 99;
        get_template_part( 'section-templates/menu' );
        ?>
        <!-- Menu section end -->

        
        <!-- Services section start -->
        <?php
        $meal_section_id = 74;
        get_template_part( 'section-templates/services' );
        ?>
        <!-- Services section end -->
        


        <!-- Reservation section start -->
        <?php
        $meal_section_id = 110;
        get_template_part( 'section-templates/reservation' );
        ?>
        <!-- Reservation section end -->