<?php

/*
Template Name: Pricing Plan
*/

?>


<?php


$meal_pricing_meta = get_post_meta(get_the_ID(),'meal-pricing-options',true);
$meal_pricing_items = explode("\n",$meal_pricing_meta['items']);
$meal_pricing_one_items = explode("\n",$meal_pricing_meta['plan-one-items']);
$meal_pricing_two_items = explode("\n",$meal_pricing_meta['plan-two-items']);




get_header();
$meal_section_id = 10;
get_template_part('section-templates/banner');
the_post();
?>
      
 <div class="main-wrap" id="section-home">
 	<div <?php post_class('single-post'); ?>>
 		<div class="container post-body">
 			<div class="row">
 				<div class="col-md-12 text-center">
     				<div class="textarea">
     					<h1><?php the_title(); ?></h1>
	     				<?php
	     				the_content();
	     				?>
     				</div>
     			</div>
     			<div class="col-md-12">
     				<div class="section-gap">
     					<div class="container">
     						<div class="row justify-content-md-center">
     							<div class="col-md-10">
     								<div class="table-responsive">
     									<table class="table table-bordered price-plan">
     										<thead>
     											<tr>
     												<th scope="col"></th>
     												<th scope="col"><?php echo esc_html($meal_pricing_meta['plan-one-title']); ?></th>
     												<th scope="col"><?php echo esc_html($meal_pricing_meta['plan-two-title']); ?></th>
     											</tr>
     										</thead>
     										<tbody>
     											<?php
     												$meal_counter = 0;
     												foreach($meal_pricing_items as $meal_pricing_item) :
     													$meal_plan_one_data = apply_filters('meal_pricing_item', $meal_pricing_one_items[$meal_counter]);
     													$meal_plan_two_data = apply_filters('meal_pricing_item', $meal_pricing_two_items[$meal_counter]);
     											?>
     											<tr>
     												<td><strong><?php echo esc_html($meal_pricing_item); ?></strong></td>
     												<td><?php echo wp_kses_post($meal_plan_one_data); ?></td>
     												<td><?php echo wp_kses_post($meal_plan_two_data); ?></td>
     											</tr>

	     										<?php
	     											$meal_counter++;
	     											endforeach;
	     										?>     											
     											

     											<tr class="button">
     												<td><strong><?php _e("Action","meal"); ?></strong></td>
     												<td>
     													<a href="<?php echo esc_url($meal_pricing_meta['plan-one-action']); ?>" class="btn btn-danger"><?php _e('Get This Plan','meal'); ?></a>	
     												</td>
     												<td>
     													<a href="<?php echo esc_url($meal_pricing_meta['plan-two-action']); ?>" class="btn btn-danger"><?php _e('Get This Plan','meal'); ?></a>	
     												</td>
     											</tr>
     										</tbody>
     									</table>
     								</div>
     							</div>
     						</div>
     					</div>
     				</div>
     			</div>
 			</div>
 		</div>
 	</div>
 </div>
      
      













      <!-- <div class="map-wrap" id="map"  data-aos="fade"></div> -->


        <footer class="ftco-footer">
          <div class="container">
            
            <div class="row">
            <div class="col-md-4 mb-5">
              <div class="footer-widget">
                <h3 class="mb-4">About Meal</h3>
                <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. </p>
                <!-- <input type="submit" class="btn btn-primary btn-outline-primary" value="Send Message"> -->
                <p><a href="https://free-template.co" target="_blank" class="btn btn-primary btn-outline-primary">More Templates</a></p>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <div class="footer-widget">
                <h3 class="mb-4">Lunch Service</h3>
                <p>Booking from 12:00pm &mdash; 1:30pm</p>
                <h3 class="mb-4">Dinner Service</h3>
                <p>Everyday: <br> Booking from 6:00pm &mdash; 9:00pm</p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="footer-widget">
                <h3 class="mb-4">Follow Along</h3>
                <ul class="list-unstyled social">
                  <li><a href="#"><span class="fa fa-tripadvisor"></span></a></li>
                  <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                  <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
              <div class="footer-widget">
                <h3 class="mb-4">Newsletter</h3>
                <form action="#" class="ftco-footer-newsletter">
                  <div class="form-group">
                    <button class="button"><span class="fa fa-envelope"></span></button>
                    <input type="email" class="form-control" placeholder="Enter Email">
                  </div>
                </form>
              </div>
            </div>

            </div>

            <div class="row pt-5">
              <div class="col-md-12 text-center">
                <p>&copy; Copyright 2018. All Rights Reserved.  Designed &amp; Developed by <a href="https://free-template.co/">Free-Template.co</a></p>
              </div>
            </div>
          </div>
        </footer>
<?php

get_footer() ;

?>