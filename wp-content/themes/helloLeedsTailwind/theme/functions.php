<?php
/**
 * helloLeedsTailwind functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package helloLeedsTailwind
 */

if ( ! defined( 'HELLOLEEDSTAILWIND_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'HELLOLEEDSTAILWIND_VERSION', '0.1.0' );
}

if ( ! defined( 'HELLOLEEDSTAILWIND_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `helloleedstailwind_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'HELLOLEEDSTAILWIND_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'helloleedstailwind_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function helloleedstailwind_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on helloLeedsTailwind, use a find and replace
		 * to change 'helloleedstailwind' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'helloleedstailwind', get_template_directory() . '/languages' );

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
		add_post_type_support('attractions', 'thumbnail');


		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'helloleedstailwind' ),
				'menu-2' => __( 'Footer Menu', 'helloleedstailwind' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		add_editor_style( 'style-editor-extra.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );

		add_theme_support( "wp-block-styles");
		add_theme_support( "custom-logo");
		add_theme_support( "custom-header");
		add_theme_support( "custom-background");
		add_theme_support( "align-wide" );


	}
endif;
add_action( 'after_setup_theme', 'helloleedstailwind_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function helloleedstailwind_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'helloleedstailwind' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'helloleedstailwind' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'helloleedstailwind_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function helloleedstailwind_scripts() {
    // Enqueue jQuery (note that it's not necessary to enqueue jQuery Migrate separately)
    wp_enqueue_script('jquery');

    // Enqueue styles
	wp_enqueue_style('output', get_stylesheet_directory_uri() . '/css/output.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css', array(), 'your-style-version');
    wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/css/slick.css', array(), 'your-slick-version');
    wp_enqueue_style('input', get_stylesheet_directory_uri() . '/css/input.css');

    wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/css/slick-theme.css', array('slick'), 'your-slick-version');

    // Enqueue scripts
    wp_enqueue_script('helloleedstailwind-script', get_template_directory_uri() . '/js/script.js', array('jquery'), HELLOLEEDSTAILWIND_VERSION, true);
    wp_enqueue_script('slick-min', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), 'your-slick-version', true);
    wp_enqueue_script('background-cycle', get_template_directory_uri() . '/js/background-cycle.js', array('jquery'), HELLOLEEDSTAILWIND_VERSION, true);
	wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB2YSJ9pvc8U2exPZI3dKlw0P3PMQX20JQ&callback=Function.prototype', array('jquery'), null, true);
	wp_enqueue_script('google-maps-custom', get_template_directory_uri() . '/js/google-maps.js', array('jquery'), 1.0, true);
	

    // Enqueue comment-reply script if necessary
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'helloleedstailwind_scripts');




/**
 * Enqueue the block editor script.
 */
function helloleedstailwind_enqueue_block_editor_script() {
	wp_enqueue_script(
		'helloleedstailwind-editor',
		get_template_directory_uri() . '/js/block-editor.min.js',
		array(
			'wp-blocks',
			'wp-edit-post',
		),
		HELLOLEEDSTAILWIND_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'helloleedstailwind_enqueue_block_editor_script' );

/**
 * Enqueue the script necessary to support Tailwind Typography in the block
 * editor, using an inline script to create a JavaScript array containing the
 * Tailwind Typography classes from HELLOLEEDSTAILWIND_TYPOGRAPHY_CLASSES.
 */
function helloleedstailwind_enqueue_typography_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'helloleedstailwind-typography',
			get_template_directory_uri() . '/js/tailwind-typography-classes.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			HELLOLEEDSTAILWIND_VERSION,
			true
		);
		wp_add_inline_script( 'helloleedstailwind-typography', "tailwindTypographyClasses = '" . esc_attr( HELLOLEEDSTAILWIND_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'helloleedstailwind_enqueue_typography_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function helloleedstailwind_tinymce_add_class( $settings ) {
	$settings['body_class'] = HELLOLEEDSTAILWIND_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'helloleedstailwind_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

	global $wp_version;
	if ( $wp_version !== '4.7.1' ) {
	   return $data;
	}
  
	$filetype = wp_check_filetype( $filename, $mimes );
  
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }

  
  function fix_svg() {
	echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
  }
  add_action( 'admin_head', 'fix_svg' );


  function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyB2YSJ9pvc8U2exPZI3dKlw0P3PMQX20JQ';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');



  