<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dream-phohien
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    
    	<?php get_sidebar( 'footer' ); ?>
        
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dream-phohien' ) ); ?>"><?php printf( __( 'Powered by %s', 'dream-phohien' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Based on %1$s Theme', 'dream-phohien' ), 'Dream', 'vsFish' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
    
    <div id="back_top"><i class="fa fa-angle-up"></i></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</div><!-- site-wrapper -->
</body>
</html>