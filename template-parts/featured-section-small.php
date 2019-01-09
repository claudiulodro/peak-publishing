<?php
/**
 * The template for a small featured section.
 *
 * @package Peak_Publishing
 */

global $wp_query;
?>
<div class="featured-section small">
	<?php
	if ( $wp_query->current_post + 1 !== $wp_query->post_count && have_posts() ) :
		the_post();
		?>
		<div class="article <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail'; ?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'featured-section-small' ); ?></a></div>
			<?php endif ?>
				<div class="article-info">
					<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
					<div class="byline"><?php the_time( 'F j, Y' ); ?></div>
				</div>
		</div>
	<?php endif ?>

	<?php
	if ( $wp_query->current_post + 1 !== $wp_query->post_count && have_posts() ) :
		the_post();
		?>
		<div class="article <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail'; ?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'featured-section-small' ); ?></a></div>
			<?php endif ?>
			<div class="article-info">
				<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				<div class="byline"><?php the_time( 'F j, Y' ); ?></div>
			</div>
		</div>
	<?php endif ?>
</div>

