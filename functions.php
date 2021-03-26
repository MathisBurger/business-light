<?php

function load_stylesheets() {

	wp_register_style('nav-flex', get_template_directory_uri() . '/css/nav-flex.css', array(), false, 'all');
	wp_enqueue_style('nav-flex');

	wp_register_style('navbar', get_template_directory_uri() . '/css/navbar.css', array(), false, 'all');
	wp_enqueue_style('navbar');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');

