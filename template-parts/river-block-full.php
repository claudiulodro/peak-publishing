<?php
/**
 * The template for one full-size river post.
 *
 * @package Peak_Publishing
 */

global $wp_query; ?>

<?php
if ( $wp_query->current_post + 1 !== $wp_query->post_count && have_posts() ) :
	the_post();
	?>
	<div class="river-block full  <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail'; ?>">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'river-full' ); ?></a></div>
		<?php endif ?>
		<div class="article-info">
			<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
			<div class="excerpt"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
			<div class="byline">By <?php the_author(); ?> &mdash; <?php the_time( 'F j, Y' ); ?></div>
		</div>
	</div>
<?php endif ?>
