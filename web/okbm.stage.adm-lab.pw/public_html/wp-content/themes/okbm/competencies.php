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
	<h2 class="title-page title"><?php the_title(); ?></h2>
</div>
<div class="img">
	<?php the_content(); ?>
</div>
<section class="manager manager--page">
	<div class="container">
		<div class="manager__wrapper">
			<div class="manager__photo">
				<img class="manager__img" src="<?php the_field('foto_menedzhera'); ?>" alt="" title="">
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

<section class="galery">

	<?php echo do_shortcode('[metaslider id="142"]'); ?>

</section>
<section class="competencies">
	<div class="container">
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
	<?php wp_nav_menu(
		array(
			'theme_location' => 'competencies-menu',
			'menu_class' => 'competencies__menu-mob menu-mob',
			'menu_id' => 'competencies',
			'container,' => false,
		)
	);
	?>
</section>
<section class="list-text">
	<div class="container">
		<ul class="list-text__list">
			<li class="list-text__item">
				<?php
				if (have_rows('blok_teksta')) { // если найдены данные 
					while (have_rows('blok_teksta')) {
						the_row(); ?>
						<div class="list-text__block-text">
							<h2 class="list-text__title title"><?php the_sub_field('zagolovok'); ?></h2>
							<?php
							if (have_rows('testovyj_blok')) { // если найдены данные 
								while (have_rows('testovyj_blok')) {
									the_row(); ?>
									<p class="list-text__paragraph text"><?php the_sub_field('tekst'); ?></p>
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