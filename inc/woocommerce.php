<?php
/**
 * Add and remove actions
 */
function leto_woocommerce_actions() {
    //Remove all WC styling
    add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
}
add_action( 'wp', 'leto_woocommerce_actions' );


// add product category name to post class
function category_id_class( $classes ) {
    global $post;
    $product_cats = get_the_terms( $post->ID, 'product_cat' );
    if( $product_cats ) foreach ( $product_cats as $category ) {
        $classes[] = 'ggggggggggggggg';
    }
    return $classes;
}
add_filter( 'post_class', 'category_id_class' );


/**
 * Opening div for our content wrapper
 */
add_action('woocommerce_before_main_content', 'ushop_open_div', 5);

function ushop_open_div() {
    echo '<div class="col-xl-9 col-lg-9 col-md-12 col-xs-12 mt-50 archive-woo">';
}

/**
 * Closing div for our content wrapper
 */
add_action('woocommerce_after_main_content', 'ushop_close_div', 50);

function ushop_close_div() {
    echo '</div>';
}

/**
 * Update contents count via AJAX
 */
add_filter('woocommerce_add_to_cart_fragments', 'ushop_header_add_to_cart_fragment');
function ushop_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <a class="cart-contents" href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>"><i class="ion-bag"></i><span><?php echo sprintf(_n(' %d', ' %d', $woocommerce->cart->cart_contents_count, 'ushop'), $woocommerce->cart->cart_contents_count ); ?></span></a>
    <?php
    $fragments['a.cart-contents'] = ob_get_clean();
    return $fragments;
}