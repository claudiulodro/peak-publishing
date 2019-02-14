<?php
/**
 * The template for a full-size featured section.
 *
 * @package Peak_Publishing
 */

global $wp_query;
?>

<?php
if ( $wp_query->current_post + 1 !== $wp_query->post_count && have_posts() ) :
	the_post();
	?>
	<div class="featured-section full <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail'; ?>">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'peak-publishing-featured-section-full' ); ?></a></div>
		<?php endif ?>
		<div class="article-info">
			<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
			<?php if ( ! has_post_thumbnail() ) : ?>
				<div class="excerpt"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
			<?php endif ?>
			<div class="byline">By <?php the_author(); ?> &mdash; <?php the_time( 'F j, Y' ); ?></div>
		</div>
	</div>
<?php endif ?>
