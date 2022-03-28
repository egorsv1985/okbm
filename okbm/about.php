<?php
/*
Template Name: О нас
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
	<h2 class="title-page title">О НАС</h2>
</div>


<section class="galery">
	<div class="container">
		<?php echo do_shortcode('[metaslider id="98"]'); ?>
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
<div class="about__contacts contacts">
	<a class="contacts__tel" href="tel: +74732001045">+7 (473) 200 10 45</a>
	<a class="contacts__mail" href="mailto:okbm@okbm.ru">okbm@okbm.ru</a>
</div>
<?php get_footer(); ?>