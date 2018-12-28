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
	$wp_customize->add_setting( 'peak_publishing_nav_bg_color', array(
		'default' => '#ffffff'
	) );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
			$wp_customize, 
			'nav_bg_color', 
			array(
				'label'      => __( 'Header Background Color', 'peak_publishing' ),
				'section'    => 'colors',
				'settings'   => 'peak_publishing_nav_bg_color',
			)
		) 
	);

	// Nav primary text color.
	$wp_customize->add_setting( 'peak_publishing_nav_text_color', array(
		'default' => '#676767'
	) );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
			$wp_customize, 
			'nav_text_color', 
			array(
				'label'      => __( 'Header Text Color', 'peak_publishing' ),
				'section'    => 'colors',
				'settings'   => 'peak_publishing_nav_text_color',
			)
		) 
	);

	// Nav secondary text color.
	$wp_customize->add_setting( 'peak_publishing_nav_secondary_text_color', array(
		'default' => '#cccccc'
	) );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
			$wp_customize, 
			'nav_secondary_text_color', 
			array(
				'label'      => __( 'Header Secondary Text Color', 'peak_publishing' ),
				'section'    => 'colors',
				'settings'   => 'peak_publishing_nav_secondary_text_color',
			)
		) 
	);

	// Main text color.
	$wp_customize->add_setting( 'peak_publishing_text_color', array(
		'default' => '#676767'
	) );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
			$wp_customize, 
			'text_color', 
			array(
				'label'      => __( 'Text Color', 'peak_publishing' ),
				'section'    => 'colors',
				'settings'   => 'peak_publishing_text_color',
			)
		) 
	);

	// Secondary text color.
	$wp_customize->add_setting( 'peak_publishing_secondary_text_color', array(
		'default' => '#cccccc'
	) );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
			$wp_customize, 
			'secondary_text_color', 
			array(
				'label'      => __( 'Secondary Text Color', 'peak_publishing' ),
				'section'    => 'colors',
				'settings'   => 'peak_publishing_secondary_text_color',
			)
		) 
	);

	// Font customization.
	$wp_customize->add_setting( 'peak_publishing_font_style' , array(
		'default'   => 'serif',
	) );
	$wp_customize->add_section( 'peak_publishing_font_style', array(
		'title' => __( 'Font Style', 'peak_publishing' ),
		'priority' => 59,
	) );
	$wp_customize->add_control( 'peak_publishing_font_style', array(
		'label' => __( 'Font Style', 'peak_publishing' ),
		'section' => 'peak_publishing_font_style',
		'type' => 'radio',
		'settings' => 'peak_publishing_font_style',
		'choices' => array( 
			'serif' => __( 'Serif', 'peak_publishing' ),
			'sans-serif' => __( 'Sans-Serif', 'peak_publishing' ),
		),
	) );

	// River customization.
	$wp_customize->add_setting( 'peak_publishing_river_style' , array(
		'default'   => 'large',
	) );
	$wp_customize->add_section( 'peak_publishing_river_style', array(
		'title' => __( 'River Style', 'peak_publishing' ),
		'priority' => 60,
	) );
	$wp_customize->add_control( 'peak_publishing_river_style', array(
		'label' => __( 'River Style', 'peak_publishing' ),
		'section' => 'peak_publishing_river_style',
		'type' => 'radio',
		'settings' => 'peak_publishing_river_style',
		'choices' => array( 
			'large' => __( 'Large', 'peak_publishing' ),
			'small' => __( 'Small', 'peak_publishing' ),
		),
	) );

	// @todo add refresh for widgets and colors etc.
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'peak_publishing_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'peak_publishing_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'peak_publishing_customize_register' );

function peak_publishing_customizer_styles() {
	//var_dump( get_background_color() ); die();
	$bg_color = sanitize_hex_color( '#' . get_background_color() );
	$nav_bg_color = sanitize_hex_color( get_theme_mod( 'peak_publishing_nav_bg_color', '#ffffff' ) );
	$nav_text_color = sanitize_hex_color( get_theme_mod( 'peak_publishing_nav_text_color', '#676767' ) );
	$nav_secondary_text_color = sanitize_hex_color( get_theme_mod( 'peak_publishing_nav_secondary_text_color', '#cccccc' ) );
	$text_color = sanitize_hex_color( get_theme_mod( 'peak_publishing_text_color', '#676767' ) );
	$text_secondary_color = sanitize_hex_color( get_theme_mod( 'peak_publishing_secondary_text_color', '#cccccc' ) );
	$font_style = get_theme_mod( 'peak_publishing_font_style', 'serif' );
	?>
	<style>
		html {
			font-family: <?php echo 'serif' === $font_style ? "'Charter', serif" : "'OpenSans', sans-serif" ?>;
		}
		header.site-header {
			background-color: <?php echo $nav_bg_color ?>;
		}

		header.site-header #primary-menu .menu-item-has-children .sub-menu {
			background-color: <?php echo $nav_bg_color ?>;
			border: 1px solid <?php echo $nav_secondary_text_color ?>;
		}

		header.site-header .site-title {
			color: <?php echo $nav_text_color ?>;
		}

		#primary-menu a {
			color: <?php echo $nav_secondary_text_color ?>;
		}

		#main {
			color: <?php echo $text_color ?>;
		}

		.search-field {
			color: <?php echo $text_color ?>!important;
		}

		.byline, a, a:visited, footer, input[type="submit"] {
			color: <?php echo $text_secondary_color ?>;
		}

		.mem-block a, .river-block a {
			color: <?php echo $text_color ?>;
		}

		input[type="submit"], input[type="search"], textarea, .mem-block.full.no-thumbnail, .mem-block.large.no-thumbnail {
			border: 1px solid <?php echo $text_secondary_color ?>;
		}

		.mem-block.full.has-thumbnail .article-info, input[type="submit"], input[type="search"] {
			background-color: <?php echo $bg_color ?>;
		}

		hr {
			background-color: <?php echo $text_secondary_color ?>;
		}
	</style>
	<?php
}
add_action( 'wp_head', 'peak_publishing_customizer_styles', 99 );

function peak_publishing_river_template() {
	$style = get_theme_mod( 'peak_publishing_river_style', 'large' );

	if ( 'large' === $style ) {
		get_template_part( 'template-parts/river-block-full', get_post_type() );
	} else {
		get_template_part( 'template-parts/river-block-small', get_post_type() );
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
