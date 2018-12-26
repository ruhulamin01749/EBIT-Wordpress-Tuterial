<?php

function ebit_theme_init(){
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'ebit_theme_init');

function ebit_css_js(){

	wp_enqueue_style('Main-css', get_template_directory_uri().'/css/main.css', array('style-css'), '1.003', 'all');
	wp_enqueue_style('style-css', get_stylesheet_uri(), NULL, '3.45', NULL);
	wp_enqueue_script('Main-js', get_template_directory_uri().'/js/main.js', NULL, '2.223', TRUE);

}
add_action('wp_enqueue_scripts', 'ebit_css_js');