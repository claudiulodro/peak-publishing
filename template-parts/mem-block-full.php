<div class="mem-block full <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail' ?>">
	<?php if ( has_post_thumbnail() ): ?>
		<div class="thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'mem-full' ) ?></a></div>
	<?php endif ?>
	<div class="article-info">
		<div class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
		<?php if ( ! has_post_thumbnail() ): ?>
			<div class="excerpt"><a href="<?php the_permalink() ?>"><?php the_excerpt() ?></a></div>
		<?php endif ?>
		<div class="byline">By <?php the_author() ?> &mdash; <?php the_time('F j, Y') ?></div>
	</div>
</div>