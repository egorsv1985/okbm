<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="<?php echo bloginfo( 'stylesheet_directory' ); ?>/assets/fonts/fonts.css">
	<link rel="shortcut icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo get_the_title(); ?> </title>

	
	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<div class="header__body">
					<div class="header__main">
						<a href="<?php bloginfo( 'url' ); ?>" class="header__logo logo ">
							<div class="logo__body _icon-logo">
								<p>Международная<br>академия проработок<br>«Tandi»</p>
							</div>
						</a>
					</div>
					<div class="header__actions">
						<?php if( is_user_logged_in() ) : ?>
							<div class="header__user user-header">
								<a href="/tandi/user" class="user-header__avatar-ibg">
									<?php echo get_avatar( $user_ID ); ?>
								</a>

								<a href="/tandi/user" class="user-header__name">
									<?php 
										$current_user = wp_get_current_user();
										echo $current_user->user_firstname;
										echo ' ' . $current_user->user_lastname;
									?>
								</a>
								<!-- Выход -->
								<? if( isset( $_GET['logout'] ) )
									{
										wp_logout(); wp_redirect( home_url() );
									}
								?>
								<a class="user-header__exit" href="<?php echo $_SERVER['REQUEST_URI'].'?logout=true'; ?>">(Выйти)</a>
								<!-- // Выход -->
							</div>
						<?php else: ?>
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
		</header>