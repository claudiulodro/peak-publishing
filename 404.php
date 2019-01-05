<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Peak_Publishing
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'peak-publishing' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'peak-publishing' ); ?></p>

					<div class="on-page-search">
						<?php
						get_search_form();
						?>
					</div>
				</div>
			</section>

		</main>
	</div>

<?php
get_footer();
