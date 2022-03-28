<?php
/*
Template Name: Производство
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
	<h2 class="title-page title">производство</h2>
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
<section class="block-text">
	<div class="container">
		<div class="block-text__wrapper">
			<?php $loop = CFS()->get('text');
			foreach ($loop as $row) {
			?>

				<p class="block-text__paragraph text"><?= $row['paragraph'] ?></p>

			<?php
			}
			?>
		</div>

	</div>
</section>
<section class="galery">
	<div class="container">
		<?php echo do_shortcode('[metaslider id="126"]'); ?>
	</div>
</section>

<section class="block-text">
	<div class="container">
		<div class="block-text__wrapper">
			<?php $loop = CFS()->get('text_2');
			foreach ($loop as $row) {
			?>

				<p class="block-text__paragraph text"><?= $row['block_text'] ?></p>

			<?php
			}
			?>
		</div>

	</div>
</section>

<?php get_footer(); ?>