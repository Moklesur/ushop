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

	<header id="masthead" class="site-header">
		<section class="header-1">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-3 col-12">
						<div class="site-branding">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;

							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
								<?php
							endif; ?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-lg-7 col-md-6 col-12 d-flex justify-content-center main-menu">
						<nav class="navbar navbar-expand-lg pl-0 pr-0">
							<div class="mobile-bar text-right">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'ushop' ); ?>">
									<i class="ion-navicon"></i>
								</button>
							</div>
							<?php
							wp_nav_menu( array(
									'theme_location'    => 'menu-1',
									'container'			=> 'div',
									'container_class'	=> 'collapse navbar-collapse',
									'container_id'		=> 'bs-example-navbar-collapse-1',
									'menu_class'		=> 'navbar-nav',
									'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
									'walker'			=> new WP_Bootstrap_Navwalker()
								)
							);
							?>
						</nav>
					</div>
					<div class="col-lg-2 col-md-3 col-12 mini-cart-search text-right">
						<div class="search-modal d-inline">
							<a class="" href="#" role="button" data-toggle="modal" data-target="#search-modal"><i class="ion-ios-search"></i></a>

							<!-- Modal -->
							<div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="search-modalTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-body">
											<h3 class="search-title-modal"><?php esc_html_e( 'Search for Anything here','ushop' ); ?></h3>
											<?php get_search_form(); ?>
										</div>
									</div>
								</div>
							</div>


						</div>
						<?php
						if ( class_exists( 'WooCommerce' ) ) : ?>
							<div class="account-login d-inline">
								<div class="dropdown d-inline">
									<a class="" href="#" role="button" id="header-search-id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ion-ios-person"></i></a>
									<div class="dropdown-menu account-login-dropdown">
										<?php if ( is_user_logged_in() ) { ?>
											<a class="d-block" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i class="ion-ios-person-outline"></i> <?php esc_html_e('My Account','ushop'); ?></a>
											<a class="d-block" href="<?php echo wp_logout_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) )?>"><i class="ion-log-out"></i> <?php esc_html_e('Log Out','ushop'); ?></a>
										<?php }
										else { ?>
											<a class="d-block" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i class="ion-log-in"></i> <?php esc_html_e('Login / Register','ushop'); ?></a>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="mini-cart d-inline">
								<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" >
									<i class="ion-bag"></i>
									<span>
										<?php echo sprintf ( _n( ' %d', ' %d', WC()->cart->get_cart_contents_count(), 'ushop' ), WC()->cart->get_cart_contents_count() ); ?>
									</span>
								</a>
								<div class="mini-cart-fix">
									<?php woocommerce_mini_cart(); ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<section class="hero-area position-relative">
			<div class="container-fluid">
				<div class="hero-content">
					<p class="mb-0">Winter Collection 2018</p>
					<h3 class="mb-0">EXCLUSIVE OFFER -40% OFF</h3>
					<h2>NEW ARRIVALS</h2>
					<a href="#" class="text-uppercase">SHOP NOW</a>
				</div>
			</div>
			<img src="<?php header_image(); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" class="img-fluid">
		</section>
	</header><!-- #masthead -->