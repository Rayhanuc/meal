<?php
get_header();
$meal_section_id = 10;
get_template_part( 'section-templates/banner' );
the_post();
?>

<div class="main-wrap" id="section-home">
	<div <?php post_class( 'single-post' ); ?> >
		<div class="container">
			<div class="row">
				<!-- section title start -->
				<div class="col-md-12 text-center">
					<div class="heading-textarea">
						<h1><?php the_title(); ?></h1>
						<?php
						the_content();
						?>
					</div>
				</div>
				<!-- section title end -->
			</div>
		</div>		
	</div>
</div>

<!-- comment form section here -->
<?php
if (comments_open()) {
	comments_template();
}
?>



<?php get_footer(); ?>