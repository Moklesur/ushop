<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ushop
 */

?>
<footer id="colophon" class="site-footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://www.themetim.com/', 'ushop' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'ushop' ), 'themetim' );
						?>
					</a>
				</div><!-- .site-info -->
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- .layout -->

<?php wp_footer(); ?>

</body>
</html>
