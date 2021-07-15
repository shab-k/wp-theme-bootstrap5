<?php

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

if (!function_exists('wp_theme_portfolio_setup')) :

	/**
	 * Register Custom Navigation Walker
	 */
	// function register_navwalker()
	// {
	// }
	// add_action('after_setup_theme', 'register_navwalker');

	function wp_theme_portfolio_setup()
	{

		load_theme_textdomain('wp-theme-portfolio', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__('Primary', 'wp-theme-portfolio'),
			)
		);
		// register_nav_menus(array(
		// 	'primary' => __('Primary Menu', 'wp-theme-portfolio'),
		// ));

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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'wp_theme_portfolio_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
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
add_action('after_setup_theme', 'wp_theme_portfolio_setup');

//Excerpt Length Control
function set_excerpt_length()
{
	return 45;
}
add_filter('excerpt_length', 'set_excerpt_length');

function prefix_modify_nav_menu_args($args)
{
	return array_merge($args, array(
		'walker' => new WP_Bootstrap_Navwalker(),
	));
}
add_filter('wp_nav_menu_args', 'prefix_modify_nav_menu_args');


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */


function wp_theme_portfolio_content_width()
{
	$GLOBALS['content_width'] = apply_filters('wp_theme_portfolio_content_width', 640);
}
add_action('after_setup_theme', 'wp_theme_portfolio_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wpb_init_widgets($id)
{
	register_sidebar(array(
		'name'  => 'Sidebar',
		'id'    => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name'  => 'Box1',
		'id'    => 'box1',
		'before_widget' => '<div class="box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));

	register_sidebar(array(
		'name'  => 'Box2',
		'id'    => 'box2',
		'before_widget' => '<div class="box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));

	register_sidebar(array(
		'name'  => 'Box3',
		'id'    => 'box3',
		'before_widget' => '<div class="box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
}

add_action('widgets_init', 'wpb_init_widgets');

/**
 * Enqueue scripts and styles.
 */
function wp_theme_portfolio_scripts()
{
	//style.css
	wp_enqueue_style('wp-theme-portfolio-style', get_stylesheet_uri(), array(), _S_VERSION);
	// Icons
	wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');
	wp_style_add_data('wp-theme-portfolio-style', 'rtl', 'replace');
	//scripts
	wp_enqueue_script('wp-theme-portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('bootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js', array('jquery'));
	wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script('wp-theme-potfolio-script', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'wp_theme_portfolio_scripts');

/**
 * Custom Fonts
 *  font-family: 'Quicksand', sans-serif;
 */
function enqueue_custom_fonts()
{
	if (!is_admin()) {
		wp_register_style('quicksand', 'https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
		wp_enqueue_style('quicksand');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
