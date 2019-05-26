<?php


function meal_recipe_metabox($metaboxes) {
	$metaboxes[] = array(
		'id' => 'meal-recipe',
		'title' => __('Recipe details','meal'),
		'post_type' => 'recipe',
		'context' => 'normal',
		'priority' => 'default',
		'sections' => array(
			array(
				'name'      => 'meal-recipe-section-one',
				// 'title'     => __('Section 1','meal'),
				'icon'      => 'fa fa-wifi',
				'fields'    => array(

					// a field
					array(
					'id'    => 'type',
					'title' =>  __('Price','meal'),
					'type'  => 'text',
					'default' => '0.0',
					),

				),
			),
		),

	);

	return $metaboxes;
}
add_filter( 'cs_metabox_options','meal_recipe_metabox' );

