<?php
/**
 * The main template file
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			if ( is_active_sidebar( 'single' ) ) :
				get_sidebar( 'homepage' );
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				get_template_part( 'template-parts/river-block-full', get_post_type() );
			endwhile;

			the_posts_navigation( array( 'prev_text' => 'Older', 'next_text' => 'Newer' ) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main>
	</div>

<?php
get_footer();
