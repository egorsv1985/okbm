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
	<h2 class="title-page title">проектирование</h2>
</div>

<section class="manager">
	<div class="container">
		<div class="manager__photo">
			<img class="manager__img" src="<?php the_field('foto_manager'); ?>" alt="<?php the_field('foto_manager'['alt']); ?>" title="<?php the_field('foto_manager'['title']); ?>">
			<div class="manager__img-desc">

				<h3 class="manager__name"><?php the_field('name_manager'); ?></h3>
				<p class="manager__position"><?php the_field('position_manager'); ?></p>
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