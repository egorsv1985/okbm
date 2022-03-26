<footer class="footer" id="footer">
  <div class="container">
    <div class="footer__wrapper">
      <div class="footer__logo"><?php echo get_custom_logo(); ?>
        <h3 class="logo-text">СИМВОЛО-АДАПТЕРЫ: серия ЗДРАВ</h3>
      </div>

      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'foot_menu',
          'container' => false,
          'menu_class' => 'footer__menu menu',
        )
      );
      ?>

      <!--  <div class="footer__menu">
      <a href="#how-it-work" class="menu-item">Серия ЗДРАВ </a>
      <a href="#author" class="menu-item">Об авторе</a>
      <a href="#feedback" class="menu-item">Отзывы</a>
    </div> -->


      <div class="footer__social">
        <h4>Контакты</h4>
        <ul class="footer__contacts contacts">
          <li class="contacts__item">
            <a class="contacts__links" href="https://www.instagram.com/s.adapter.by/">
              <img class="contacts__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="">
            </a>
          </li>
          <li class="contacts__item">
            <a class="contacts__links" href="https://t.me/RENaCoMSQ">
              <img class="contacts__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/telegram.svg" alt="">
            </a>
          </li>
          <li class="contacts__item">
            <a class="contacts__links" href="https://wa.me/79033385876">
              <img class="contacts__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.svg" alt="">
            </a>
          </li>
        </ul>
      </div>
      <div class="footer__documents">
        <a href="<?php the_permalink(308); ?>">Оферта</a>
        <a href="<?php the_permalink(88); ?>">Политика конфиденциальности</a>
      </div>
      <div class="footer__rights">© 2022 Все права защищены</div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>