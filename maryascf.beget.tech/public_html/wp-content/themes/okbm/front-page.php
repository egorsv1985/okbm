<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>

<section class="primary">
	<div class="swiper primarySwiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide">Slide 1</div>
			<div class="swiper-slide">Slide 2</div>
			<div class="swiper-slide">Slide 3</div>
			<div class="swiper-slide">Slide 4</div>
			<div class="swiper-slide">Slide 5</div>
			<div class="swiper-slide">Slide 6</div>
			<div class="swiper-slide">Slide 7</div>
			<div class="swiper-slide">Slide 8</div>
			<div class="swiper-slide">Slide 9</div>
		</div>
		<div class="swiper-pagination"></div>
	</div>
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
			<?php the_field('video') ?>
		</div>

	</div>
</section>

<section class="description description--bg">
	<h2 class="description__title title title--page"></h2>
	<div class="description__wrapper">
		<div class="container">
			<h2 class="description__title title"></h2>
			<div class="description__photo">
				<img class="description__img" src="" alt="" title="">
				<div class="description__img-desc">
					<h2 class="description__name"></h2>
					<h3 class="description__position"></h3>
				</div>
			</div>
		</div>
		<div class="description__inner">

			<div class="description__block-text">
				<h3 class="description__subtitle subtitle"></h3>
				<p class="description__text text"></p>
			</div>


		</div>
	</div>
</section>
<?php get_footer(); ?>