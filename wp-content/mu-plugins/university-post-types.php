<?php
	// create custom post types
	function university_post_types() {
		register_post_type( 'event', array(
			'rewrite'=> array(
				'slug'=>'events'
			),
			'has_archive' => true,
			'public'      => true, // this makes our  post type visible in admin area
			'labels'      => array(
				'name'          => 'Events',
				'add_new_item'  => 'Add Event',
				'all_items'     => 'All Events',
				'singular_name' => 'Event'
			),
			'menu_icon'   => 'dashicons-calendar'
		) );
	}
	
	add_action( 'init', 'university_post_types' );
	
