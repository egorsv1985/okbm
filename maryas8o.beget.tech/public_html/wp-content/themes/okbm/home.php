<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>
<?php echo do_shortcode('[metaslider id="88"]'); ?>
<section class="primary">
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
					'container,' => false,
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
		'container,' => false,
	)
);
?>
<php wp_nav_menu(); ?>
	<section class="about">
		<div class="about__wrapper">
			<div class="about__box-text">
				<h2 class="about__title title">О КОМПАНИИ</h2>
				<h3 class="about__subtitle subtitle">Видео презентация компании ОКБМ</h3>
			</div>
			<div class="video">
				<?php echo do_shortcode('[aiovg_video type="youtube" youtube="https://www.youtube.com/watch?v=m6mkA6Zr1vY" poster="http://maryas8o.beget.tech/wp-content/uploads/2022/03/about-poster-mob.jpg"]'); ?>
			</div>

		</div>
	</section>
	<section class="description description--bg">
		<h2 class="description__title title title--page"><?php the_field('zagolovok') ?></h2>
		<div class="description__wrapper">
			<div class="container">
				<h2 class="description__title title--none title"><?php the_field('zagolovok') ?></h2>
				<div class="description__photo">

					<?php $foto_manager = get_field('foto_manager'); ?>
					<img src="<?php echo $foto_manager['url'] ?>" alt="<?php $foto_manager['alt'] ?>" title="<?php echo $foto_manager['title'] ?>">
					<div class="description__img-desc">
						<h2 class="description__name"><?php the_field('name_manager') ?></h2>
						<h3 class="description__position"><?php the_field('dolgnost_manager') ?></h3>
					</div>
				</div>
			</div>
			<div class="description__inner">
				<div class="description__block-text">
					<h3 class="description__subtitle subtitle"><?php the_field('zagolovok_opisania_manager') ?></h3>
					<p class="description__text text"><?php the_field('opisania_manager') ?></p>
				</div>
				<div class="description__block-text">
					<h3 class="description__subtitle subtitle"><?php the_field('zagolovok_opisania_manager_2') ?></h3>
					<p class="description__text text"><?php the_field('opisania_manager_2') ?></p>
				</div>
			</div>
		</div>
	</section>
	<?php echo do_shortcode('[metaslider id="107"]'); ?>
	<?php get_footer(); ?>