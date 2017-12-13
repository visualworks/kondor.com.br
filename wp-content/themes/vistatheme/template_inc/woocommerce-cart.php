<?php global $woocommerce; ?>

<div class="cart">

		<?php if(!$woocommerce->cart->cart_contents_count): ?>

		<a class="cart_icon" href="<?php echo get_permalink(get_option('woocommerce_cart_page_id')); ?>"><i class="moon-cart"></i></a>

		<?php else: ?>

		<a class="cart_icon cart_icon_active" href="<?php echo get_permalink(get_option('woocommerce_cart_page_id')); ?>"><i class="moon-cart"></i></a>

		<div class="content">

			<div class="items">

			<?php foreach($woocommerce->cart->cart_contents as $key => $cart_item): ?>

			

				<div class="cart_item">

					<a href="<?php echo get_permalink($cart_item['product_id']); ?>">

					<?php echo get_the_post_thumbnail($cart_item['product_id'], array(50, 60)); ?>

					<div class="description">

						<span class="title"><?php echo $cart_item['data']->post->post_title; ?></span>

						 <span class="price"> <span class="price_title"><?php _e('QUANTITY', 'themeple'); ?> : <?php echo $cart_item['quantity']; ?> </span> <?php echo $woocommerce->cart->get_product_subtotal($cart_item['data'], $cart_item['quantity']); ?></span>

					</div>

					</a>

					<a class="remove" href="<?php echo $woocommerce->cart->get_remove_url($key) ?>"></a>

				</div>

			<?php endforeach; ?>

			</div>
			    <div class="subtotal">
				    <span class="title"><?php _e('CART SUBTOTAL', 'themeple'); ?></span>
		            <?php $cart_subtotal = $woocommerce->cart->get_cart_subtotal(); 
		            echo $cart_subtotal;
		            ?>
                </div>

			<div class="checkout">

				<div class="view_cart"><a class="btn-non-bg" href="<?php echo get_permalink(get_option('woocommerce_cart_page_id')); ?>"><?php _e('VIEW SHOPPING BAG', 'themeple'); ?></a></div>

				<div class="checkout_link"><a class="btn-system" href="<?php echo get_permalink(get_option('woocommerce_checkout_page_id')); ?>"><?php _e('PROCEED TO CHECKOUT', 'themeple'); ?></a></div>

			</div>

		</div>

		<?php endif; ?>

</div>