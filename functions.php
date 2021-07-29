<?php
function theme_styles() {
	wp_enqueue_style( 'theme_font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array(), '1.0.0' );
	wp_enqueue_style( 'theme_reset', get_template_directory_uri() . '/css/normalize.css', array( 'theme_font' ), '1.0.0' );
	wp_enqueue_style( 'theme_style', get_template_directory_uri() . '/css/style.css', array( 'theme_reset' ), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );

	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '1.0.0' );
	wp_enqueue_script( 'theme_script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );