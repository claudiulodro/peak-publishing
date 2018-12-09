<div class="mem-block large <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail' ?>">
	<?php if ( has_post_thumbnail() ): ?>
		<div class="thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'mem-large' ) ?></a></div>
	<?php endif ?>
	<div class="article-info">
		<div class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
		<div class="excerpt"><a href="<?php the_permalink() ?>"><?php the_excerpt() ?></a></div>
		<div class="byline">By <?php the_author() ?> &mdash; <?php the_time('F j, Y') ?></div>
	</div>
</div>