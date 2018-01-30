<?php

/**
 * ushop Typography & Color Settings
 *
 */

function ushop_typography_color($color) {
    /**
     * Typography & Color Inline
     */
    wp_add_inline_style( 'ushop-style', $color );
}
add_action( 'wp_enqueue_scripts', 'ushop_typography_color' );