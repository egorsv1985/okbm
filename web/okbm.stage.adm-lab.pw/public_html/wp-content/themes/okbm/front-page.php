<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>

<section class="primary">

	<?php echo do_shortcode('[metaslider id="117"]'); ?>

	<div class="container">
		<div class="primary__wrapper">
			<h1 class="primary__title title"></h1>
			<div class="primary__wrap">
				<h2 class="primary__subtitle subtitle">ГОД ОСНОВАНИЯ 1960</h2>
				<p class="primary__desc">Более 60 лет на рынке</p>
			</div>
			<?php wp_nav_menu(
				array(
					'theme_location' => 'primary-menu',
					'menu_class' => 'primary__menu menu',
					'menu_id' => 'primary',
				)
			);
			?>
			<php wp_nav_menu(); ?>
		</div>
	</div>
</section>

<?php wp_nav_menu(
	array(
		'theme_location' => 'primary-menu',
		'menu_class' => 'primary__menu-mob menu',
		'menu_id' => 'primary',
	)
);
?>

<section class="about">
	<div class="about__wrapper">
		<div class="about__box-text">
			<h2 class="about__title title">О КОМПАНИИ</h2>
			<h3 class="about__subtitle subtitle">Видео презентация компании ОКБМ</h3>
		</div>
		<div class="video">
			<?php the_field('video'); ?>
		</div>

	</div>
</section>


<section class="manager manager--bg">
	<h2 class="manager__title title title--page"><?php the_field('title'); ?></h2>
	<div class="manager__wrapper">
		<div class="container">
			<h3 class="manager__title title"><?php the_field('title'); ?></h3>
			<div class="manager__photo">
				<img class="manager__img" src="<?php the_field('foto_manager'); ?>" alt="<?php the_field('foto_manager'['alt']); ?>" title="<?php the_field('foto_manager'['title']); ?>">
				<div class="manager__img-desc">

					<h3 class="manager__name"><?php the_field('name_manager'); ?></h3>
					<p class="manager__position"><?php the_field('position_manager'); ?></p>
				</div>
			</div>
		</div>
		<div class="manager__inner">
			<?php
			if (have_rows('description_manager')) { // если найдены данные 
				while (have_rows('description_manager')) {
					the_row(); ?>
					<div class="manager__block-text">
						<h4 class="manager__subtitle-home subtitle"><?php the_sub_field('title_description'); ?></h4>
						<p class="manager__text text"><?php the_sub_field('description_text'); ?></p>
					</div>

			<?php	}
			} else {
				// строки не найдены 
			}
			?>
		</div>
	</div>
</section>
<section class="sertificates">
	<div class="container">
		<div class="sertificates__wrapper">
			<h2 class="sertificates__title title">Лицензии и сертификаты</h2>
			<div class="swiper">
				<?php echo do_shortcode('[metaslider id="133"]'); ?>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>