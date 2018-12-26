<?php

function office_master_theme_support(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('slide-img', 1500, 500, 'true');
	add_image_size('team-img', 80, 100, 'true');
	add_image_size('post-img', 850, 490, 'true');
	add_image_size('post-slider-img', 265, 190, 'true');
	register_nav_menus(array(
			'primary_menu'=>'Prymary Menu',
		));

}
add_action('after_setup_theme', 'office_master_theme_support');

function office_master_css_js(){
	//css
	wp_enqueue_style('google-font-1','//fonts.googleapis.com/css?family=Open+Sans:400,300', NULL, '1.02', 'all' );
	wp_enqueue_style('google-font-2','//fonts.googleapis.com/css?family=Raleway', NULL, '1.03', 'all' );
	wp_enqueue_style('google-font-3','//fonts.googleapis.com/css?family=PT+Sans', NULL, '1.03', 'all' );
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css' );
	wp_enqueue_style('Font-Awsome', get_template_directory_uri(). '/assets/css/font-awesome.min.css' );
	wp_enqueue_style('Animation', get_template_directory_uri(). '/assets/css/animate.min.css' );
	wp_enqueue_style('Main-Style', get_template_directory_uri(). '/assets/css/style.css' );
	wp_enqueue_style('office-master-main-stylesheet', get_stylesheet_uri());
	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri(). '/assets/bootstrap/js/bootstrap.min.js','jquery', NULL,TRUE );
	wp_enqueue_script('WOW', get_template_directory_uri(). '/js/wow.min.js', 'jquery', NULL, TRUE );
}
add_action('wp_enqueue_scripts', 'office_master_css_js');

function footer_extra_js(){ ?>
	<script>
      	new WOW().init();
    </script>
<?php
}

add_action('wp_footer', 'footer_extra_js', 30);

function office_master_fallback_menu(){ ?>
	<ul class="nav navbar-nav pull-right">
                    <li class="active">
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">About</a>
                    </li>
                    <li>
                        <a href="">Blog</a>
                    </li>
                    <li>
                        <a href="">Team</a>
                    </li>
                    <li>
                        <a href=""><span>Contact</span></a>
                    </li>
                </ul>
<?php }

include_once('inc/custom_post.php');
include_once('inc/custom_widgets.php');
include_once('inc/custom_shortcode.php');
include_once('inc/custom_tinyMce.php');
include_once('inc/cmb2-custom-field.php');
include_once('inc/custom_registation.php');
require_once('inc/redux-framework/redux-framework.php');
require_once('inc/office-master-theme-option.php');
require_once('inc/office-master-plugin-activation.php');

function cExcerpt($number=50, $more='Read More'){
	$new_number = $number+1;
	$var = explode(' ',strip_tags( get_the_content() ), $new_number);
	if(count($var) >= $new_number){
		array_pop($var);
		$link = '<a href="'.get_the_permalink().'">'.$more.'</a>';
		array_push($var, $link);
	}
	$var = implode(' ', $var);
	return $var;
}
