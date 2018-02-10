<?php

/**
 * Theme Widgets.
 */
$theme_widgets = array(
    'widget-services',
    'widget-treading-products',
    'widget-category-filter',
    'widget-category-list',
);

$template_dir = get_template_directory();

foreach ( $theme_widgets as $widget ) {
    require_once $template_dir . '/inc/widgets/' . $widget . '.php';
}