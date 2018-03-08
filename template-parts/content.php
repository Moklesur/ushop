<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ushop
 *
 */
if( ! is_single() ){
	$blog_layout = get_theme_mod( 'blog_layout', 'default' );
	if ( $blog_layout == 'default' ){
		$margin[] = 'col-lg-12 hover-images default-posts pl-0 pr-0';
	} elseif ( $blog_layout == 'two-column' ) {
		if( ! is_single() ){
			$margin[] = 'col-lg-6 hover-images two-columns-post';
		}
	} elseif ( $blog_layout == 'three-column' ) {
		$margin[] = 'col-lg-4 hover-images three-column-posts';
	}
}

$margin[] = 'mb-5 hentry blog-fix col-12';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $margin ); ?>>
	<?php ushop_post_thumbnail(); ?>
	<header class="entry-header">
		<?php
		if ( ! is_singular() ) :
			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta mb-3">
				<?php ushop_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if ( is_single() ){
			the_content( sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ushop' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
		}else{
			the_excerpt();
		}
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ushop' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		if ( is_single() ){
			ushop_entry_footer();
		}
		if ( ! is_single()) : ?>
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="read-more"><?php esc_html_e( 'read more', 'boka' )?> &rarr;</a>
		<?php endif; ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->