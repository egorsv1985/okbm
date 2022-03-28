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

	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
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
	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js');
	// wp_enqueue_script('swiper-map', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js.map');
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

add_action('admin_head', 'remove_profile_fields_selectors');
function register_post_types()
{
	register_post_type('card', [
		'label'  => null,
		'labels' => [
			'name'               => 'Карточка специалиста', // основное название для типа записи
			'singular_name'      => 'Карточка специалиста', // название для одной записи этого типа
			'add_new'            => 'Добавить карточку специалиста', // для добавления новой записи
			'add_new_item'       => 'Добавление карточки специалиста', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование карточки специалиста', // для редактирования типа записи
			'new_item'           => 'Новая карточка специалиста', // текст новой записи
			'view_item'          => 'Смотреть карточку специалиста', // для просмотра записи этого типа.
			'search_items'       => 'Искать карточку специалиста', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Карточка специалиста', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-id',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title', 'comments'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['category'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	]);
}
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query)
{
	if (is_category()) {
		$post_type = get_query_var('post_type');
		if ($post_type)
			$post_type = $post_type;
		else
			$post_type = array('nav_menu_item', 'post', 'card');
		$query->set('post_type', $post_type);
		return $query;
	}
}
