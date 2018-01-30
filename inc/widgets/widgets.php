<?php

/**
 * Theme Widgets.
 */
$theme_widgets = array(
    'widget-services'
);

$template_dir = get_template_directory();

foreach ( $theme_widgets as $widget ) {
    require_once $template_dir . '/inc/widgets/' . $widget . '.php';
}