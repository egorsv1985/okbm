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
	<h2 class="title-page title">Дочерние предприятия</h2>
</div>


<section class="list-text">
	<div class="container">
		<ul class="list-text__list">
			<li class="list-text__item">
				<?php
				if (have_rows('blok_texta_nad_kartinkoy')) { // если найдены данные 
					while (have_rows('blok_texta_nad_kartinkoy')) {
						the_row(); ?>
						<div class="manager__block-text">
							<p class="list-text__title title"><?php the_sub_field('text_nad_kartinkoy'); ?></p>
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
		<img class="manager__img" src="<?php the_field('images'); ?>" alt="<?php the_field('images'['alt']); ?>" title="<?php the_field('images'['title']); ?>">
	</div>


</section>

<section class="list-text">
	<div class="container">
		<ul class="list-text__list">
			<li class="list-text__item">
				<?php
				if (have_rows('blok_texta_pod_kartinkoy')) { // если найдены данные 
					while (have_rows('blok_texta_pod_kartinkoy')) {
						the_row(); ?>
						<div class="manager__block-text">
							<p class="list-text__title title"><?php the_sub_field('text_pod_kartinkoy'); ?></p>
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