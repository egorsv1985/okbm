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
	<div class="wrapper">
		<header class="header">
			<div class="container">
				<div class="header__wrapper">
					<div class="header__logo logo"><?php echo get_custom_logo(); ?>

					</div>

					<div class="header__inner">
						<div class="header__contacts contacts">
							<a class="contacts__tel" href="tel: +74732001045">+7 (473) 200 10 45</a>
							<a class="contacts__mail" href="mailto:okbm@okbm.ru">okbm@okbm.ru</a>
						</div>
						<div class="header__menu">
							<nav class="menu-top">
								<span>Меню</span>
								<div class="menu-open__closemenu">
									<span></span>
									<span></span>
								</div>



							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="menu-open">
			<div class="container">
				<div class="menu-open__wrapper">
					<div class="header__logo logo"><?php echo get_custom_logo(); ?>

					</div>

					<?php wp_nav_menu(
						array(
							'theme_location' => 'header-menu',
							'menu_class' => 'menu-open__list',
							'container' => false,
							'menu_id' => 'nav',
						)
					);
					?>
					<php wp_nav_menu(); ?>

						<div class="menu-open__contacts contacts">
							<a href="tel: +74732001045" class="menu-open__tel">+7 (473) 200 10 45</a>
							<a href="mailto:okbm@okbm.ru" class="menu-open__mail">okbm@okbm.ru</a>
						</div>
				</div>
			</div>

		</div>