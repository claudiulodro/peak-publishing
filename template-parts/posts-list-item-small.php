<?php
/**
 * The template for one row of small posts list posts.
 *
 * @package Peak_Publishing
 */

global $wp_query;
?>
<div class="posts-list-item small">
	<?php
	if ( $wp_query->current_post + 1 !== $wp_query->post_count && have_posts() ) :
		the_post();
		?>
		<div class="article">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'posts-list-small' ); ?></a></div>
			<?php endif ?>
			<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
			<div class="excerpt"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
			<div class="byline">By <?php the_author(); ?> &mdash; <?php the_time( 'F j, Y' ); ?></div>
		</div>
	<?php endif ?>

	<?php
	if ( $wp_query->current_post + 1 !== $wp_query->post_count && have_posts() ) :
		the_post();
		?>
		<div class="article">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'posts-list-small' ); ?></a></div>
			<?php endif ?>
			<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
			<div class="excerpt"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
			<div class="byline">By <?php the_author(); ?> &mdash; <?php the_time( 'F j, Y' ); ?></div>
		</div>
	<?php endif ?>

	<?php
	if ( $wp_query->current_post + 1 !== $wp_query->post_count && have_posts() ) :
		the_post();
		?>
		<div class="article">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'posts-list-small' ); ?></a></div>
			<?php endif ?>
			<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
			<div class="excerpt"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
			<div class="byline">By <?php the_author(); ?> &mdash; <?php the_time( 'F j, Y' ); ?></div>
		</div>
	<?php endif ?>
</div>
