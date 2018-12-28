<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Peak_Publishing
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
			$peak_publishing_description = get_bloginfo( 'description', 'display' );
			if ( $peak_publishing_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php bloginfo( 'name' ); ?> &mdash; <?php echo $peak_publishing_description ?></p>
			<?php endif; 
			?>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'peak-publishing' ), 'peak-publishing', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
