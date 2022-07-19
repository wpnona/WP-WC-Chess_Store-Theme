<?php

/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

global $product;
$product_subtitle = get_post_meta( $product->id, '_chess_store_product_subtitle' )[ 0 ];

?>

<!-- Product Title -->
<div class="product-right-heading">
	<?php the_title('<h1 class="product-title entry-title">', '</h1>'); ?>
</div>

<!-- Product Subtitle -->
<?php if ( $product_subtitle ) : ?>
	<div class="product-sub-heading">
		<h2 class="p-sub-heading">
			<?php echo $product_subtitle; ?>
		</h2>
	</div>
<?php endif; ?>