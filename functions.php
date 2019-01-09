<?php
/**
 * The assorted theme setup functions.
 *
 * @package Peak_Publishing
 */

define( 'PEAK_PUBLISHING_VERSION', '1.0.0' );

if ( ! function_exists( 'peak_publishing_setup' ) ) :
	/**
	 * Set up the theme supports and stuff for the theme.
	 *
	 * @package Peak_Publishing
	 */
	function peak_publishing_setup() {
		load_theme_textdomain( 'peak-publishing', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		add_image_size( 'featured-section-full', 1172, 450, true );
		add_image_size( 'featured-section-large', 782, 340, true );
		add_image_size( 'featured-section-small', 327, 175, true );

		add_image_size( 'posts-list-full', 556, 340, true );
		add_image_size( 'posts-list-small', 350, 217, true );

		add_image_size( 'single', 1172, 600, true );

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'peak-publishing' ),
				'menu-2' => esc_html__( 'Footer', 'peak-publishing' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		$bg_args = apply_filters( 'peak_publishing_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		);
		add_theme_support( 'custom-background', $bg_args );

		add_theme_support( 'customize-selective-refresh-widgets' );

		$logo_args = array(
			'height'      => 64,
			'width'       => 200,
			'flex-width'  => true,
			'flex-height' => false,
		);
		add_theme_support( 'custom-logo', $logo_args );
	}
endif;
add_action( 'after_setup_theme', 'peak_publishing_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function peak_publishing_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'peak_publishing_content_width', 1172 );
}
add_action( 'after_setup_theme', 'peak_publishing_content_width', 0 );

/**
 * Adjust the sticky nav position if the admin bar is showing.
 *
 * @package Peak_Publishing
 */
function peak_publishing_admin_bar_adjust() {
	if ( is_admin_bar_showing() ) :
		?>
		<style>
			.sticky-nav header.site-header {
				top: 32px;
			}
		</style>
		<?php
	endif;
}
add_action( 'wp_head', 'peak_publishing_admin_bar_adjust' );

/**
 * Register widget area.
 */
function peak_publishing_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Article', 'peak-publishing' ),
			'id'            => 'single',
			'description'   => esc_html__( 'Sidebar displayed on single posts & pages.', 'peak-publishing' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Homepage Featured Content Area', 'peak-publishing' ),
			'id'            => 'homepage',
			'description'   => esc_html__( 'The homepage featured content area', 'peak-publishing' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Taxonomy Featured Content Area', 'peak-publishing' ),
			'id'            => 'taxonomy',
			'description'   => esc_html__( 'The taxonomies featured content area', 'peak-publishing' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'peak_publishing_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function peak_publishing_scripts() {
	wp_enqueue_style( 'peak-publishing-style-reset', get_stylesheet_uri(), array(), PEAK_PUBLISHING_VERSION );
	wp_enqueue_style( 'peak-publishing-style', get_stylesheet_directory_uri() . '/css/peak-publishing.css', array(), PEAK_PUBLISHING_VERSION ); 

	wp_enqueue_script( 'peak-publishing-navigation', get_template_directory_uri() . '/js/navigation.js', array(), PEAK_PUBLISHING_VERSION, true );
	wp_enqueue_script( 'peak-publishing-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), PEAK_PUBLISHING_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'peak_publishing_scripts' );

/**
 * Use ellipses for the excerpt more.
 *
 * @param string $more The excerpt more.
 * @return string
 */
function peak_publishing_excerpt_more( $more ) {
	return '&nbsp;&hellip;';
}
add_filter( 'excerpt_more', 'peak_publishing_excerpt_more' );

require get_template_directory() . '/inc/widgets.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

