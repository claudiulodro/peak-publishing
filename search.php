<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					printf( esc_html__( 'Search Results for: %s', 'peak-publishing' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header>

			<div class="on-page-search">
				<?php get_search_form() ?>
			</div>

			<?php
			while ( have_posts() ) :
				peak_publishing_river_template();
			endwhile;

			the_posts_navigation( array( 'prev_text' => 'Previous', 'next_text' => 'Next' ) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
