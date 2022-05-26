<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dream
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    
    	<?php get_sidebar( 'footer' ); ?>
        
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'dream' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'dream' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'dream' ), 'Dream', '<a href="http://vsfish.com/" rel="designer">vsFish</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
    
    <div id="back_top"><i class="fa fa-angle-up"></i></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</div><!-- site-wrapper -->
</body>
</html>