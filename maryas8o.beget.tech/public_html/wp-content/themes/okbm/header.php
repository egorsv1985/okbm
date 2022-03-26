<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo get_the_title(); ?> </title>


	<?php wp_head(); ?>
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header__wrapper">
				<div class="header__logo logo"><?php echo get_custom_logo(); ?>

				</div>

				<div class="header__inner">
					<div class="header__contacts">
						<a href="tel: +74732001045" class="header__tel">+7 (473) 200 10 45</a>
						<a href="mailto:okbm@okbm.ru" class="header__mail">okbm@okbm.ru</a>
					</div>
					<div class="header__menu">
						<nav class="menu-top">
							<span>Меню</span>


							<?php wp_nav_menu(
								array(
									'theme_location' => 'menu-top',
									'menu_class' => 'menu-top__list',
									'menu_id' => 'nav'
								)
							);
							?>
							<php wp_nav_menu(); ?>


						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>