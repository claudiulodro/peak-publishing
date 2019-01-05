<?php
/**
 * The template for the search page.
 *
 * @package Peak_Publishing
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: 1: search query. */
					printf( esc_html__( 'Search Results for: %s', 'peak-publishing' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header>

			<div class="on-page-search">
				<?php get_search_form(); ?>
			</div>

			<?php
			while ( have_posts() ) :
				peak_publishing_river_template();
			endwhile;

			the_posts_navigation(
				array(
					'prev_text' => 'Previous',
					'next_text' => 'Next',
				)
			);

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main>
	</div>

<?php
get_footer();
