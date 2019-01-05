<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package Peak_Publishing
 */

?>
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'peak-publishing' ); ?></h1>
	</header>

	<div class="page-content">
		<?php
		if ( is_search() ) :
			?>
			<div class="on-page-search">
				<?php get_search_form(); ?>
			</div>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'peak-publishing' ); ?></p>

			<?php
		else :
			?>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'peak-publishing' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div>
</section>
