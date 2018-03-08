<?php
/**
 * Breadcrumb
 */
// Site Layout Section
Ushop_Kirki::add_section( 'breadcrumb_section', array(
    'title'          => esc_attr__( 'Breadcrumb', 'ushop' ),
    'priority'       => 40,
) );
// Hide Breadcrumb
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'toggle',
    'settings'    => 'breadcrumb_hide',
    'label'       => esc_attr__( 'Hide Breadcrumb', 'ushop' ),
    'section'     => 'breadcrumb_section',
    'default'     => '1',
    'priority'    => 10,
) );
// Breadcrumb Design
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'typography',
    'settings'    => 'breadcrumb_design',
    'label'       => esc_attr__( 'Breadcrumb Design', 'ushop' ),
    'section'     => 'breadcrumb_section',
    'transport'	  => 'auto',
    'default'     => array(
        'color'          => '#000',
        'text-transform' => 'capitalize',
        'text-align'     => 'center'
    ),
    'priority'    => 20,
    'output'      => array(
        array(
            'element' => '.page-breadcrumb,.page-breadcrumb h1',
        ),
    ),
) );
// Background
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'color',
    'settings'    => 'breadcrumb_bg',
    'label'       => __( 'Background Color', 'ushop' ),
    'section'     => 'breadcrumb_section',
    'default'     => '#e9ecef',
    'priority'    => 30,
    'transport'	  => 'auto',
    'element' => '.page-breadcrumb'
) );
// Font Size
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'slider',
    'settings'    => 'breadcrumb_font_size',
    'label'       => esc_attr__( 'Heading Font size', 'ushop' ),
    'section'     => 'breadcrumb_section',
    'priority'    => 40,
    'default'     => 36,
    'transport'	  => 'auto',
    'choices'     => array(
        'min'  => '16',
        'max'  => '100',
        'step' => '1',
    ),
    'output'      => array(
        array(
            'element' => '.page-breadcrumb h1',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );
// Padding Top
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'slider',
    'settings'    => 'breadcrumb_padding_top',
    'label'       => esc_attr__( 'Padding Top', 'ushop' ),
    'section'     => 'breadcrumb_section',
    'priority'    => 50,
    'default'     => 50,
    'transport'	  => 'auto',
    'choices'   => array(
        'min'  => 0,
        'max'  => 200,
        'step' => 1,
    ),
    'output'      => array(
        array(
            'element'  => '.page-breadcrumb',
            'property' => 'padding-top',
            'units'    => 'px',
        ),
    )
) );
// Padding Bottom
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'slider',
    'settings'    => 'breadcrumb_padding_bottom',
    'label'       => esc_attr__( 'Padding Bottom', 'ushop' ),
    'section'     => 'breadcrumb_section',
    'priority'    => 60,
    'default'     => 50,
    'transport'	  => 'auto',
    'choices'   => array(
        'min'  => 0,
        'max'  => 200,
        'step' => 1,
    ),
    'output'      => array(
        array(
            'element'  => '.page-breadcrumb',
            'property' => 'padding-bottom',
            'units'    => 'px',
        ),
    )
) );