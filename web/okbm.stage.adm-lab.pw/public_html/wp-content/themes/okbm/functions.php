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
	// wp_enqueue_style('swipercss', get_template_directory_uri() . 'assets/css/swiper-bundle.min.css');
	wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
	wp_enqueue_style('style', get_stylesheet_uri());
}

function scripts_theme()
{

	wp_deregister_script('jquery');
	// wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js');
	wp_enqueue_script('jquery');


	wp_enqueue_script('JQuery', '//code.jquery.com/jquery-1.11.0.min.js');
	wp_enqueue_script('Migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js');
	// wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	// wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), 'null', true);
	// wp_enqueue_script('swiper-map', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js.map');
	wp_enqueue_script('swiperjs', get_template_directory_uri() . '/js/swiper-bundle.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js');
}
// function dream_hourse_scripts()
// {
// 	wp_deregister_script('jquery');
// 	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
// 	wp_enqueue_script('jquery');

// 	wp_enqueue_script('magnific-script', LIBS_DIR . '/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), 'null', true);

// 	wp_enqueue_script('swiper-script', LIBS_DIR . '/swiper/swiper-bundle.min.js', array('jquery'), 'null', true);


// 	wp_enqueue_script('main-script', JS_DIR . '/script.js', array('jquery'), 'null', true);
// }

/* регистрация меню */
register_nav_menus(
	array(
		'header-menu' => 'Верхнее меню',
		'primary-menu' => 'Главное меню',
		'competencies-menu' => 'Компетенции меню',
	)
);

function carouselgal($atts)
{
	$gal = get_field('carousel', 119);
	$galbody = '';
	if ($gal) {
		$galbody .= '<div class="swiper-1 swiper-container">
					<div class="swiper-wrapper">';
		foreach ($gal as $im) {
			$galbody .= '
							<div class="swiper-slide">
					            <img class="image-fluid" src="' . $im['url'] . '">
					          </div>';
		}
		$galbody .= '
            	    </div>
				<div class="swiper-button-prev sw-prev"></div>
				<div class="swiper-button-next sw-next"></div>
				</div>';
	}
	return $galbody;
}

add_shortcode('carousel_slider', 'carouselgal');
