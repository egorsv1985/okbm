<?php
/*
Template Name: Компетенции
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
	<h2 class="title-page title">Компетенции</h2>
</div>
<section class="manager">
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

<section class="galery">
	<div class="container">
		<?php echo do_shortcode('[metaslider id="142"]'); ?>
	</div>
</section>
<section class="competencies">
	<div class="container">
		<?php wp_nav_menu(
			array(
				'theme_location' => 'competencies-menu',
				'menu_class' => 'competencies__menu-mob menu',
				'menu_id' => 'competencies',
				'container,' => false,
			)
		);
		?>

		<?php wp_nav_menu(
			array(
				'theme_location' => 'competencies-menu',
				'menu_class' => 'competencies__menu menu',
				'menu_id' => 'competencies',
				'container,' => false,
			)
		);
		?>
	</div>
</section>

<section class="list-text">
	<div class="container">
		<ul class="list-text__list">
			<li class="list-text__item">
				<?php
				if (have_rows('block_text')) { // если найдены данные 
					while (have_rows('block_text')) {
						the_row(); ?>
						<div class="manager__block-text">
							<h2 class="list-text__title title"><?php the_sub_field('title'); ?></h4>
								<?php
								if (have_rows('text_list')) { // если найдены данные 
									while (have_rows('text_list')) {
										the_row(); ?>
										<div class="manager__block-text">
											<p class="list-text__paragraph text"><?php the_sub_field('text'); ?></h4>

										</div>

								<?php	}
								} else {
									// строки не найдены 
								}
								?>
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