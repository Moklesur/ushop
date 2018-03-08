<?php
/**
 * Colors
 */
// Primary Color
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'color',
    'settings'    => 'primary_color',
    'label'       => __( 'Primary Color', 'ushop' ),
    'section'     => 'colors',
    'default'     => '#1fc0a0',
    'priority'       => 5,
    'output'      => array(
        array(
            'element' => '#back-to-top,.button,.widget-trending-products .view-all,.category-filter-wrap .current,.hero-content a,.account-login-dropdown a:hover, .account-login-dropdown a:last-child,.mini-cart-fix .buttons a:hover, .mini-cart-fix .buttons .checkout,button, input[type="button"], input[type="reset"], input[type="submit"], .woocommerce div.product form.cart .button, #add_payment_method .wc-proceed-to-checkout a.checkout-button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button, .woocommerce .cart .button, .woocommerce .cart input.button, .cat-meta-btn,.woocommerce-message .button',
            'property' => 'background-color',
        ),
        array(
            'element' => '#back-to-top,.button,.widget-trending-products .view-all,.category-filter-wrap .current,.hero-content a,.account-login-dropdown a:hover, .account-login-dropdown a:last-child,.mini-cart-fix .buttons a:hover, .mini-cart-fix .buttons .checkout,button, input[type="button"], input[type="reset"], input[type="submit"], .woocommerce div.product form.cart .button, #add_payment_method .wc-proceed-to-checkout a.checkout-button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button, .woocommerce .cart .button, .woocommerce .cart input.button, .cat-meta-btn,.woocommerce-message .button',
            'property' => 'border-color',
        ),
    ),
) );
// Link Color
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'color',
    'settings'    => 'link_color',
    'label'       => __( 'Link Color', 'ushop' ),
    'section'     => 'colors',
    'default'     => '#1fc0a0',
    'priority'       => 20,
    'output'      => array(
        array(
            'element' => 'a',
            'property' => 'color',
        ),
    ),
) );
// Link Hover Color
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'color',
    'settings'    => 'link_hover_color',
    'label'       => __( 'Link Hove Color', 'ushop' ),
    'section'     => 'colors',
    'default'     => '#989898',
    'priority'       => 25,
    'output'      => array(
        array(
            'element' => 'a:hover',
            'property' => 'color',
        ),
    ),
) );