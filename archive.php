<?php
/**
 * The template for displaying archives.
 *
 * @package Peak_Publishing
 */

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

			<?php
			if ( ! is_paged() && isset( $queried_object, $queried_object->taxonomy ) ) :
				get_sidebar( 'taxonomy' );
			endif
			?>

			<?php
			while ( have_posts() ) :
				peak_publishing_posts_list_template();
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
