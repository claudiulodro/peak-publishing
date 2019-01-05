<?php
/**
 * The template for the footer.
 *
 * @package Peak_Publishing
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<hr/>
		<div class="site-info">
			<p class="site-description">
				<?php
				bloginfo( 'name' );
				$peak_publishing_description = get_bloginfo( 'description', 'display' );
				if ( $peak_publishing_description || is_customize_preview() ) :
					?>
					&mdash; 
					<?php
					echo esc_html( $peak_publishing_description );
				endif;
				?>
			</p>

			<div class="footer-menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer-menu',
						'depth'          => 1,
					)
				);
				?>
			</div>

			<div class="theme-info">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'peak-publishing' ), 'Peak Publishing', '<a href="https://github.com/claudiulodro">Claudiu Lodromanean</a>' );
				?>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
