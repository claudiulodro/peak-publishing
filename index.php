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

			// Temporary template order.
			// @todo make this customizable and dynamic.
			$templates = array(
				'mem-block-full',
				'mem-block-full',
				'mem-block-large',
				'mem-block-small',
				'mem-block-spacer',
				'river-block-full',
				'river-block-full',
				'river-block-small',
				'mem-block-spacer',
			);
			$template_index = 0;
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				if ( ! is_paged() && isset( $templates[ $template_index ] ) ):
					get_template_part( 'template-parts/' . $templates[ $template_index ], get_post_type() );
					++$template_index;
				else:
					get_template_part( 'template-parts/river-block-full', get_post_type() );
				endif;
			endwhile;

			the_posts_navigation( array( 'prev_text' => 'Older', 'next_text' => 'Newer' ) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
