<?php

add_theme_support( 'post-thumbnails' ); /// Needed for featured images

function register_menus() {
  register_nav_menus( array( 'header' => 'Header Menu' ));
}

function register_widget_areas() {
	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'after_setup_theme', 'register_menus' );
add_action( 'init', 'register_widget_areas' );

?>