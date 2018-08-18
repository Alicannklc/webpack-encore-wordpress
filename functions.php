<?php

function theme_styles() {

	wp_enqueue_style( 'main', get_template_directory_uri() . '/public/build/main.c0d9d23c.css' );


}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	wp_enqueue_script( 'app', get_template_directory_uri() . '/public/build/app.036b7c01.js' );


}
add_action( 'wp_enqueue_scripts', 'theme_js' );






function custom_wp_title( $title, $sep ) {
	global $page;

	// Site adını ekleyin.
	$title .= get_bloginfo( 'name' );

	// Site ismini ön sayfa için site açıklamasını ekleyin.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	return $title;

}
add_filter( 'wp_title', 'custom_wp_title', 20, 2 );
?>
