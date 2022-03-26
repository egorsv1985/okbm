<?php get_header(); ?>
<main class="page">
	<section class="page__main-block main-block">
		<div class="main-block__container _icon-logo">
			<div class="main-block__body">
				<div class="main-block__image">

					<img src="<?php echo IMG_DIR; ?>/main-image.png" alt="Специалисты-психосоматы Академии проработок «TANDI»">

				</div>
				<div class="main-block__content">
					<h1 class="main-block__title title title_grad">
						Специалисты-психосоматы Академии проработок «TANDI»
					</h1>
					<p class="main-block__text">Хочешь быть в их числе?<br>Присоединяйся</p>
					<a href="http://tandiroom.ru/" target="_blank" class="main-block__button button">Присоединиться</a>
				</div>
			</div>
		</div>
	</section>
	<section class="page__list list">
		<div class="list__container">
			<h2 class="list__title title title_grad">Кураторы академии</h2>
			<div class="list__body">
				<?php
				// параметры по умолчанию
				$my_posts = get_posts(array(
					'numberposts' => 4,
					'category_name'    => 'academy_curators',
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  => '',
					'post_type'   => 'card',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				));

				foreach ($my_posts as $post) {
					setup_postdata($post);
				?>
					<article class="list__item item-list item-list_grad _icon-star">
						<a href="<?php the_permalink(); ?>" class="item-list__image-ibg">
							<img src="<?php the_field('avatar'); ?>" alt="<?php the_title(); ?>">
						</a>
						<div class="item-list__body">
							<a href="<?php the_permalink(); ?>" class="item-list__link">
								<h3 class="item-list__title"><?php the_title(); ?></h3>
							</a>
							<div class="item-list__cost"><?php the_field('home-cost'); ?></div>
							<div class="item-list__location _icon-location"><?php the_field('city'); ?></div>
						</div>
					</article>
				<?php
				}
				wp_reset_postdata(); // сброс
				?>
			</div>
			<div class="list__footer">
				<a href="/catalog_ac/" class="list__more button button_s">Смотреть еще</a>
			</div>
		</div>
	</section>
	<section class="page__list list">
		<div class="list__container">
			<h2 class="list__title title title_grad">Дипломированные психосоматы</h2>
			<div class="list__body">

				<?php
				// параметры по умолчанию
				$my_posts = get_posts(array(
					'numberposts' => 4,
					'category_name'    => 'diploma_psychosomatists',
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  => '',
					'post_type'   => 'card',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				));

				foreach ($my_posts as $post) {
					setup_postdata($post);
				?>
					<article class="list__item item-list _icon-star">
						<a href="<?php the_permalink(); ?>" class="item-list__image-ibg">
							<img src="<?php the_field('avatar'); ?>" alt="<?php the_title(); ?>">
						</a>
						<div class="item-list__body">
							<a href="<?php the_permalink(); ?>" class="item-list__link">
								<h3 class="item-list__title"><?php the_title(); ?></h3>
							</a>
							<div class="item-list__cost"><?php the_field('home-cost'); ?></div>
							<div class="item-list__location _icon-location"><?php the_field('city'); ?></div>
						</div>
					</article>
				<?php
				}
				wp_reset_postdata(); // сброс
				?>

			</div>
			<div class="list__footer">
				<a href="/catalog_dp/" class="list__more button button_s">Смотреть еще</a>
			</div>
		</div>
	</section>

	<section class="page__list list">
		<div class="list__container">
			<h2 class="list__title title">Сертифицированные психосоматы</h2>
			<div class="list__body">

				<?php
				// параметры по умолчанию
				$my_posts = get_posts(array(
					'numberposts' => 4,
					'category_name'    => 'certified_psychosomatics',
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  => '',
					'post_type'   => 'card',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				));

				foreach ($my_posts as $post) {
					setup_postdata($post);
				?>
					<article class="list__item item-list item-list_gray _icon-star">
						<a href="<?php the_permalink(); ?>" class="item-list__image-ibg">
							<img src="<?php the_field('avatar'); ?>" alt="<?php the_title(); ?>">
						</a>
						<div class="item-list__body">
							<a href="<?php the_permalink(); ?>" class="item-list__link">
								<h3 class="item-list__title"><?php the_title(); ?></h3>
							</a>
							<div class="item-list__cost"><?php the_field('home-cost'); ?></div>
							<div class="item-list__location _icon-location"><?php the_field('city'); ?></div>
						</div>
					</article>
				<?php
				}
				wp_reset_postdata(); // сброс
				?>

			</div>
			<div class="list__footer">
				<a href="/catalog_sp/" class="list__more button button_s">Смотреть еще</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>