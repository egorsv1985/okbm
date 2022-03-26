<?php


add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'new_menu');
add_action('after_setup_theme', 'add_logo');



function add_logo()
{
	add_theme_support('custom-logo', [
		'unlink-homepage-logo' => true,
	]);
}

function style_theme()
{
	wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/fonts.css');
	wp_enqueue_style('style', get_stylesheet_uri());
}

function scripts_theme()
{

	// wp_deregister_script('jquery');
	// wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
	// wp_enqueue_script('jquery');


	// wp_enqueue_script('JQuery', '//code.jquery.com/jquery-1.11.0.min.js');
	// wp_enqueue_script('Migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js');
	// wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');

	wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js');
}


/* регистрация меню */
register_nav_menus(
	array(
		'header-menu' => 'Верхнее меню',
		'primary-menu' => 'Главное меню',
		'competencies-menu' => 'Компетенции меню',
	)
);
