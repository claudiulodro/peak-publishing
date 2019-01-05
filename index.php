<?php
/**
 * The main template file.
 *
 * @package Peak_Publishing
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

			if ( ! is_paged() ) :
				get_sidebar( 'homepage' );
			endif;

			/* Start the Loop */
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
