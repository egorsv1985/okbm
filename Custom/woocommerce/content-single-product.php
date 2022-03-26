<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;


?>

<div class="page-header-wrapper">
  <div class="container">
    <div class="path">
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
      }
      ?>
    </div>
  </div>
</div>
<!-- End Page Header Wrapper -->

<?php
$product_image_id = $product->get_image_id();
$product_gallery_ids = $product->get_gallery_image_ids();
$image_url = wp_get_attachment_image_url($product_image_id, 'full');
?>

<!--== Start Single Product Page Wrapper ==-->
<div id="single-product-page" <?php wc_product_class('add_custom_class', $product); ?>>
  <div class="container">
    <div class="row">
      <div class="col">
        <?php do_action('woocommerce_before_single_product'); ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row row--mobile">



      <h2 class="product__title product__title--mobile d-none"><?php the_title(); ?></h2>

      <div class="product__wrap">
        <div class="product-thumb-carousel vertical-tab">
          <div>
            <?php echo $product->get_image() ?>
          </div>

          <?php if ($product_gallery_ids) : ?>
            <?php foreach ($product_gallery_ids as $product_gallery_id) : ?>

              <div>
                <?php echo wp_get_attachment_image($product_gallery_id, 'woocommerce_single') ?>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>

        </div>


        <div class="slider-bottom">
          <div>
            <?php echo $product->get_image() ?>
          </div>

          <?php if ($product_gallery_ids) : ?>
            <?php foreach ($product_gallery_ids as $product_gallery_id) : ?>

              <div>
                <?php echo wp_get_attachment_image($product_gallery_id, 'woocommerce_single') ?>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

      </div>

      <div class="product__wrapper">
        <h2 class="product__title"><?php the_title(); ?></h2>
        <div class="price">
          <?php echo $product->get_price_html() ?>
        </div>

        <div class="line-buy">
          <?php woocommerce_template_single_add_to_cart() ?>
        </div>

        <p class="product__description">
          <?php echo $product->get_description() ?>
        </p>

        <div class="bottom_header">
          <?php the_field('zagolovok_pod_kratkim_opisaniem') ?>
        </div>




      </div>
    </div>


  </div>
</div>





<section class="about about__page-foods">
  <div class="container">
    <h2 class="about__title"><?php the_field('zagolovok_glavnogo_opisaniya') ?></h2>
    <div class="about__wrap">
      <div class="about__upper-text">

        <?php the_field('blok_-_opisanie_tovara') ?>
        <div class="about__lower">
          <p class="about__lower-text"><?php the_field('tekst_sleva') ?></p>
        </div>
      </div>
      <div class="about__wrapper">
        <div class="about__image">
          <?php $izobrazhenie_sprava = get_field('izobrazhenie_sprava'); ?>
          <img src="<?php echo $izobrazhenie_sprava['url'] ?>" alt="<?php $izobrazhenie_sprava['alt'] ?>" title="<?php echo $izobrazhenie_sprava['title'] ?>">

          <!-- 
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/item/about-image.webp" type="image/webp" alt="upper-image">
            <img src="<?php echo get_template_directory_uri(); ?>//assets/img/item/about-image.png" alt="upper-image" />
          </picture> -->
        </div>
      </div>

    </div>
  </div>


</section>

<section class="effect">
  <div class="container">
    <h2 class="effect__title">Какое воздействие оказывает</h2>
    <div class="effect__info">
      <div class="effect__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item/hands.png" alt="">
      </div>
      <div class="effect__list">
        <?php
        // check if the repeater field has rows of data
        if (have_rows('opisanie_spiskom')) :
          // loop through the rows of data
          while (have_rows('opisanie_spiskom')) : the_row(); ?>


            <div class="effect__item">
              <h3 class="effect__text"><?php echo the_sub_field('tekst') ?></h3>
              <div class="effect__line">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item/effect-line.svg" alt="">
              </div>
            </div>


        <?php endwhile;
        else :
        // no rows found
        endif;
        ?>

        <p class="effect__afterlist"><?php the_field('tekst_pod_spiskom'); ?></p>
        <a class="btn-modal" data-fancybox data-src="#hidden-content" href="javascript:;">
          Получить онлайн консультацию
        </a>
        <div style="display: none;" id="hidden-content">
          <?php echo do_shortcode('[contact-form-7 id="284" title="Контактная форма"]') ?>
        </div>

      </div>

      <div class="w355"></div>
    </div>
  </div>
</section>







<!--== Start Related Products Area ==-->
<section id="related-products-wrapper" class="pb-48 pb-md-18 pb-sm-8">
  <div class="container">
    <div class="row">
      <!-- Start Section title -->
      <div class="col">
        <div class="section-title-wrap">
          <h2>С этим товаром покупают</h2>
        </div>
      </div>
      <!-- End Section title -->
    </div>


    <div class="products-on-column">
      <?php
      $related_products = array(); // array( 5, 10, 35 )

      $upsells = $product->get_upsell_ids();

      if ($upsells) {
        $related_products = $upsells;
      } else {
        $related_products = wc_get_related_products($product->get_id(), 5);
      }

      ?>
      <?php foreach ($related_products as $related_product) : ?>

        <?php
        $post_object = get_post($related_product);

        setup_postdata($GLOBALS['post'] = &$post_object); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

        wc_get_template_part('content', 'product-goods');
        ?>

      <?php endforeach; ?>

    </div>
  </div>
</section>
<!--== End Related Products Area ==-->








<?php get_footer(); ?>