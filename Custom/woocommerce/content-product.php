<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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


// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
  return;
}

$product_published = $product->get_date_created(); // $product_published->date
?>
<!-- Start Single Product -->

<div class="how-it-work__item">
  <div class="item__box-img">
    <?php
    $product_image_id = $product->get_image_id();
    $image_main = wp_get_attachment_image_url($product_image_id, 'full')
    ?>
    <div class="img-block" style="background-image: url(<?php echo $image_main; ?>);"></div>
    <!-- <?php echo $product->get_image() ?> -->
    <!--   	<?php
              do_action('woocommerce_before_shop_loop_item_title');
              ?> -->
  </div>
  <div class="item-info">
    <h3 class="item-title"><?php echo $product->get_title() ?></h3>
    <div class="item-description">
      <?php echo $product->get_short_description() ?>
    </div>
    <span class="item-price"><?php echo $product->get_price_html() ?></span>
    <div class="item-btn-group">
      <div class="line-buy">
        <?php woocommerce_template_single_add_to_cart() ?>
      </div>
      <!-- <a href="<?php echo $product->get_permalink() ?>" class="buy-flex">Купить сейчас</a> -->
      <!-- <a href="<?php echo wc_get_cart_url() ?>" class="btn btn-black "><button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html($product->single_add_to_cart_text()); ?></button></a> -->
      <!-- <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html($product->single_add_to_cart_text()); ?></button> -->

      <a class="hero__btn-link" href="<?php echo $product->get_permalink() ?>">
        <span class="hero__more">Подробнее</span>
        <div class="hero__more-arrow"></div>
      </a>
    </div>
  </div>
</div>











<!-- End Single Product -->