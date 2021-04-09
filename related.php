<?php //yourtheme/woocommerce/single-product/related.php.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>

		<?php woocommerce_product_loop_start(); ?>
		<div class="swiper-container">
			<div class="swiper-wrapper">
			<?php foreach ( $related_products as $related_product ) : ?>
				<div class="swiper-slide">
					<?php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

					wc_get_template_part( 'content', 'product' );
					?>
				</div>
			<?php endforeach; ?>
			</div>
		<div class="swiper-scrollbar"></div>
		</div>
		<?php woocommerce_product_loop_end(); ?>
	</section>
	<?php
endif;

wp_reset_postdata();
