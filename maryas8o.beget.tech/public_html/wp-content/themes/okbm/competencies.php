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
	<h2 class="description__title title title--page"><?php the_field('zagolovok') ?></h2>
	<div class="description__wrapper">
		<div class="container">
			<h2 class="description__title title--none title"><?php the_field('zagolovok') ?></h2>
			<div class="description__photo">

				<?php $foto_manager = get_field('foto_manager'); ?>
				<img src="<?php echo $foto_manager['url'] ?>" alt="<?php $foto_manager['alt'] ?>" title="<?php echo $foto_manager['title'] ?>">
				<div class="description__img-desc">
					<h2 class="description__name"><?php the_field('name_manager') ?></h2>
					<h3 class="description__position"><?php the_field('dolgnost_manager') ?></h3>
				</div>
			</div>
		</div>
		<div class="description__inner">
			<div class="description__block-text">
				<h3 class="description__subtitle subtitle"><?php the_field('zagolovok_opisania_manager') ?></h3>
				<p class="description__text text"><?php the_field('opisania_manager') ?></p>
			</div>
			<div class="description__block-text">
				<h3 class="description__subtitle subtitle"><?php the_field('zagolovok_opisania_manager_2') ?></h3>
				<p class="description__text text"><?php the_field('opisania_manager_2') ?></p>
			</div>
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
<section class="list-text">
	<div class="container">
		<?php
		$loop = CFS()->get('spisok_text');
		foreach ($loop as $row) {
		?>
			<li class="list-text__item">
				<h2 class="list-text__title title"><?= $row['title'] ?></h2>
				<?php
				$loop = CFS()->get('text');
				foreach ($loop as $element) {
				?>
					<p class="list-text__paragraph text"><?= $element['element'] ?></p>
				<?php
				}
				?>
			</li>
		<?php
		}
		?>
		<ul class="list-text__list">
			<?php
			// check if the repeater field has rows of data
			if (have_rows('opisanie_spiskom')) :
				// loop through the rows of data
				while (have_rows('opisanie_spiskom')) : the_row(); ?>


					<li class="list-text__item">
						<h3 class="list-text__title title"><?php echo the_sub_field('zagolovok_spiska') ?></h3>
						<p class="list-text__paragraph text"><?php the_field('description_spiska'); ?></p>
					</li>


			<?php endwhile;
			else :
			// no rows found
			endif;
			?>

			<p class="effect__afterlist"><?php the_field('tekst_pod_spiskom'); ?></p>
			<a class="btn-modal" data-fancybox data-src="#hidden-content" href="javascript:;">
				Получить онлайн консультацию
			</a>
			<div style="display: none;" id="hidden-content">
				<?php echo do_shortcode('[contact-form-7 id="284" title="Контактная форма"]') ?>
			</div>

		</ul>
	</div>
</section>
<section class="list-text">
	<div class="container">
		<ul class="list-text__list">
			<li class="list-text__item">
				<h2 class="list-text__title title">2.1 Термическая обработка конструкционных, легированных и
					высоколегиро-ванныхсталей:</h2>
				<p class="list-text__paragraph text">- максимальная температура нагрева - 1050 °С;</p>
				<p class="list-text__paragraph text"> - габаритные размеры изделий BxHxL 300x500х500 мм.</p>
				<p class="list-text__paragraph text"> - Цементация, глубина слоя от 0,4 мм до 1,6 мм.</p>
				<p class="list-text__paragraph text"> - Газовое азотирование, глубина слоя от 0,3 мм до 0,6 мм.</p>
				<p class="list-text__paragraph text"> - Термическая обработка алюминиевых сплавов</p>
			</li>
			<li class="list-text__item">
				<h2 class="list-text__title title">2.2 Нанесение различного вида химических и гальванических
					покрытий:</h2>
				<p class="list-text__paragraph text">- меднение (мерное и защитное), толщина покрытия от 3 мкм до
					100 мкм (химическое оксидное фосфатирование).</p>
				<p class="list-text__paragraph text">- нанесение цинковых покрытий, толщина слоя от 6 до 18 мкм.</p>
				<p class="list-text__paragraph text">- нанесение свинцового покрытия, толщина слоя от 1 до 6 мкм.
				</p>
				<p class="list-text__paragraph text">- Кадмирование стальных деталей, толщина слоя от 3 мкм до 18
					мкм.</p>
				<p class="list-text__paragraph text">- Лужение стальных деталей, толщина слоя от 6 мкм до 15 мкм.
				</p>
				<p class="list-text__paragraph text">Операции нанесения гальванических покрытий выполняются на
					подвесках, габариты ванн1000х600х800 мм.</p>
			</li>
			<li class="list-text__item">
				<h2 class="list-text__title title">2.3 Хромирование.</h2>
			</li>
			<li class="list-text__item">
				<h2 class="list-text__title title">2.4 Нанесение лакокрасочных и грунтовых покрытий в специальных
					покрасочных камерах:</h2>
				<p class="list-text__paragraph text">Габаритные размеры окрашиваемых изделий BxHxZ до 1000x1000x600
					мм.</p>
			</li>
			<li class="list-text__item">
				<h2 class="list-text__title title">2.5 Изготовление различного рода резинотехнических изделий:</h2>
				<p class="list-text__paragraph text">- манжеты, кольца и т.д.</p>
				<p class="list-text__paragraph text">- Имеется возможность изготовления прессформ и РТИ по чертежам
					Закачика.
				</p>
			</li>
			<li class="list-text__item">
				<h2 class="list-text__title title">2.6 Кузнечно-прессовый участок:</h2>
				<p class="list-text__paragraph text">Имеется возможность изготавливать малогабаритные штамповки из
					сталей и алюминиевыхсплавов на гидравлическом прессе.</p>
				<p class="list-text__paragraph text">Максимальные размеры штамповок - до 80 мм. Проектирование и
					изготовление штамповочной оснастки для заказываемых деталей.</p>
			</li>
		</ul>
		<div class="list-text__contacts">
			<a href="mailto:okbm@okbm.ru">okbm@okbm.ru,</a>
			<a href="tel:+7(473)200-10-45">тел. +7(473)200-10-45</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>