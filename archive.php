<?php

$queried_object = get_queried_object();
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header>

			<?php if ( isset( $queried_object, $queried_object->taxonomy ) && is_active_sidebar( 'taxonomy' ) ):
				get_sidebar( 'taxonomy' );
			endif ?>

			<?php
			while ( have_posts() ) :
				get_template_part( 'template-parts/river-block-small', get_post_type() );
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
