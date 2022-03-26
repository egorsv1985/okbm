<?php get_header(''); ?>
<div class="container">
    <div class="path">
        <a href="<?php echo home_url(); ?>">Главная</a>
        <span>Успешная оплата</span>
    </div>
    <div class="error">
        <span class="error__title">Оплата произведена</span>
        <span class="error__subtitle">Спасибо за покупку! Надеемся, что наш товар Вам понравится и Вы заглянете к нам ещё.</span>
        <div class="error__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/err-human.png" alt=""></div>
        <a href="<?php echo home_url(); ?>"><button class="error__btn">Вернуться на главную</button></a>
    </div>
    <div class="offer">
        <div class="slider-overlay">
            <div class="offer__list">
                <?php
                $my_posts = get_posts(array(
                    'numberposts' => 0,
                    'order' => 'ASC',
                    'category_name'    => 'items',
                    'post_type'   => 'post',
                    'exclude'     => array(41),
                    'suppress_filters' => true,
                ));

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                ?>
                    <div class="offer__item">
                        <img src="<?php the_field('item-image'); ?>" alt="" class="offer__image">
                        <span class="offer__name"><?php the_title(); ?></span>
                        <span class="offer__price"><?php the_field('item-price'); ?> руб.</span>
                        <div class="offer__btn-group">
                            <a href="<?php the_field('link'); ?>"><span class="offer__more">Подробнее</span></a>
                            <button class="offer__btn">В корзину</button>
                        </div>
                    </div>
                <?php
                }

                wp_reset_postdata();
                ?>
            </div>
            <div class="offer__arrows">
                <div class="left-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Arrow 4.svg" alt="Arrow"></div>
                <div class="right-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Arrow 3.svg" alt="Arrow"></div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(''); ?>