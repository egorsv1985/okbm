<?php
/*
Template Name: main page
*/
?>

<?php if (is_page(2)) {
  // get_template_part( 'header-page' );  
  get_header();
} else {
  get_header();
} ?>

<div class="wrapper">

  <section class="hero">
    <div class="container">
      <div class="hands">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/hands2.png" srcset="<?php bloginfo('template_url'); ?>/assets/img/hands2@2x.png 2x" alt="">
        <svg class="" width="435" height="53" viewBox="0 0 435 53" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="5.5" cy="47.5" r="5.5" fill="#C0FBFF" />
          <path d="M8.5 47L165.042 1H435" stroke="#C0FBFF" />
        </svg>
      </div>
      <div class="hero__grid">
        <div class="hero__up-box"></div>
        <div class="hero__box"></div>
        <div class="hero__wrap">


          <h1 class="hero__title">Как не болеть и сохранить здоровье для энергичной жизни</h1>
          <h2 class="hero__subtitle">Применение устройства ЗДРАВ:</h2>
          <ul class="hero__list">
            <li class="hero__item">Продлевают ресурс организма человека на треть и более.</li>
            <li class="hero__item">Помогает предохраниться от ГРИППА И COVID без «средств индивидуальной защиты».</li>
            <li class="hero__item">Противопоказаний нет.</li>
            <li class="hero__item">Подходит всем.</li>
          </ul>
          <div class="hero__btn-group">
            <a class="btn-modal" data-fancybox data-src="#hidden-content" href="javascript:;">
              Получить онлайн консультацию
            </a>
            <div style="display: none;" id="hidden-content">
              <?php echo do_shortcode('[contact-form-7 id="284" title="Контактная форма"]') ?>
            </div>
            <!-- <a href="#callback"><button class="btn-modal">Получить онлайн консультацию</button></a> -->
            <a class="hero__btn-link" href="#how-it-work">
              <span class="hero__more">Все устройства</span>
              <div class="hero__more-arrow"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>




  <ul class="side__contacts contacts">
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
      <a class="contacts__links" href="https://wapp.click/79033385876">
        <img class="contacts__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.svg" alt="">
      </a>
    </li>
  </ul>




  <section class="about">
    <div class="container">
      <div class="about__wrap">
        <div class="about__upper-text">
          <h2 class="about__title">Что такое устройство ЗДРАВ:</h2>
          <p class="about__subtitle">Внешне простое изделие, влияющие на структуру материи, подстраивающее её под
            нужды любого человека самым оптимальным для него образом.</p>
        </div>
        <div class="about__wrapper">
          <div class="about__image-upper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home_page/about_img.png" alt="">
          </div>
          <p class="about__description">Изделие сделано по уникальной технологии из экологичных материалов. Является
            сильным помощником для естественного укрепления иммунитета человека. В основе наших разработок лежит
            технология управляемого пси-поля, создаваемого для нормализации продуктов и защиты организма от разрушающих
            факторов. Он работает не от батарейки, а на иных физико-полевых законах природы.</p>
        </div>
        <div class="about__lower">
          <p class="about__lower-text">Это новая технология, у которой нет аналогов.</p>
        </div>
      </div>
    </div>
  </section>

</div>


<section class="how-it-work" id="how-it-work">
  <div class="inner-block">
    <div class="container">
      <h2 class="how-it-work__title">Как работает</h2>
      <h3 class="how-it-work__subtitle">Воздействие каждого из серии устройств ЗДРАВ разное:</h3>
      <div class="how-it-work__list">


        <!-- Рекомендуемые товары -->

        <?php
        $product_ids_on_sale = wc_get_product_ids_on_sale();
        $args = array(
          'post_type' => 'product',
          'tax_query' => array(
            array(
              'taxonomy' => 'product_visibility',
              'field'    => 'name',
              'terms'    => 'featured',
            ),
          ),
          'posts_per_page' => 6,
          'orderby' => ''
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) {
          while ($loop->have_posts()) : $loop->the_post();
            wc_get_template_part('content', 'product');
          endwhile;
        } else {
          echo __('');
        }
        wp_reset_postdata();
        ?>


        <!--   <?php
                $my_posts = get_posts(array(
                  'numberposts' => 0,
                  'order' => 'ASC',
                  'category_name'    => 'items',
                  'post_type'   => 'post',
                  'suppress_filters' => true,
                ));

                foreach ($my_posts as $post) {
                  setup_postdata($post);
                ?>
      <div class="how-it-work__item">
        <div class="item__box-img">
          <img src="<?php the_field('item-image'); ?>" alt="" class="item-img">
        </div>            
        <div class="item-info">
          <h3 class="item-title"><?php the_title(); ?></h3>
          <p class="item-description"><?php the_content(); ?></p>
          <span class="item-price"><?php the_field('item-price'); ?> руб.</span>
          <div class="item-btn-group">
            <button class="buy">Купить сейчас</button>
            <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt fa fa-shopping-cart"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>
            <a class="hero__btn-link" href="<?php the_field('link'); ?>">
              <span class="hero__more">Подробнее</span>
              <div class="hero__more-arrow"></div>
            </a>
          </div>
        </div>
      </div>
      <?php
                }

                wp_reset_postdata();
      ?>           -->
      </div>
    </div>
  </div>

</section>


<section class="buyers">
  <div class="container">
    <h2 class="buyers__title">Для кого серия ЗДРАВ</h2>
    <div class="buyers__info">
      <div class="buyers__box-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/human.svg" alt="" class="buyers__human">
      </div>
      <div class="buyers__list">
        <ul>
          <?php
          // check if the repeater field has rows of data
          if (have_rows('opisanie_pokupatelej')) :
            // loop through the rows of data
            while (have_rows('opisanie_pokupatelej')) : the_row(); ?>

              <li class="buyers__item">
                <h3 class="buyers__text"><?php echo the_sub_field('tekst') ?></h3>
                <div class="buyers__line"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Line.svg" alt=""></div>
              </li>


          <?php endwhile;
          else :
          // no rows found
          endif;
          ?>

        </ul>
      </div>
    </div>
  </div>
</section>

<section class="advantages">
  <div class="container">
    <h2 class="advantages__title">Преимущества устройств серии ЗДРАВ</h2>
    <ul class="advantages__list">
      <li class="advantages__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Ring 1.svg" alt=""><span class="advantages__text">Работает

          пожизненно</span></li>
      <li class="advantages__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Ring 2.svg" alt=""><span class="advantages__text">Не привязан ни
          к
          какому источнику
          питания</span>
      </li>
      <li class="advantages__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Ring 3.svg" alt=""><span class="advantages__text">Не привязан ни
          к
          одной эзотерической
          структуре</span></li>
      <li class="advantages__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Ring 4.svg" alt=""><span class="advantages__text">Не рождает
          зависимостей к чему-либо</span>
      </li>
    </ul>
    <a data-fancybox data-src="#hidden-content" href="javascript:;"><button class="advantages__btn btn-modal btn-animated">Получить онлайн консультацию</button></a>
    <div style="display: none;" id="hidden-content">
      <?php echo do_shortcode('[contact-form-7 id="284" title="Контактная форма"]') ?>
    </div>
  </div>
</section>


<section class="feedback" id="feedback">

  <h2 class="feedback__title">Отзывы</h2>
  <div class="slider-overlay">
    <div class="feedback__slider">

      <?php
      $my_posts = get_posts(array(
        'numberposts' => 0,
        'category_name'    => 'feedback',
        'post_type'   => 'post',
        'suppress_filters' => true,
      ));

      foreach ($my_posts as $post) {
        setup_postdata($post);
      ?>
        <div class="feedback__item">
          <span class="feedback__name"><?php the_title(); ?></span>
          <span class="feedback__text"><?php the_content(); ?></span>
        </div>
      <?php
      }

      wp_reset_postdata();
      ?>
    </div>
    <div class="feedback__arrows">
      <div class="left-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Arrow 4.svg" alt="Arrow"></div>
      <div class="right-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Arrow 3.svg" alt="Arrow"></div>
    </div>
  </div>
</section>

<section class="questions">
  <div class="container">
    <h2 class="questions__title">Еще сомневаетесь в том что это работает?</h2>
    <p class="questions__subtitle">«Нас так часто водили за нос, что теперь мы не верим даже в наше
      спасение»</p>
    <div class="questions__list">

      <?php
      // check if the repeater field has rows of data
      if (have_rows('voprosy')) :
        // loop through the rows of data
        while (have_rows('voprosy')) : the_row(); ?>


          <div class="item close1">
            <div class="item__name">
              <span><?php echo the_sub_field('zagolovok') ?></span>
              <div class="img">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <line x1="0.606445" y1="14.5825" x2="30.6064" y2="14.5825" stroke="#A0FEB5" />
                  <line x1="16.3198" y1="30.1538" x2="16.3198" y2="0.153809" stroke="#A0FEB5" />
                </svg>

              </div>
            </div>

            <div class="item__desc">
              <?php echo the_sub_field('tekst') ?>
            </div>
          </div>




      <?php endwhile;
      else :
      // no rows found
      endif;
      ?>

    </div>
    <span class="questions__afterlist">Но, скажу я вам, ЭТО РАБОТАЕТ.</span>
  </div>
</section>
<section class="author" id="author">
  <div class="container">
    <h2 class="author__title">Об авторе технологии СИМВОЛО-АДАПТЕР</h2>
    <div class="author__info">
      <div class="author__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/author.webp" type="image/webp" alt="Author">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/author.png" alt="Author" />
        </picture>
      </div>
      <div class="author__text">
        <h3 class="author__name">Сергей Николаевич Быков</h3>
        <p class="author__description">Он первооткрыватель технологии всей серии символо-адаптеров. Его можно
          называть целителем, эниопсихологом или просто человеком, много лет посвятившим улучшению
          энергоинформационной и психической составляющей в человеке. Результатом его труда и явились
          символо-адаптеры, нацеленные на то, чтобы сделать жизнь каждого из нас, исключений нет, более
          полноценной
          с точки зрения ЗДРАВИЯ. Ведь здоровье организма определяет практически все потенции нашего Я, перерастая
          во здравие отношений и устремлений, как дома, с друзьями, так и на работе. Подчеркнём, аналогов у
          символо-адаптеров НЕТ. Эта новая, «высокая технология», возможно, известна ещё кому-то на нашей планете,
          но в практической реализации Быков - пионер. Наша команда, сплотившаяся вокруг Сергея Николаевича,
          делает
          всё возможное, чтобы разработки внедрялись в производство и несли людям здоровье и только положительные
          эмоции. <br> Официальный сайт автора: <a href="http://sbykov.by">https://sbykov.by</a> </p>
      </div>
    </div>
  </div>
</section>

<section class="callback" id="callback">
  <div class="container">
    <h2 class="callback__title">Остались вопросы?</h2>
    <p class="callback__subtitle">Ваш запрос придёт к нам на электронную почту, и мы обязательно свяжемся с Вами в ближайшее время.</p>
    <div class="callback__info">
      <?php echo do_shortcode('[contact-form-7 id="284" title="Контактная форма"]') ?>
      <div class="callback__contacts">
        <p class="phones">Телефоны:
          <a class="phones__tel" href="tel: +79033385876">+7 (903) 338-58-76</a>
          <br><a class="phones__tel-bel" href="tel: +375259458786">+375 (25) 945-87-86</a>
        </p>
        <p class="mail">E-mail: <a class="mail__link" href="mailto:renaco.msq@yandex.ru">renaco.msq@yandex.ru</a> </p>
        <p class="adress">Адрес: г.Ульяновск, б-р Фестивальный, дом 3, Компания RENaCo. </p>
        <p class="tax-info">ИП Разин Владимир Алексеевич <br> ОГРНИП 321732500055645 <br> от 16 ноября 2021 г.
          <br>ИНН 732808142329
        </p>
      </div>
    </div>
  </div>
</section>
</div>
<?php get_footer(); ?>