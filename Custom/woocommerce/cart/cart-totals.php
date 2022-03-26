<?php

/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.3.6
 */

defined('ABSPATH') || exit;

?>
<div class="cart-calculate-area mt-sm-30 mt-md-30 cart_totals <?php echo (WC()->customer->has_calculated_shipping()) ? 'calculated_shipping' : ''; ?>">


	<h5 class="cal-title">Сумма заказов</h5>

	<div class="cart-cal-table table-responsive">
		<table cellspacing="0" class="table table-borderless shop_table shop_table_responsive">

			<tr class="cart-sub-total cart-subtotal">
				<th><?php esc_html_e('Subtotal', 'woocommerce'); ?></th>
				<td data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>"><?php wc_cart_totals_subtotal_html(); ?></td>
			</tr>

			<?php foreach (WC()->cart->get_coupons() as $code => $coupon) : ?>
				<tr class="cart-discount coupon-<?php echo esc_attr(sanitize_title($code)); ?>">
					<th><?php wc_cart_totals_coupon_label($coupon); ?></th>
					<td data-title="<?php echo esc_attr(wc_cart_totals_coupon_label($coupon, false)); ?>"><?php wc_cart_totals_coupon_html($coupon); ?></td>
				</tr>
			<?php endforeach; ?>

			<?php if (WC()->cart->needs_shipping() && WC()->cart->show_shipping()) : ?>

				<?php wc_cart_totals_shipping_html(); ?>

			<?php endif; ?>

			<?php foreach (WC()->cart->get_fees() as $fee) : ?>
				<tr class="fee">
					<th><?php echo esc_html($fee->name); ?></th>
					<td data-title="<?php echo esc_attr($fee->name); ?>"><?php wc_cart_totals_fee_html($fee); ?></td>
				</tr>
			<?php endforeach; ?>

			<?php
			if (wc_tax_enabled() && !WC()->cart->display_prices_including_tax()) {
				$taxable_address = WC()->customer->get_taxable_address();
				$estimated_text  = '';

				if (WC()->customer->is_customer_outside_base() && !WC()->customer->has_calculated_shipping()) {
					/* translators: %s location. */
					$estimated_text = sprintf(' <small>' . esc_html__('(estimated for %s)', 'woocommerce') . '</small>', WC()->countries->estimated_for_prefix($taxable_address[0]) . WC()->countries->countries[$taxable_address[0]]);
				}

				if ('itemized' === get_option('woocommerce_tax_total_display')) {
					foreach (WC()->cart->get_tax_totals() as $code => $tax) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.OverrideProhibited
			?>
						<tr class="tax-rate tax-rate-<?php echo esc_attr(sanitize_title($code)); ?>">
							<th><?php echo esc_html($tax->label) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
									?></th>
							<td data-title="<?php echo esc_attr($tax->label); ?>"><?php echo wp_kses_post($tax->formatted_amount); ?></td>
						</tr>
					<?php
					}
				} else {
					?>
					<tr class="tax-total">
						<th><?php echo esc_html(WC()->countries->tax_or_vat()) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
								?></th>
						<td data-title="<?php echo esc_attr(WC()->countries->tax_or_vat()); ?>"><?php wc_cart_totals_taxes_total_html(); ?></td>
					</tr>
			<?php
				}
			}
			?>



			<tr class="order-total">
				<th>Итого</th>
				<td data-title="<?php esc_attr_e('Total', 'woocommerce'); ?>"><?php wc_cart_totals_order_total_html(); ?></td>
			</tr>



		</table>
	</div>
	<!-- <div id="forpvz" style="height:600px;"></div> -->
	<!-- <script type="text/javascript">
		var widjet = new ISDEKWidjet({
			defaultCity: 'Уфа',
			cityFrom: 'Омск',
			link: 'forpvz',
			path: 'https://widget.cdek.ru/widget/scripts/',
			servicepath: 'http://s-adapter.ru.net/service.php' //ссылка на файл service.php на вашем сайте
		});
	</script> -->
	<!-- <script type="text/javascript">
		var widjet = new ISDEKWidjet({
			showWarns: true,
			showErrors: true,
			showLogs: true,
			hideMessages: false,
			path: 'http://widget.cdek.ru/widget/scripts/',
			servicepath: 'http://s-adapter.ru/service.php', //ссылка на файл service.php на вашем сайте
			templatepath: 'https://widget.cdek.ru/widget/scripts/template.php',
			choose: true,
			popup: true,
			country: 'Россия',
			defaultCity: 'Уфа',
			cityFrom: 'Омск',
			link: null,
			hidedress: true,
			hidecash: true,
			hidedelt: false,
			detailAddress: true,
			region: true,
			apikey: 'API-key Yandex.MAP’,
			goods: [{
				length: 10,
				width: 10,
				height: 10,
				weight: 1
			}],
			onReady: onReady,
			onChoose: onChoose,
			onChooseProfile: onChooseProfile,
			onChooseAddress: onChooseAddress,
			onCalculate: onCalculate
		});

		function onReady() {
			alert('Виджет загружен');
		}

		function onChoose(wat) {
			alert(
				'Выбран пункт выдачи заказа ' + wat.id + "\n" +
				'цена ' + wat.price + "\n" +
				'срок ' + wat.term + " дн.\n" +
				'город ' + wat.cityName + ', код города ' + wat.city
			);
		}

		function onChooseProfile(wat) {
			alert(
				'Выбрана доставка курьером в город ' + wat.cityName + ', код города ' + wat.city + "\n" +
				'цена ' + wat.price + "\n" +
				'срок ' + wat.term + ' дн.'
			);
		}

		function onChooseAddress(wat) {
			alert(
				'Выбрана доставка курьером по адресу ‘ + wat.address + ”, \n “ + 
				'цена ' + wat.price + "\n" +
				'срок ' + wat.term + ' дн.'
			);
		}

		function onCalculate(wat) {
			alert('Расчет стоимости доставки произведен');
		}
	</script> -->
	<div class="wc-proceed-to-checkout">
		<?php do_action('woocommerce_proceed_to_checkout'); ?>
	</div>

	<?php do_action('woocommerce_after_cart_totals'); ?>

</div>