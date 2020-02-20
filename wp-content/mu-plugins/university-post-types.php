<?php
	// create custom post types
	function university_post_types() {
		register_post_type( 'event', array(
			'public' => true, // this makes our  post type visible in admin area
			'labels'=>array(
				'name'=> 'Events'
			),
			'menu_icon'=> 'dashicons-calendar'
		) );
	}
	
	add_action( 'init', 'university_post_types' );
	