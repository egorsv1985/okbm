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
	<!-- <div class="wrapper"> -->
	<!-- <header class="header">
			<div class="header__container">
				<div class="header__body">
					<div class="header__main">
						<a href="<?php bloginfo('url'); ?>" class="header__logo logo ">
							<div class="logo__body _icon-logo">
								<p>Международная<br>академия проработок<br>«Tandi»</p>
							</div>
						</a>
					</div>
					<div class="header__actions">
						<?php if (is_user_logged_in()) : ?>
							<div class="header__user user-header">
								<a href="/tandi/user" class="user-header__avatar-ibg">
									<?php echo get_avatar($user_ID); ?>
								</a>

								<a href="/tandi/user" class="user-header__name">
									<?php
									$current_user = wp_get_current_user();
									echo $current_user->user_firstname;
									echo ' ' . $current_user->user_lastname;
									?>
								</a>
								Выход
	 <? if (isset($_GET['logout'])) {
								wp_logout();
								wp_redirect(home_url());
							}
		?>
	<a class="user-header__exit" href="<?php echo $_SERVER['REQUEST_URI'] . '?logout=true'; ?>">(Выйти)</a>
	// Выход -->
	<!-- </div>
<?php else : ?>
	<div class="header__buttons">
		<a href="/tandi/login" class="header__button button">Войти</a>
		<a href="/tandi/register" class="header__button button">Регистрация</a>
	</div>
<?php endif; ?>
</div>
<div class="header__burger burger">
	<button type="button" class="burger__icon icon-menu"><span></span></button>
</div>
</div>
</div>
</header> -->

	<header class="header">
		<div class="container">
			<div class="header__wrapper">
				<div class="header__logo"><?php echo get_custom_logo(); ?>

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
	<!-- 
<header class="header">
	<div class="container header__wrapper">
		<div class="header__logo"><?php echo get_custom_logo(); ?>
			<span class="logo-text">СИМВОЛО-АДАПТЕРЫ: серия ЗДРАВ</span>
		</div>

		<ul class="header__menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'top',
					'container' => false,
					'menu_class' => 'burger__menu header_menu menu',
				)
			);
			?>

		</ul>
		<div class="right-toolbar">
			<div class="header__cart">
				<div class="counter"><?php echo $items_count ?></div>
				<a href="<?php echo get_page_link(282) ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart.svg" alt=""></a>
			</div>
			<div class="header__burger"><span class="header__stick"></span></div>
			<nav class="burger__nav">

			</nav>
		</div>
</header> -->
	<!-- 

<div class="menu-right">
	<div class="close-btn">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/close-btn.svg" alt="">
	</div>
	<div class="content">

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'top',
				'container' => false,
				'menu_class' => 'burger__menu mobile_menu menu',
			)
		);
		?>


		<div class="bottom-links">
			<a href="https://www.instagram.com/s.adapter.by/">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="">
			</a>
			<a href="https://t.me/RENaCoMSQ">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/telegram.svg" alt="">
			</a>
			<a href="https://wa.me/79033385876">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/whatsapp.svg" alt="">
			</a>
		</div>
	</div>
</div> -->