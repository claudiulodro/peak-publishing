<?php

?>
<div class="river-block small">
	<div class="article">
		<div class="thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'river-small' ) ?></a></div>
		<div class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
		<div class="excerpt"><?php the_excerpt() ?></div>
		<div class="byline">By <?php the_author() ?> &mdash; <?php the_time('F j, Y') ?></div>
	</div>

	<?php if ( have_posts() ): the_post() ?>
		<div class="article">
			<div class="thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'river-small' ) ?></a></div>
			<div class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
			<div class="excerpt"><?php the_excerpt() ?></div>
			<div class="byline">By <?php the_author() ?> &mdash; <?php the_time('F j, Y') ?></div>
		</div>
	<?php endif ?>

	<?php if ( have_posts() ): the_post() ?>
		<div class="article">
			<div class="thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'river-small' ) ?></a></div>
			<div class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
			<div class="excerpt"><?php the_excerpt() ?></div>
			<div class="byline">By <?php the_author() ?> &mdash; <?php the_time('F j, Y') ?></div>
		</div>
	<?php endif ?>
</div>
