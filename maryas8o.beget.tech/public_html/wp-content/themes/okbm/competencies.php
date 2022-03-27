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

<section class="description description--bg">
	<h2 class="description__title title title--page"><?= CFS()->get('zagolovok') ?></h2>
	<div class="description__wrapper">
		<div class="container">
			<h2 class="description__title title--none title"><?= CFS()->get('zagolovok') ?></h2>
			<div class="description__photo">
				<?php $foto_manager = CFS()->get('foto_manager'); ?>
				<img src="<?php echo $foto_manager['url'] ?>" alt="<?php $foto_manager['alt'] ?>" title="<?php echo $foto_manager['title'] ?>">
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
					<h3 class="description__subtitle subtitle"><?= $row['	zagolovok_opisania_manager'] ?></h3>
					<p class="description__text text"><?= $row['opisania_manager_text'] ?></p>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</section>

<section class="galery">
	<div class="container">
		<?php echo do_shortcode('[metaslider id="98"]'); ?>
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
<section class="post">
	<div class="container">

		<?php
		global $post;

		$myposts = get_posts([
			'numberposts' => 1,

		]);

		if ($myposts) {
			foreach ($myposts as $post) {
				setup_postdata($post);
		?>
				<div class="post__wrapper"><?php the_content(); ?></div>
		<?php
			}
		}

		wp_reset_postdata(); // Сбрасываем $post
		?>


	</div>

</section>

<?php get_footer(); ?>