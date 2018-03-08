<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ushop
 */

?>
	<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
	<a href="#" id="back-to-top" title="<?php esc_attr_e( 'Back to top', 'ushop' ); ?>">&uarr;</a>
<div class="layout">

	<header id="masthead" class="header">
		<?php
		do_action( 'ushop_header' );
		do_action( 'ushop_hero_banner' );

		if ( get_header_image() ) :
			?>
			<img src="<?php header_image(); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" class="img-fluid">
		<?php endif; ?>
	</header><!-- #masthead -->

<?php
	$breadcrumb_hide = get_theme_mod( 'breadcrumb_hide', 1 );
	if ( $breadcrumb_hide ) {
		ushop_breadcrumbs();
	}
?>