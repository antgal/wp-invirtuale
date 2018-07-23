<?php
/**
 * INVIRTUALE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package INVIRTUALE
 */

if ( ! function_exists( 'invirtuale_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function invirtuale_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on INVIRTUALE, use a find and replace
		 * to change 'iv' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'iv', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'iv' ),
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
		add_theme_support( 'custom-background', apply_filters( 'invirtuale_custom_background_args', array(
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
add_action( 'after_setup_theme', 'invirtuale_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function invirtuale_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'invirtuale_content_width', 640 );
}
add_action( 'after_setup_theme', 'invirtuale_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function invirtuale_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'invirtuale' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'invirtuale' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'invirtuale_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function invirtuale_scripts() {
	wp_enqueue_style( 'invirtuale-style', get_stylesheet_uri() );

	wp_enqueue_script( 'invirtuale-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'invirtuale-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'invirtuale_scripts' );

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

/**
 * --------START Removing junk head injections --------
 */

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// First, we remove all the RSS feed links from wp_head using remove_action
remove_action( 'wp_head','feed_links', 2 );
remove_action( 'wp_head','feed_links_extra', 3 );

// Resource Hints is a rather new W3C specification that “defines the dns-prefetch,
// preconnect, prefetch, and prerender relationships of the HTML Link Element (<link>)”.
// These can be used to assist the browser in the decision process of which origins it
// should connect to, and which resources it should fetch and preprocess to improve page performance.
remove_action( 'wp_head', 'wp_resource_hints', 2 );

// Sends a Link header for the REST API.
// https://developer.wordpress.org/reference/functions/rest_output_link_header/
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );

// Outputs the REST API link tag into page header.
// https://developer.wordpress.org/reference/functions/rest_output_link_wp_head/
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );

// https://developer.wordpress.org/reference/functions/wp_oembed_add_discovery_links/
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

// WordPress Page/Post Shortlinks
// URL shortening is sometimes useful, but this automatic ugly url
// in your header is useless. There is no reason to keep this. None.
remove_action( 'wp_head', 'wp_shortlink_wp_head');

// Weblog Client Link
// Are you editing your WordPress blog using your browser?
// Then you are not using a blog client and this link can probably be removed.
// This link is also used by a few 3rd party sites/programs that use the XML-RPC request formats.
// One example is the Flickr API. So if you start having trouble with a 3rd party service that
// updates your blog, add this back in. Otherwise, remove it.
remove_action ('wp_head', 'rsd_link');

// Windows Live Writer Manifest Link
// If you don’t know what Windows Live Writer is (it’s another blog editing client), then remove this link.
remove_action( 'wp_head', 'wlwmanifest_link');

// WordPress Generator (with version information)
// This announces that you are running WordPress and what version you are using. It serves no purpose.
remove_action('wp_head', 'wp_generator');

function my_deregister_styles(){
	wp_dequeue_style( 'invirtuale-style' );
	wp_deregister_style( 'invirtuale-style' );
}
add_action( 'wp_head', 'my_deregister_styles' );

function my_deregister_scripts(){
	wp_dequeue_script( 'wp-embed' );
	wp_deregister_script( 'wp-embed' );

	wp_dequeue_script( 'invirtuale-navigation' );
	wp_deregister_script( 'invirtuale-navigation' );

	wp_dequeue_script( 'invirtuale-skip-link-focus-fix' );
	wp_deregister_script( 'invirtuale-skip-link-focus-fix' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );


// remove injected CSS from recent comments widget
if ( !function_exists( 'remove_recent_comments_style' ) ) {
	function remove_recent_comments_style() {
		global $wp_widget_factory;
		if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
			remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
		}
	}
	add_action( 'wp_head', 'remove_recent_comments_style', 1 );
}

/* Disable the Admin Bar. */
add_filter( 'show_admin_bar', '__return_false' );

/**
 * --------END Removing junk head injections --------
 */
