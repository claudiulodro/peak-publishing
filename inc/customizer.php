<?php
/**
 * Peak Publishing Theme Customizer
 *
 * @package Peak_Publishing
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function peak_publishing_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Nav background color.
	$wp_customize->add_setting(
		'peak_publishing_nav_bg_color',
		array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nav_bg_color',
			array(
				'label'      => __( 'Header Background Color', 'peak-publishing' ),
				'section'    => 'colors',
				'settings'   => 'peak_publishing_nav_bg_color',
			)
		)
	);

	// Nav primary text color.
	$wp_customize->add_setting(
		'peak_publishing_nav_text_color',
		array(
			'default' => '#494949',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nav_text_color',
			array(
				'label'      => __( 'Header Text Color', 'peak-publishing' ),
				'section'    => 'colors',
				'settings'   => 'peak_publishing_nav_text_color',
			)
		)
	);

	// Nav secondary text color.
	$wp_customize->add_setting(
		'peak_publishing_nav_secondary_text_color',
		array(
			'default' => '#898989',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nav_secondary_text_color',
			array(
				'label'      => __( 'Header Secondary Text Color', 'peak-publishing' ),
				'section'    => 'colors',
				'settings'   => 'peak_publishing_nav_secondary_text_color',
			)
		)
	);

	// Main text color.
	$wp_customize->add_setting(
		'peak_publishing_text_color',
		array(
			'default' => '#494949',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'text_color',
			array(
				'label'      => __( 'Text Color', 'peak-publishing' ),
				'section'    => 'colors',
				'settings'   => 'peak_publishing_text_color',
			)
		)
	);

	// Secondary text color.
	$wp_customize->add_setting(
		'peak_publishing_secondary_text_color',
		array(
			'default' => '#898989',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'secondary_text_color',
			array(
				'label'      => __( 'Secondary Text Color', 'peak-publishing' ),
				'section'    => 'colors',
				'settings'   => 'peak_publishing_secondary_text_color',
			)
		)
	);

	// Font customization.
	$wp_customize->add_setting(
		'peak_publishing_font_style',
		array(
			'default'   => 'serif',
			'sanitize_callback' => 'sanitize_title',
		)
	);
	$wp_customize->add_section(
		'peak_publishing_font_style',
		array(
			'title'    => __( 'Font Style', 'peak-publishing' ),
			'priority' => 59,
		)
	);
	$wp_customize->add_control(
		'peak_publishing_font_style',
		array(
			'label'    => __( 'Font Style', 'peak-publishing' ),
			'section'  => 'peak_publishing_font_style',
			'type'     => 'radio',
			'settings' => 'peak_publishing_font_style',
			'choices'  => array(
				'serif'      => __( 'Serif', 'peak-publishing' ),
				'sans-serif' => __( 'Sans-Serif', 'peak-publishing' ),
			),
		)
	);

	// Nav customization.
	$wp_customize->add_setting(
		'peak_publishing_nav_style',
		array(
			'default'   => 'sticky',
			'sanitize_callback' => 'sanitize_title',
		)
	);
	$wp_customize->add_section(
		'peak_publishing_nav_style',
		array(
			'title'    => __( 'Nav Style', 'peak-publishing' ),
			'priority' => 58,
		)
	);
	$wp_customize->add_control(
		'peak_publishing_nav_style',
		array(
			'label'    => __( 'Nav Style', 'peak-publishing' ),
			'section'  => 'peak_publishing_nav_style',
			'type'     => 'radio',
			'settings' => 'peak_publishing_nav_style',
			'choices'  => array(
				'sticky' => __( 'Sticky', 'peak-publishing' ),
				'static' => __( 'Static', 'peak-publishing' ),
			),
		)
	);

	// Posts list customization.
	$wp_customize->add_setting(
		'peak_publishing_posts_list_style',
		array(
			'default'   => 'large',
			'sanitize_callback' => 'sanitize_title',
		)
	);
	$wp_customize->add_section(
		'peak_publishing_posts_list_style',
		array(
			'title'    => __( 'Posts List Style', 'peak-publishing' ),
			'priority' => 60,
		)
	);
	$wp_customize->add_control(
		'peak_publishing_posts_list_style',
		array(
			'label'    => __( 'Posts List Style', 'peak-publishing' ),
			'section'  => 'peak_publishing_posts_list_style',
			'type'     => 'radio',
			'settings' => 'peak_publishing_posts_list_style',
			'choices'  => array(
				'large' => __( 'Large', 'peak-publishing' ),
				'small' => __( 'Small', 'peak-publishing' ),
			),
		)
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'peak_publishing_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'peak_publishing_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'peak_publishing_customize_register' );

/**
 * Output styles to match the customizer settings.
 */
function peak_publishing_customizer_styles() {
	$bg_color                 = sanitize_hex_color( '#' . get_background_color() );
	$nav_bg_color             = sanitize_hex_color( get_theme_mod( 'peak_publishing_nav_bg_color', '#ffffff' ) );
	$nav_text_color           = sanitize_hex_color( get_theme_mod( 'peak_publishing_nav_text_color', '#494949' ) );
	$nav_secondary_text_color = sanitize_hex_color( get_theme_mod( 'peak_publishing_nav_secondary_text_color', '#898989' ) );
	$text_color               = sanitize_hex_color( get_theme_mod( 'peak_publishing_text_color', '#494949' ) );
	$text_secondary_color     = sanitize_hex_color( get_theme_mod( 'peak_publishing_secondary_text_color', '#898989' ) );
	$font_style               = get_theme_mod( 'peak_publishing_font_style', 'serif' );
	?>
	<style>
		html {
			font-family: <?php echo 'serif' === $font_style ? "'Charter', serif" : "'OpenSans', sans-serif"; ?>;
		}
		header.site-header, header.site-header #primary-menu {
			background-color: <?php echo $nav_bg_color; ?>;
		}

		header.site-header #primary-menu .menu-item-has-children .sub-menu {
			background-color: <?php echo $nav_bg_color; ?>;
			border: 1px solid <?php echo $nav_secondary_text_color; ?>;
		}

		header.site-header .site-title {
			color: <?php echo $nav_text_color; ?>;
		}

		#primary-menu a, .menu-toggle {
			color: <?php echo $nav_secondary_text_color; ?>;
		}

		#main {
			color: <?php echo $text_color; ?>;
		}

		.search-field {
			color: <?php echo $text_color; ?>!important;
		}

		.byline, a, a:visited, a:hover, footer, input[type="submit"] {
			color: <?php echo $text_secondary_color; ?>;
		}

		.featured-section a, .posts-list-item a {
			color: <?php echo $text_color; ?>;
		}

		input[type="submit"], input[type="search"], textarea, .featured-section.full.no-thumbnail, .featured-section.large.no-thumbnail {
			border: 1px solid <?php echo $text_secondary_color; ?>;
		}

		.featured-section.full.has-thumbnail .article-info, input[type="submit"], input[type="search"] {
			background-color: <?php echo $bg_color; ?>;
		}

		hr {
			background-color: <?php echo $text_secondary_color; ?>;
		}
	</style>
	<?php
}
add_action( 'wp_head', 'peak_publishing_customizer_styles', 99 );

/**
 * Add classes to the body depending on the nav settings.
 *
 * @param array $classes Body classes.
 * @return array $classes
 */
function peak_publishing_nav_classes( $classes ) {
	$nav_style = get_theme_mod( 'peak_publishing_nav_style', 'sticky' );
	$classes[] = 'sticky' === $nav_style ? 'sticky-nav' : 'static-nav';
	return $classes;
}
add_filter( 'body_class', 'peak_publishing_nav_classes' );

/**
 * Output the correct style of posts list depending on settings.
 */
function peak_publishing_posts_list_template() {
	$style = get_theme_mod( 'peak_publishing_posts_list_style', 'large' );

	if ( 'large' === $style ) {
		get_template_part( 'template-parts/posts-list-item-full', get_post_type() );
	} else {
		get_template_part( 'template-parts/posts-list-item-small', get_post_type() );
	}
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function peak_publishing_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function peak_publishing_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function peak_publishing_customize_preview_js() {
	wp_enqueue_script( 'peak-publishing-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'peak_publishing_customize_preview_js' );
