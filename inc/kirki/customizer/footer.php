<?php
/**
 * Footer
 */
Ushop_Kirki::add_panel('footer_panel', array(
    'title' => esc_attr__('Footer', 'ushop'),
    'description' => esc_attr__('Footer General Settings', 'ushop'),
    'priority' => 80,
));
// Footer Layout
Ushop_Kirki::add_section( 'footer_layout_section', array(
    'title'          => esc_attr__( 'Footer Layout', 'ushop' ),
    'panel'          => 'footer_panel',
    'priority'       => 10,
) );
// Footer Columns
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'select',
    'settings'    => 'footer_columns',
    'label'       => __( 'Number of columns', 'ushop' ),
    'section'     => 'footer_layout_section',
    'default'     => 'one',
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => array(
        'one' => esc_attr__( 'One', 'ushop' ),
        'two' => esc_attr__( 'Two', 'ushop' ),
        'three' => esc_attr__( 'Three', 'ushop' ),
        'four' => esc_attr__( 'Four', 'ushop' ),
    ),
) );
// Footer Design
Ushop_Kirki::add_section( 'footer_design', array(
    'title'          => esc_attr__( 'Footer Design', 'ushop' ),
    'panel'          => 'footer_panel',
    'priority'       => 15,
) );
// Footer Background Color
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'color',
    'settings'    => 'footer_bg',
    'label'       => __( 'Footer Background Color', 'ushop' ),
    'section'     => 'footer_design',
    'default'     => '#fff',
) );
// Footer Title Color
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'color',
    'settings'    => 'footer_title_color',
    'label'       => __( 'Footer Title Color', 'ushop' ),
    'section'     => 'footer_design',
    'default'     => '#000',
    'output'      => array(
        array(
            'element' => '.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6',
        ),
    ),
) );
// Footer Text Color
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'color',
    'settings'    => 'footer_text_color',
    'label'       => __( 'Footer Text Color', 'ushop' ),
    'section'     => 'footer_design',
    'default'     => '#000',
) );
// Footer Title Font Size
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'slider',
    'settings'    => 'footer_title_font_size',
    'label'       => esc_attr__( 'Title Font size', 'ushop' ),
    'section'     => 'footer_design',
    'default'     => 24,
    'choices'     => array(
        'min'  => '14',
        'max'  => '60',
        'step' => '1',
    ),
    'element' => 'site-footer.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6'
) );
// Footer Text Font Size
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'slider',
    'settings'    => 'footer_text_font_size',
    'label'       => esc_attr__( 'Text Font size', 'ushop' ),
    'section'     => 'footer_design',
    'default'     => 14,
    'choices'     => array(
        'min'  => '8',
        'max'  => '50',
        'step' => '1',
    ),
    'element' => 'a, p, footer, li, strong,.site-footer'
) );
// Footer Copyright
Ushop_Kirki::add_section( 'footer_copyright_section', array(
    'title'          => esc_attr__( 'Footer Copy Right', 'ushop' ),
    'panel'          => 'footer_panel',
    'priority'       => 20,
) );
Ushop_Kirki::add_field( 'ushop', array(
    'type'        => 'text',
    'settings'    => 'footer_copyright',
    'label'       => esc_html__( 'Copy Right Text', 'ushop' ),
    'section'     => 'footer_copyright_section',
    'default'     => 'Ushop Proudly powered by themetim',
    'priority'    => 10,
) );