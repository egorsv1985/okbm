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
  <?php 
    $product_image_id = $product->get_image_id();
    $image_main = wp_get_attachment_image_url($product_image_id, 'full') 
  ?>
  <div class="img-block" style="background-image: url(<?php echo $image_main; ?>);"></div>
  <div class="item-info">
    <h3 class="item-title"><?php echo $product->get_title() ?></h3>
    <span class="item-price"><?php echo $product->get_price_html() ?></span>


    <a href="<?php echo $product->get_permalink() ?>" class="more">Подробнее</a>
    <div class="item-btn-group">

      <?php echo apply_filters( 'woocommerce_loop_add_to_cart_link',
    sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="buy %s product_type_%s">%s</a>',
        esc_url( $product->add_to_cart_url() ),
        esc_attr( $product->get_id() ),
        esc_attr( $product->get_sku() ),
        $product->is_purchasable() ? 'add_to_cart_button' : '',
        esc_attr( $product->get_type() ),
        esc_html( $product->add_to_cart_text() )
    ),
$product ); ?>
      
    </div>
  </div>
</div>











<!-- End Single Product -->