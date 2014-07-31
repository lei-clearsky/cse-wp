<?php
/**
 * College functions and definitions
 *
 * @package College
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'college_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function college_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on College, use a find and replace
	 * to change 'college' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'college', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'college' ),
	) );
	//register_nav_menus( array(
	//	'primary' => __( 'Primary Menu', 'Test Menu 1' ),
	//) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'college_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // college_setup
add_action( 'after_setup_theme', 'college_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function college_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'college' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	create_widget('Left Footer', 'footer_left', 'Displays in the bottom left of footer');
	create_widget('Middle Footer', 'footer_middle', 'Displays in the bottom middle of footer');
	create_widget('Right Footer', 'footer_right', 'Displays in the bottom right of footer');

}

add_action( 'widgets_init', 'college_widgets_init' );

function create_widget($name, $id, $description){
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>' 
	);
	register_sidebar( $args );
}

/**
 * Enqueue scripts and styles.
 */
function college_scripts() {
	
	wp_enqueue_style( 'college-base', get_template_directory_uri() . '/css/base.css');
	wp_enqueue_style( 'college-style', get_stylesheet_uri() );
	wp_enqueue_style( 'googlefonts-osc', "https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700");
	wp_enqueue_style( 'googlefonts-os', "https://fonts.googleapis.com/css?family=Open+Sans");

	wp_register_style('college-flexslider', get_template_directory_uri() . '/css/flexslider_r.css');
	if(is_page('home-cse')){
		wp_enqueue_style( 'college-flexslider');

	}

	wp_enqueue_script( 'college-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'college-modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '20120206', true );
	wp_enqueue_script( 'college-expand', get_template_directory_uri() . '/js/catalog-expand.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'college-application', get_template_directory_uri() . '/js/application.js', array('jquery'), '20120206', true );



	wp_enqueue_script( 'college-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'college_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
