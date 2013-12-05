<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php // get_sidebar( 'main' ); ?>

			<!-- <div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>
			</div> --><!-- .site-info -->
		</footer><!-- #colophon -->

	<?php wp_footer(); ?>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
</body>
</html>

