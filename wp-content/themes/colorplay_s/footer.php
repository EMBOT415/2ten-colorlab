<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package colorplay_s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'colorplay_s' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				/*printf( esc_html__( 'Proudly powered by %s', 'colorplay_s' ), 'WordPress' );*/
			?></a>
			
<div class="copyright">
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf('&copy 2017 Colorplay Labs, Inc. All rights reserved.');
			?>
</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
