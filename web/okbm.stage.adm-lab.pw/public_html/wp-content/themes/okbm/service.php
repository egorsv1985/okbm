<?php
/*
Template Name: Дочерние предприятия
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