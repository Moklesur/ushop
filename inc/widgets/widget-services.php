<?php
/**
 * Displays Services
 *
 */

class uShop_Widget_Services extends WP_Widget {

    public function __construct() {
        $widget_ops = array(
            'classname' => 'ushop-widget-services',
            'description' => __( 'Displays Services', 'ushop' ),
            'customize_selective_refresh' => true,
        );
        parent::__construct( 'ushop-widget-services', __( 'uShop : Services', 'ushop' ), $widget_ops );
        $this->alt_option_name = 'ushop_widget_services';
    }
    public function widget( $args, $instance )
    {
        if ( !isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }

        $icon = ( !empty($instance['icon']) ) ? $instance['icon'] : '';
        $title = ( !empty($instance['title']) ) ? $instance['title'] : '';
        $content = ( !empty($instance['content']) ) ? $instance['content'] : '';

        echo $args['before_widget']; ?>
        <div class="widget-services text-center">
        <?php if( $icon != '' ) { ?>
            <div class="mb-3">
                <i class="<?php echo esc_html( $icon ); ?> f-2x"></i>
            </div>
        <?php } ?>
            <div class="services-contents">
                <?php if( $title != '' ) { ?>
                    <div class="widgets-heading">
                        <h5><?php echo esc_html( $title ); ?></h5>
                    </div>
                <?php }
                if( $content != '' ) { ?>
                    <p class="services-text mb-0"><?php echo esc_html( $content ); ?></p>
                <?php }  ?>
            </div>
        </div>
        <?php echo $args['after_widget'];
    }
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        $instance['icon'] = sanitize_text_field( $new_instance['icon'] );
        $instance['content'] = sanitize_text_field( $new_instance['content'] );
        return $instance;
    }
    public function form( $instance ) {
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $content     = isset( $instance['content'] ) ? esc_attr( $instance['content'] ) : '';
        $icon     = isset( $instance['icon'] ) ? esc_attr( $instance['icon'] ) : '';
        ?>
        <div class="ushop-wrap">
            <div class="full-width">
                <div class="col-3">
                    <h2>
                        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'ushop' ); ?></label>
                        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
                    </h2>
                </div>
                <div class="col-3">
                    <h2>
                        <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content', 'ushop' ); ?></label>
                        <input class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" type="text" value="<?php echo $content; ?>" />

                    </h2>
                </div>
                <div class="col-3">
                    <h2>
                        <label for="<?php echo $this->get_field_id( 'icon' ); ?>"><?php _e( 'Icon', 'ushop' ); ?></label>
                        <input class="widefat" id="<?php echo $this->get_field_id( 'icon' ); ?>" name="<?php echo $this->get_field_name( 'icon' ); ?>" type="text" value="<?php echo $icon; ?>" />
                        <a href="http://ionicons.com/" target="_blank"><small>Choose your icon form here http://ionicons.com/</small></a></h2>

                </div>
            </div>
        </div>
        <?php
    }
}