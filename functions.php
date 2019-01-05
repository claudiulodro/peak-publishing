<?php
/**
 * The assorted theme setup functions.
 *
 * @package Peak_Publishing
 */

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

		add_image_size( 'mem-full', 1172, 450, true );
		add_image_size( 'mem-large', 782, 340, true );
		add_image_size( 'mem-small', 327, 175, true );

		add_image_size( 'river-full', 556, 340, true );
		add_image_size( 'river-small', 350, 217, true );

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

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
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
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'peak_publishing_content_width', 640 );
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
			'name'          => esc_html__( 'Homepage MEM', 'peak-publishing' ),
			'id'            => 'homepage',
			'description'   => esc_html__( 'The homepage MEM', 'peak-publishing' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Taxonomy MEM', 'peak-publishing' ),
			'id'            => 'taxonomy',
			'description'   => esc_html__( 'The taxonomies MEM.', 'peak-publishing' ),
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
	wp_enqueue_style( 'peak-publishing-style-reset', get_stylesheet_uri(), [], rand() );
	wp_enqueue_style( 'peak-publishing-style', get_stylesheet_directory_uri() . '/css/peak-publishing.css', [], rand() ); // @todo remove rand()

	wp_enqueue_script( 'peak-publishing-navigation', get_template_directory_uri() . '/js/navigation.js', array(), rand(), true );

	wp_enqueue_script( 'peak-publishing-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

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

