<?php
/*
Template Name: Проектирование
*/
?>
<?php get_header(); ?>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb__wrapper">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
			}
			?>
		</div>
	</div>
</div>
<div class="container">
	<h2 class="title-page title"><?php the_title(); ?></h2>
</div>

<section class="manager manager--page">
	<div class="container">
		<div class="manager__wrapper">
			<div class="manager__photo">
				<img class="manager__img" src="<?php the_field('foto_menedzhera'); ?>" alt="<?php the_field('foto_menedzhera'['alt']); ?>" title="<?php the_field('foto_menedzhera'['title']); ?>">
				<div class="manager__img-desc">
					<h3 class="manager__name"><?php the_field('imya_menedzhera'); ?></h3>
					<p class="manager__position"><?php the_field('dolzhnost_menedzhera'); ?></p>
				</div>
			</div>
			<div class="manager__inner">
				<?php
				if (have_rows('opisanie_menedzhera')) { // если найдены данные 
					while (have_rows('opisanie_menedzhera')) {
						the_row(); ?>
						<div class="manager__block-text">
							<h4 class="manager__subtitle-home subtitle"><?php the_sub_field('zagolovok_opisaniya'); ?></h4>
							<p class="manager__text text"><?php the_sub_field('opisanie_tekst'); ?></p>
						</div>

				<?php	}
				} else {
					// строки не найдены 
				}
				?>
			</div>
		</div>
	</div>
</section>

<section class="list-text">
	<div class="container">
		<ul class="list-text__list">
			<li class="list-text__item">
				<?php
				if (have_rows('blok_teksta_nad_kartinkoj')) { // если найдены данные 
					while (have_rows('blok_teksta_nad_kartinkoj')) {
						the_row(); ?>
						<div class="list-text__block-text">
							<p class="list-text__paragraph text"><?php the_sub_field('tekst_nad_kartinkoj'); ?></p>

						</div>

				<?php	}
				} else {
					// строки не найдены 
				}
				?>
			</li>

		</ul>

	</div>
</section>


<section class="images">
	<div class="container">
		<img src="<?php the_field('kartinka'); ?>" alt="" title="">
	</div>
</section>

<section class="list-text">
	<div class="container">
		<ul class="list-text__list">
			<li class="list-text__item">
				<?php
				if (have_rows('blok_teksta_pod_kartinkoj')) { // если найдены данные 
					while (have_rows('blok_teksta_pod_kartinkoj')) {
						the_row(); ?>
						<div class="list-text__block-text">
							<p class="list-text__paragraph text"><?php the_sub_field('tekst_pod_kartinkoj'); ?></p>

						</div>

				<?php	}
				} else {
					// строки не найдены 
				}
				?>


			</li>

		</ul>

	</div>
</section>


<?php get_footer(); ?>