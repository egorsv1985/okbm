<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="stylesheet" href="<?php echo bloginfo( 'stylesheet_directory' ); ?>/assets/fonts/fonts.css">
		<link rel="shortcut icon" href="favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Регистрация</title>
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="container-login">
			<div class="login__body">
				<h1 class="login__title title register-title">Регистрация</h1>
				<?php echo do_shortcode('[ultimatemember form_id="198"]'); ?>
				<p class="login__footer-text">Нажимая кнопку Вы принимаете Пользовательское соглашение и Политику обработки персональных данных</p> 
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>




















