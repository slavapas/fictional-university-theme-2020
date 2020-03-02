<?php
	function main_function() {
		// enqueue styles
		wp_enqueue_style( 'custom-font-google', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
		wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'style-name', get_stylesheet_uri() );
		
		// enqueue scripts
		wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), microtime(), true );
		wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/scripts-bundled.js', null, microtime(), true );
		
	}
	
	add_action( 'wp_enqueue_scripts', 'main_function' );
	
	//add title tag
	function university_features() {
		register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
		register_nav_menu( 'footerMenuLocation1', 'Footer Menu Location 1' );
		register_nav_menu( 'footerMenuLocation2', 'Footer Menu Location 2' );
		add_theme_support( 'title-tag' );
	}
	
	add_action( 'after_setup_theme', 'university_features' );
	
	function university_adjust_queries( $query ) {
		if ( ! is_admin() AND is_post_type_archive( 'event' ) AND $query->is_main_query() ) {
			$today = date( 'Ymd' );
			$query->set( 'meta_key', 'event_date' );
			$query->set( 'orderby', 'meta_value' );
			$query->set( 'order', 'ASC' );
			$query->set( 'meta_query', array(
					array(
						'key'     => 'event_date',
						'compare' => '>=', // greater or equal
						'value'   => $today,
						'type'    => 'numeric'
					)
				)
			
			);
		}
	}
	
	add_action( 'pre_get_posts', 'university_adjust_queries' );
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	