<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php //do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://grayelephant.co.nz/') ); ?>" target="_blank" title="<?php esc_attr_e( 'Designed by Gray Elephant'); ?>"><?php printf( __( 'Designed by %s', '' ), 'Gray Elephant' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>