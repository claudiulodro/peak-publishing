<?php
/**
 * The template for displaying attachment pages.
 *
 * @package Peak_Publishing
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( is_active_sidebar( 'single' ) ? array( 'has-sidebar' ) : array( 'no-sidebar' ) ); ?>>
					<?php the_title( '<h1 class="title">', '</h1>' ); ?>

					<div class="post-thumbnail">
						<?php echo wp_get_attachment_image( get_the_ID(), 'peak-publishing-single' ); ?>
					</div>

					<div class="content">
						<?php the_excerpt(); ?>
					</div>

					<?php
					if ( is_active_sidebar( 'single' ) ) :
						get_sidebar( 'single' );
					endif;
					?>
				</article>
				<?php
			endwhile;
			?>

		</main>
	</div>
<?php
get_footer();
