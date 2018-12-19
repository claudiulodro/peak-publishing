<article id="post-<?php the_ID(); ?>" <?php post_class( is_active_sidebar( 'single' ) ? array( 'has-sidebar' ) : array( 'no-sidebar' ) ); ?>>
	<div class="title">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="title">', '</h1>' );
		else :
			the_title( '<h2 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</div>

	<?php peak_publishing_post_thumbnail(); ?>

	<div class="content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'peak-publishing' ),
			'after'  => '</div>',
		) );
		?>
	</div>

	<?php
	if ( is_active_sidebar( 'single' ) ) :
		get_sidebar( 'single' );
	endif;
	?>

	<footer class="footer">
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="byline">By <?php the_author() ?> &mdash; <?php the_time('F j, Y') ?></div>
		<?php endif; ?>

		<?php peak_publishing_entry_footer(); ?>
	</footer>
</article>
