<?php
/**
 * Register the "widgets".
 *
 * @package Peak_Publishing
 */

/**
 * A full-width featured section.
 */
class Peak_Publishing_Featured_Section_Full extends WP_Widget {

	/**
	 * Widget contructor.
	 */
	public function __construct() {
		parent::__construct(
			'peak_publishing_featured_section_full',
			__( 'Featured Section: Full', 'peak-publishing' ),
			array(
				'description' => __( 'Full width featured section for use in the homepage or taxonomy featured content area', 'peak-publishing' ),
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
		if ( is_single() ) {
			return;
		}

		get_template_part( 'template-parts/featured-section-full', get_post_type() );
	}
}

/**
 * A 2/3-width featured section.
 */
class Peak_Publishing_Featured_Section_Large extends WP_Widget {

	/**
	 * Widget contructor.
	 */
	public function __construct() {
		parent::__construct(
			'peak_publishing_featured_section_large',
			__( 'Featured Section: Large', 'peak-publishing' ),
			array(
				'description' => __( '2/3 width featured section for use in the homepage or taxonomy featured content area', 'peak-publishing' ),
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
		if ( is_single() ) {
			return;
		}

		get_template_part( 'template-parts/featured-section-large', get_post_type() );
	}
}

/**
 * A 1/3-width featured section.
 */
class Peak_Publishing_Featured_Section_Small extends WP_Widget {

	/**
	 * Widget contructor.
	 */
	public function __construct() {
		parent::__construct(
			'peak_publishing_featured_section_small',
			__( 'Featured Section: Small', 'peak-publishing' ),
			array(
				'description' => __( '1/3 width featured section for use in the homepage or taxonomy featured content area', 'peak-publishing' ),
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
		if ( is_single() ) {
			return;
		}

		get_template_part( 'template-parts/featured-section-small', get_post_type() );
	}
}

/**
 * A spacer featured section.
 */
class Peak_Publishing_Featured_Section_Spacer extends WP_Widget {

	/**
	 * Widget contructor.
	 */
	public function __construct() {
		parent::__construct(
			'peak_publishing_featured_section_spacer',
			__( 'Featured Section: Spacer', 'peak-publishing' ),
			array(
				'description' => __( 'A spacer or divider featured section for use in the homepage or taxonomy featured content area', 'peak-publishing' ),
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
		if ( is_single() ) {
			return;
		}

		get_template_part( 'template-parts/featured-section-spacer', get_post_type() );
	}
}

/**
 * A full-width posts list post.
 */
class Peak_Publishing_Posts_List_Featured_Section_Full extends WP_Widget {

	/**
	 * Widget contructor.
	 */
	public function __construct() {
		parent::__construct(
			'peak_publishing_posts_list_featured_section_full',
			__( 'Posts List Section: Full', 'peak-publishing' ),
			array(
				'description' => __( 'One full-width posts list post for use in the homepage or taxonomy featured content area', 'peak-publishing' ),
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
		if ( is_single() ) {
			return;
		}

		get_template_part( 'template-parts/posts-list-item-full', get_post_type() );
	}
}

/**
 * A row of posts list posts.
 */
class Peak_Publishing_Posts_List_Featured_Section_Small extends WP_Widget {

	/**
	 * Widget contructor.
	 */
	public function __construct() {
		parent::__construct(
			'peak_publishing_posts_list_featured_section_small',
			__( 'Posts List Section: Small', 'peak-publishing' ),
			array(
				'description' => __( 'A row of posts list posts for use in the homepage or taxonomy featured content area', 'peak-publishing' ),
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
		if ( is_single() ) {
			return;
		}

		get_template_part( 'template-parts/posts-list-item-small', get_post_type() );
	}
}

/**
 * Register the widgets.
 */
function peak_publishing_register_widgets() {
	register_widget( 'Peak_Publishing_Featured_Section_Full' );
	register_widget( 'Peak_Publishing_Featured_Section_Large' );
	register_widget( 'Peak_Publishing_Featured_Section_Small' );
	register_widget( 'Peak_Publishing_Featured_Section_Spacer' );
	register_widget( 'Peak_Publishing_Posts_List_Featured_Section_Full' );
	register_widget( 'Peak_Publishing_Posts_List_Featured_Section_Small' );
}
add_action( 'widgets_init', 'peak_publishing_register_widgets' );
