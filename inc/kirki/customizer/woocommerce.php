<?php
/**
 * WooCommerce Settings
 */
Ushop_Kirki::add_panel('woocommerce_panel', array(
    'priority' => 50,
    'title' => esc_attr__('ushop : WooCommerce Settings', 'ushop'),
));
// Product Archive
Ushop_Kirki::add_section( 'product_archive_section', array(
    'title'          => esc_attr__( 'Product Archive', 'ushop' ),
    'panel'          => 'woocommerce_panel',
    'priority'       => 10,
) );
// Archive Layout
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'select',
    'settings'    => 'archive_layout',
    'label'       => __( 'Archive Layout', 'ushop' ),
    'section'     => 'product_archive_section',
    'default'     => 'default',
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => array(
        'default' => esc_attr__( 'Default', 'ushop' ),
        'right-sidebar' => esc_attr__( 'Right Sidebar', 'ushop' ),
        'full-width' => esc_attr__( 'Full Width', 'ushop' ),
    ),
) );
// Number of columns
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'select',
    'settings'    => 'archive_product_columns',
    'label'       => __( 'Number of columns', 'ushop' ),
    'section'     => 'product_archive_section',
    'default'     => 'one',
    'priority'    => 15,
    'multiple'    => 1,
    'choices'     => array(
        'one' => esc_attr__( 'One', 'ushop' ),
        'two' => esc_attr__( 'Two', 'ushop' ),
        'three' => esc_attr__( 'Three', 'ushop' ),
        'four' => esc_attr__( 'Four', 'ushop' ),
    ),
) );
// Product Limit A page
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'number',
    'settings'    => 'archive_product_number',
    'label'       => esc_attr__( 'Number of products on Shop/Archive', 'ushop' ),
    'section'     => 'product_archive_section',
    'priority'    => 20,
    'default'     => 9,
    'choices'     => array(
        'min'  => 1,
        'max'  => 100,
        'step' => 1,
    ),
) );
// Hide Product Price
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'checkbox',
    'settings'    => 'archive_hide_price',
    'priority'    => 25,
    'label'       => esc_attr__( 'Hide Product Price', 'ushop' ),
    'section'     => 'product_archive_section',
    'default'     => false,
) );
// Hide product ratings
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'checkbox',
    'settings'    => 'archive_hide_ratings',
    'priority'    => 30,
    'label'       => esc_attr__( 'Hide Product Ratings', 'ushop' ),
    'section'     => 'product_archive_section',
    'default'     => false,
) );
// Hide product sorting
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'checkbox',
    'settings'    => 'archive_hide_sorting',
    'priority'    => 35,
    'label'       => esc_attr__( 'Hide Product Sorting', 'ushop' ),
    'section'     => 'product_archive_section',
    'default'     => false,
) );
// Hide product number of results
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'checkbox',
    'settings'    => 'archive_hide_number_of_result',
    'priority'    => 40,
    'label'       => esc_attr__( 'Hide Product Number of result', 'ushop' ),
    'section'     => 'product_archive_section',
    'default'     => false,
) );
// Single Product
Ushop_Kirki::add_section( 'single_product_section', array(
    'title'          => esc_attr__( 'Single Product', 'ushop' ),
    'panel'          => 'woocommerce_panel',
    'priority'       => 20,
) );
// Single Product Layout
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'select',
    'settings'    => 'single_product_layout',
    'label'       => __( 'Single Product Layout', 'ushop' ),
    'section'     => 'single_product_section',
    'default'     => 'default',
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => array(
        'default' => esc_attr__( 'Default', 'ushop' ),
        'right-sidebar' => esc_attr__( 'Right Sidebar', 'ushop' ),
        'full-width' => esc_attr__( 'Full Width', 'ushop' ),
    ),
) );
// Gallery Style
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'select',
    'settings'    => 'single_product_gallery_layout',
    'label'       => __( 'Gallery Style', 'ushop' ),
    'section'     => 'single_product_section',
    'default'     => 'default',
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => array(
        'default' => esc_attr__( 'Default', 'ushop' ),
        'right' => esc_attr__( 'Thumb Right', 'ushop' ),
        'left' => esc_attr__( 'Thumb Left', 'ushop' ),
    ),
) );
// Hide Social share
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'checkbox',
    'settings'    => 'single_product_hide_rating',
    'priority'    => 20,
    'label'       => esc_attr__( 'Hide Rating', 'ushop' ),
    'section'     => 'single_product_section',
    'default'     => false,
) );
// Hide Customer Link
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'checkbox',
    'settings'    => 'single_product_hide_customer_link',
    'priority'    => 30,
    'label'       => esc_attr__( 'Hide Customer Link', 'ushop' ),
    'section'     => 'single_product_section',
    'default'     => false,
) );
// Hide Up sells
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'checkbox',
    'settings'    => 'single_product_hide_upsells',
    'priority'    => 40,
    'label'       => esc_attr__( 'Hide Up Sells Product', 'ushop' ),
    'section'     => 'single_product_section',
    'default'     => false,
) );
// Hide Related
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'checkbox',
    'settings'    => 'single_product_hide_related',
    'priority'    => 50,
    'label'       => esc_attr__( 'Hide Related Product', 'ushop' ),
    'section'     => 'single_product_section',
    'default'     => false,
) );
// Hide Social share
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'checkbox',
    'settings'    => 'single_product_hide_social_share',
    'priority'    => 60,
    'label'       => esc_attr__( 'Hide Social Share', 'ushop' ),
    'section'     => 'single_product_section',
    'default'     => false,
) );