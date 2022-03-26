<footer class="footer">
			<div class="footer__container">
				<div class="footer__body">
					<div class="footer__row">
						<a href="<?php bloginfo( 'url' ); ?>" class="footer__logo logo ">
							<div class="logo__body _icon-logo">
								<p>Международная<br>академия проработок<br>«Tandi»</p>
							</div>
						</a>
						<div class="footer__social social">
							<div class="social__title">Мы в соцсетях</div>
							<ul class="social__list">
								<li class="social__item">
									<a class="_icon-youtube" href="#"></a>
								</li>
								<li class="social__item">
									<a class="_icon-insta" href="#"></a>
								</li>
								<li class="social__item">
									<a class="_icon-facebook" href="#"></a>
								</li>
								<li class="social__item">
									<a class="_icon-vk" href="#"></a>
								</li>
								<li class="social__item">
									<a class="_icon-telegram" href="#"></a>
								</li>
							</ul>
						</div>
						<a href="mailto:info@tandischool.getcourse.ru" class="footer__mail">info@tandischool.getcourse.ru</a>
						<div class="footer__question">
							<a href="tel:+79954462095" class="footer__phone">+7 (995) 446-20-95</a>
							<p class="footer__question-text">по общим вопросам и<br> вопросам обучения</p>
						</div>
					</div>
					<div class="footer__row">
						<nav class="footer__nav nav-footer">
							<?php wp_nav_menu( [
								'theme_location'  => 'footer_menu',
								'container'       => null,
								'menu_class'      => 'nav-footer__list',
								'menu_id'         => 'nav-footer',
							] ); ?>
						</nav>
					</div>
					<div class="footer__row">
						<div class="footer__copy">© Tandi 2022</div>
						<div class="footer__info">
							<a target="_blank" href="https://tandischool.ru/dogovoroffert">Оферта</a>
							<a target="_blank" href="http://tandiroom.ru/privacy">Политика конфиденциальности</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<?php wp_footer(); ?>
</body>

</html>