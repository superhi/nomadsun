<?php
/**
 * nomadsun functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nomadsun
 */

if ( ! function_exists( 'nomadsun_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nomadsun_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nomadsun, use a find and replace
		 * to change 'nomadsun' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nomadsun', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'nomadsun' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'nomadsun_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'nomadsun_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nomadsun_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'nomadsun_content_width', 640 );
}
add_action( 'after_setup_theme', 'nomadsun_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nomadsun_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nomadsun' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nomadsun' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nomadsun_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nomadsun_scripts() {
	wp_enqueue_style( 'nomadsun-style', get_stylesheet_uri() );

	// here we bring tachyons into our theme and load it
	wp_enqueue_style( 'nomadsun-tachyons',  get_template_directory_uri() . '/css/tachyons.css');

	// we load our custom css file
	wp_enqueue_style( 'nomadsun-custom',  get_template_directory_uri() . '/css/custom.css');

	// here we load barba.js from our js folder
	wp_enqueue_script('nomadsun-barba', get_template_directory_uri() . '/js/barba.js');

	// here we load our script file using jquery alongside it
	wp_enqueue_script('nomadsun-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'nomadsun_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

// with our function we give it a name
// and an input (argument) of $name
function shout_name($name) {
	// we want to take our name and convert
	// it to uppercase and return it
	echo strtoupper($name);
}

// write a function that formats
// our date in a nice way
function nice_date($date) {
	echo date("F Y", strtotime($date));
}

// here we have a function that returns
// us a nicely formatted background image
function nice_background($image_field) {
	// we pass in our image field, and it returns us it 
	// in a formatted fashion 
	echo 'background-image: url(' . get_field($image_field) . ')';
}
