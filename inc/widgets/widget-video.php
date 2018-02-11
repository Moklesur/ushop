<?php
/**
 * Displays YouTube Video
 *
 */

class uShop_Widget_YouTube extends WP_Widget {

    public function __construct() {
        $widget_ops = array(
            'classname' => 'ushop-widget-youtube',
            'description' => __( 'Displays YouTube Video', 'ushop' ),
            'customize_selective_refresh' => true,
        );
        parent::__construct( 'ushop-widget-youtube', __( 'uShop : YouTube Video', 'ushop' ), $widget_ops );
        $this->alt_option_name = 'ushop_widget_youtube';
    }
    public function widget( $args, $instance )
    {
        if ( !isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }

        $url = ( !empty($instance['url']) ) ? $instance['url'] : '';
        $title = ( !empty($instance['title']) ) ? $instance['title'] : '';
        $content = ( !empty($instance['content']) ) ? $instance['content'] : '';

        echo $args['before_widget']; ?>
        <div class="widget-youtube text-center">
            <div class="youtube-contents">
                <?php if( $title != '' ) { ?>
                    <div class="widgets-heading mb-3">
                        <h3><?php echo esc_html( $title ); ?></h3>
                    </div>
                <?php }
                if( $content != '' ) { ?>
                    <p class="youtube-text mb-5"><?php echo esc_html( $content ); ?></p>
                <?php }  ?>
                <?php if( $url != '' ) { ?>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo esc_html( $url );?>?rel=0" allowfullscreen></iframe>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php echo $args['after_widget'];
    }
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        $instance['url'] = sanitize_text_field( $new_instance['url'] );
        $instance['content'] = sanitize_text_field( $new_instance['content'] );
        return $instance;
    }
    public function form( $instance ) {
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $content     = isset( $instance['content'] ) ? esc_attr( $instance['content'] ) : '';
        $url     = isset( $instance['url'] ) ? sanitize_text_field( $instance['url'] ) : '';
        ?>
        <div class="ushop-wrap">
            <div class="full-width">
                <div class="col-12">
                    <h2>
                        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'ushop' ); ?></label>
                        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
                    </h2>
                    <h2>
                        <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content', 'ushop' ); ?></label>
                        <textarea  class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" ><?php echo $content; ?></textarea>
                    </h2>
                    <h2>
                        <label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e( 'URL', 'ushop' ); ?></label>
                        <input class="widefat" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" type="text" value="<?php echo $url; ?>" placeholder="<?php echo esc_attr( 'ke11sYLKUqY' );?>" />
                        <small><?php _e( 'Past YouTube URL like ' ); ?><strong><?php _e( 'ke11sYLKUqY ' ); ?></strong><a href="<?php _e('https://www.screencast.com/t/N4jC4kgFi'); ?>" <small><?php _e( ' Get more information click here' ); ?></small>
                    </h2>
                </div>
            </div>
        </div>
        <?php
    }
}