<?php get_header(); ?>



<section id="single-post">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="path">
					<?php
					if (function_exists('yoast_breadcrumb')) {
						yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
					}
					?>
				</div>
			</div>
		</div>
		<div class="row row-content">
			<div class="col-lg-12">
				<h1><?php the_title(); ?></h1>
				<div class="interesting__content"><?php the_content(); ?></div>

			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>