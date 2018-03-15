<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ushop
 */

if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_category() || is_product() ) ) {

	$archive_layout = ushop_archive_layout();
	$product_layout = ushop_product_layout();

	if ( ( is_shop() || is_product_category() ) && ( $archive_layout == 'archive-default' ) || ( $archive_layout == 'archive-left-sidebar' ) ) {
		?><aside id="secondary" class="widget-area col-lg-3 col-md-12 col-12 margin-top"><?php
		dynamic_sidebar( 'woocommerce-sidebar' );
		?></aside><!-- #secondary --><?php
	}elseif ( is_product() && ( $product_layout == 'default' ) || ( $product_layout == 'left-sidebar' )) {
		?><aside id="secondary" class="widget-area col-lg-3 col-md-12 col-12 margin-top"><?php
		dynamic_sidebar( 'woocommerce-sidebar' );
		?></aside><!-- #secondary --><?php
	}

}else {
	?><aside id="secondary" class="widget-area col-lg-3 col-md-3 col-12 margin-top"><?php
	dynamic_sidebar( 'sidebar-1' );
	?></aside><!-- #secondary --><?php
}