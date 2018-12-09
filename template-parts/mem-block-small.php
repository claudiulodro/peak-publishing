<?php

?>
<div class="mem-block small">
	<div class="article <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail' ?>">
		<?php if ( has_post_thumbnail() ): ?>
			<div class="thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'mem-small' ) ?></a></div>
		<?php endif ?>
			<div class="article-info">
				<div class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
				<div class="byline"><?php the_time('F j, Y') ?></div>
			</div>
	</div>

	<?php if ( have_posts() ): the_post() ?>
		<div class="article <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail' ?>">
			<?php if ( has_post_thumbnail() ): ?>
				<div class="thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'mem-small' ) ?></a></div>
			<?php endif ?>
			<div class="article-info">
				<div class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
				<div class="byline"><?php the_time('F j, Y') ?></div>
			</div>
		</div>
	<?php endif ?>

	<?php if ( have_posts() ): the_post() ?>
		<div class="article <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail' ?>">
			<?php if ( has_post_thumbnail() ): ?>
				<div class="thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'mem-small' ) ?></a></div>
			<?php endif ?>
			<div class="article-info">
				<div class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
				<div class="byline"><?php the_time('F j, Y') ?></div>
			</div>
		</div>
	<?php endif ?>

	<?php if ( have_posts() ): the_post() ?>
		<div class="article <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail' ?>">
			<?php if ( has_post_thumbnail() ): ?>
				<div class="thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'mem-small' ) ?></a></div>
			<?php endif ?>
			<div class="article-info">
				<div class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
				<div class="byline"><?php the_time('F j, Y') ?></div>
			</div>
		</div>
	<?php endif ?>
</div>

