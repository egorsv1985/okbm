<?php get_header(); ?>
	<main class="page">
		<div class="page__container">
			<div class="page__singular">
				
            <h1 class="list__title title">Сертифицированные психосоматы</h1>
					<div class="list__body">
                    <?php
					// параметры по умолчанию
						$my_posts = get_posts( array(
							'posts_per_page' => -1,
							'category_name'    => 'certified_psychosomatics',
							'orderby'     => 'date',
							'order'       => 'DESC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'card',
							'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
						) );

						foreach( $my_posts as $post ){
							setup_postdata( $post );
							?>
								<article class="list__item item-list item-list_grad _icon-star">
									<a href="<?php the_permalink(); ?>" class="item-list__image-ibg">
										<img src="<?php the_field( 'avatar' ); ?>" alt="<?php the_title(); ?>">
									</a>
									<div class="item-list__body">
										<a href="<?php the_permalink(); ?>" class="item-list__link">
											<h3 class="item-list__title"><?php the_title(); ?></h3>
										</a>
										<div class="item-list__cost"><?php the_field( 'home-cost' ); ?></div>
										<div class="item-list__location _icon-location"><?php the_field( 'city' ); ?></div>
									</div>
								</article>
							<?php
						}
						 wp_reset_postdata(); // сброс
?>
					</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>