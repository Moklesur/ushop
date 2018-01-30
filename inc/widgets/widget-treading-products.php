<?php
/**
 * Displays Trending Products
 *
 */

class uShop_Widget_Trending_Products extends WP_Widget {

    public function __construct() {
        $widget_ops = array(
            'classname' => 'ushop-widget-trending-products',
            'description' => __( 'Displays Trending Products', 'ushop' ),
            'customize_selective_refresh' => true,
        );
        parent::__construct( 'ushop-widget-trending-products', __( 'uShop : Trending Products', 'ushop' ), $widget_ops );
        $this->alt_option_name = 'ushop_widget_trending_products';
    }
    public function widget( $args, $instance )
    {
        if ( !isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }
        $title = ( !empty($instance['title']) ) ? $instance['title'] : '';
        $limit = ( ! empty( $instance['limit'] ) ) ? absint( $instance['limit'] ) : 3;
        $columns = ( ! empty( $instance['columns'] ) ) ? absint( $instance['columns'] ) : 3;
        $slider = ! empty( $instance[ 'slider' ] ) ? 1 : 0;
        if ( ! $limit ){
            $limit = 3;
        }
        if ( ! $columns ){
            $columns = 3;
        }

        echo $args['before_widget']; ?>
        <div class="widget-trending-products text-center">
            <?php if( $title != '' ) { ?>
                <div class="widgets-heading mb-5">
                    <?php echo $args['before_title'] . esc_html( $title ) . $args['after_title']; ?>
                </div>
            <?php } ?>
            <div class="trending-products-contents">
                <?php echo do_shortcode( '[products limit="' . $limit . '" class="dddddddddd" columns="' . $columns . '" best_selling="true" ]' );  ?>
            </div>
        </div>
        <?php echo $args['after_widget'];
    }
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        $instance['limit'] = absint( $new_instance['limit'] );
        $instance['columns'] = absint( $new_instance['columns'] );
        $instance[ 'slider' ] = absint( $new_instance[ 'slider' ] );
        return $instance;
    }
    public function form( $instance ) {
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $limit     = isset( $instance['limit'] ) ? absint( $instance['limit'] ) : 3;
        $columns     = isset( $instance['columns'] ) ? absint( $instance['columns'] ) : 3;
        $slider = !empty( $instance['slider'] ) ? $instance['slider'] : '' ;
        ?>
        <div class="ushop-wrap">
            <div class="full-width">
                <div class="col-12">
                    <h2>
                        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'ushop' ); ?></label>
                        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
                    </h2>
                </div>
                <div class="col-3">
                    <h5>
                        <label for="<?php echo $this->get_field_id( 'limit' ); ?>"><?php _e( 'Number of products to show.', 'ushop' ); ?></label>
                        <input class="tiny-text" id="<?php echo $this->get_field_id( 'limit' ); ?>" name="<?php echo $this->get_field_name( 'limit' ); ?>" type="number" step="1" min="1" value="<?php echo $limit; ?>" size="3" />
                    </h5>
                </div>
                <div class="col-3">
                    <h5>
                        <label for="<?php echo $this->get_field_id( 'columns' ); ?>"><?php _e( 'Number of products to show columns in a row.', 'ushop' ); ?></label>
                        <input class="tiny-text" id="<?php echo $this->get_field_id( 'columns' ); ?>" name="<?php echo $this->get_field_name( 'columns' ); ?>" type="number" step="1" min="1" value="<?php echo $columns; ?>" size="3" />
                    </h5>
                </div>
                <div class="col-3">
                    <h5>
                        <label>
                            <input class="checkbox" type="checkbox" name="<?php echo $this->get_field_name( 'slider' ); ?>" id="<?php echo $this->get_field_id( 'slider' ); ?>" value="1" <?php checked( $slider, '1' ); ?>>
                            <span><?php _e( 'Enable Slider ( Pro )', 'ushop' ); ?></span>
                        </label>
                    </h5>
                </div>
            </div>
        </div>
        <?php
    }
}