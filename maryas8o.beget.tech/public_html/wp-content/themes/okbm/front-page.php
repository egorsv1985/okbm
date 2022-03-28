<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>

<section class="primary">
	<div class="swiper primary-swiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide primary__slider">
				<img class="primary__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/primary/primary-bg.jpg" alt="background">
			</div>
			<div class="swiper-slide primary__slider">
				<img class="primary__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/primary/primary-bg.jpg" alt="background">
			</div>
			<div class="swiper-slide primary__slider">
				<img class="primary__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/primary/primary-bg.jpg" alt="background">
			</div>
			<div class="swiper-slide primary__slider">
				<img class="primary__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/primary/primary-bg.jpg" alt="background">
			</div>
			<div class="swiper-slide primary__slider">
				<img class="primary__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/primary/primary-bg.jpg" alt="background">
			</div>
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-pagination primary__pagination"></div>
	</div>

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
			<?php echo do_shortcode('[aiovg_video type="youtube" youtube="https://www.youtube.com/watch?v=m6mkA6Zr1vY" poster="http://maryas8o.beget.tech/wp-content/uploads/2022/03/about-poster-mob.jpg"]'); ?>
		</div>

	</div>
</section>

<section class="description description--bg">
	<h2 class="description__title title title--page"><?= CFS()->get('zagolovok') ?></h2>
	<div class="description__wrapper">
		<div class="container">
			<h2 class="description__title title"><?= CFS()->get('zagolovok') ?></h2>
			<div class="description__photo">
				<img src="<?= CFS()->get('foto_manager') ?>" alt="<?= CFS()->get('foto_manager') ?>" title="<?= CFS()->get('foto_manager') ?>">
				<div class="description__img-desc">
					<h2 class="description__name"><?= CFS()->get('name_manager') ?></h2>
					<h3 class="description__position"><?= CFS()->get('dolgnost_manager') ?></h3>
				</div>
			</div>
		</div>
		<div class="description__inner">
			<?php $loop = CFS()->get('opisania_manager');
			foreach ($loop as $row) {
			?>
				<div class="description__block-text">
					<h3 class="description__subtitle subtitle"><?= $row['zagolovok_opisania_manager'] ?></h3>
					<p class="description__text text"><?= $row['opisania_manager_text'] ?></p>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</section>

<?php echo do_shortcode('[metaslider id="107"]'); ?>
<?php get_footer(); ?>