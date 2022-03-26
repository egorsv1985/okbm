<?php get_header(''); ?>
<div class="container">
  <div class="path">
    <a href="<?php echo home_url(); ?>">Главная</a>
    <span>Сбой оплаты</span>
  </div>
  <div class="error">
    <span class="error__title">Оплата не прошла</span>
    <span class="error__subtitle">Возможно стоит выбрать другой вариант оплаты или повторить платеж через некоторе время, проверив реквизиты</span>
    <div class="error__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/err-human.png" alt=""></div>
    <a href="<?php the_permalink(282); ?>"><button class="error__btn">Вернуться в корзину</button></a>
  </div>
</div>
<?php get_footer(''); ?>