<?php


// Пути
define('THEME_ROOT', get_template_directory_uri());
define('JS_DIR', THEME_ROOT . '/assets/js/');
define('IMG_DIR', THEME_ROOT . '/assets/img/');

// стили
add_action( 'wp_enqueue_scripts', 'tandi_style' );
// скрипты
add_action( 'wp_enqueue_scripts', 'tandi_scripts' );
// меню футера
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
// тип записи - card
add_action( 'init', 'register_post_types' );
// Отключение админ панели для всех пользователей сайта кроме администраторов
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
    	show_admin_bar(false);
    }
}

// ПОЛЕ Отчество
add_filter('user_contactmethods', 'ved_user_contactmethods');
    function ved_user_contactmethods($user_contactmethods){
    $user_contactmethods['middle_name'] = 'Отчество';
    return $user_contactmethods;
}

/* = Удаляем из профиля пользователя элементы
непредусмотренные встроенными функциями
----------------------------------------- */
function remove_profile_fields_selectors() {
    $delete = array(
        // Цветовая схема
        "tr.user-admin-color-wrap",
        // Горячие клавиши
        "tr.user-comment-shortcuts-wrap",
        // Основной язык сайта
        "tr.user-language-wrap",
    );
    $selectors = implode(", ", $delete);
    echo "<style>{$selectors}{display:none;}</style>"; ?>
   <?php
}
add_action('admin_head','remove_profile_fields_selectors');

function register_post_types(){
	register_post_type( 'card', [
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
		'supports'            => [ 'title','comments'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['category'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'card');
    $query->set('post_type',$post_type);
    return $query;
    }
}

// стили
function tandi_style() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
// скрипты
function tandi_scripts() {
    wp_enqueue_script( 'main-script', JS_DIR . '/app.min.js', array(), 'null', true );
}
// меню футера
function theme_register_nav_menu() {
	register_nav_menu( 'footer_menu', 'Меню в подвале' );
}

// комменты
function tandi_comment( $comment, $args, $depth ) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}

	$classes = ' ' . comment_class( empty( $args['has_children'] ) ? '' : 'parent', null, null, false );
	?>

	<<?php echo $tag, $classes; ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) { ?>
		<div id="div-comment-<?php comment_ID() ?>" class="item-reviews__body"><?php
	} ?>

	<div class="item-reviews__image-ibg">
		<?php
		if ( $args['avatar_size'] != 0 ) {
			echo get_avatar( $comment, $args['avatar_size'] );
		}
		?>
	</div>

	<div class="item-reviews__header">
		<?php
		printf(
				__( '<span>%s</span>' ),
				get_comment_author()
			);
		?>
		<?php
			printf(
				__( '<time>%1$s %2$s</time>' ),
				get_comment_date(),
				get_comment_time()
			); ?>
	</div>

	<div class="item-reviews__content">

		<?php comment_text(); ?>

		<?php if ( $comment->comment_approved == '0' ) { ?>
			<em class="comment-awaiting-moderation">
				<?php _e( 'Your comment is awaiting moderation.' ); ?>
			</em><br/>
		<?php } ?>
	</div>

	<?php if ( 'div' != $args['style'] ) { ?>
		</div>
	<?php }
}