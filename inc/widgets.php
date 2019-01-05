<?php
/**
 * Register the "widgets" used in the MEM.
 *
 * @package Peak_Publishing
 */

/**
 * A full-width MEM block.
 */
class Peak_Publishing_MEM_Block_Full extends WP_Widget {

	/**
	 * Widget contructor.
	 */
	public function __construct() {
		parent::__construct(
			'peak_publishing_mem_block_full',
			'MEM Block: Full',
			array(
				'description' => __( 'Full width MEM block', 'peak-publishing' ),
			)
		);
	}

	/**
	 * Output the widget.
	 *
	 * @param array $args     Display arguments.
	 * @param array $instance Settings for the current instance.
	 */
	public function widget( $args, $instance ) {
		get_template_part( 'template-parts/mem-block-full', get_post_type() );
	}
}

/**
 * A 2/3-width MEM block.
 */
class Peak_Publishing_MEM_Block_Large extends WP_Widget {

	/**
	 * Widget contructor.
	 */
	public function __construct() {
		parent::__construct(
			'peak_publishing_mem_block_large',
			'MEM Block: Large',
			array(
				'description' => __( '2/3 width MEM block', 'peak-publishing' ),
			)
		);
	}

	/**
	 * Output the widget.
	 *
	 * @param array $args     Display arguments.
	 * @param array $instance Settings for the current instance.
	 */
	public function widget( $args, $instance ) {
		get_template_part( 'template-parts/mem-block-large', get_post_type() );
	}
}

/**
 * A 1/3-width MEM block.
 */
class Peak_Publishing_MEM_Block_Small extends WP_Widget {

	/**
	 * Widget contructor.
	 */
	public function __construct() {
		parent::__construct(
			'peak_publishing_mem_block_small',
			'MEM Block: Small',
			array(
				'description' => __( '1/3 width MEM block', 'peak-publishing' ),
			)
		);
	}

	/**
	 * Output the widget.
	 *
	 * @param array $args     Display arguments.
	 * @param array $instance Settings for the current instance.
	 */
	public function widget( $args, $instance ) {
		get_template_part( 'template-parts/mem-block-small', get_post_type() );
	}
}

/**
 * A spacer MEM block.
 */
class Peak_Publishing_MEM_Block_Spacer extends WP_Widget {

	/**
	 * Widget contructor.
	 */
	public function __construct() {
		parent::__construct(
			'peak_publishing_mem_block_spacer',
			'MEM Block: Spacer',
			array(
				'description' => __( 'A spacer or divider MEM block', 'peak-publishing' ),
			)
		);
	}

	/**
	 * Output the widget.
	 *
	 * @param array $args     Display arguments.
	 * @param array $instance Settings for the current instance.
	 */
	public function widget( $args, $instance ) {
		get_template_part( 'template-parts/mem-block-spacer', get_post_type() );
	}
}

/**
 * A full-width river MEM block.
 */
class Peak_Publishing_River_Block_Full extends WP_Widget {

	/**
	 * Widget contructor.
	 */
	public function __construct() {
		parent::__construct(
			'peak_publishing_river_block_full',
			'River Block: Full',
			array(
				'description' => __( 'One full width river post', 'peak-publishing' ),
			)
		);
	}

	/**
	 * Output the widget.
	 *
	 * @param array $args     Display arguments.
	 * @param array $instance Settings for the current instance.
	 */
	public function widget( $args, $instance ) {
		get_template_part( 'template-parts/river-block-full', get_post_type() );
	}
}

/**
 * A small river MEM block.
 */
class Peak_Publishing_River_Block_Small extends WP_Widget {

	/**
	 * Widget contructor.
	 */
	public function __construct() {
		parent::__construct(
			'peak_publishing_river_block_small',
			'River Block: Small',
			array(
				'description' => __( 'A row of river posts', 'peak-publishing' ),
			)
		);
	}

	/**
	 * Output the widget.
	 *
	 * @param array $args     Display arguments.
	 * @param array $instance Settings for the current instance.
	 */
	public function widget( $args, $instance ) {
		get_template_part( 'template-parts/river-block-small', get_post_type() );
	}
}

/**
 * Register the widgets.
 */
function peak_publishing_register_widgets() {
	register_widget( 'Peak_Publishing_MEM_Block_Full' );
	register_widget( 'Peak_Publishing_MEM_Block_Large' );
	register_widget( 'Peak_Publishing_MEM_Block_Small' );
	register_widget( 'Peak_Publishing_MEM_Block_Spacer' );
	register_widget( 'Peak_Publishing_River_Block_Full' );
	register_widget( 'Peak_Publishing_River_Block_Small' );
}
add_action( 'widgets_init', 'peak_publishing_register_widgets' );
