<?php
add_theme_support('post-thumbnails');

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

function register_theme_menu() {
  register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'register_theme_menu' );

function theme_scripts_load() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

	wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/library/js/scripts.js', array(), '1.0.0', true );
	wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/library/js/libs/slick.min.js', array(), '1.0.0', true );
}
function theme_styles_load() {
	if (is_front_page()) {
		wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/library/css/style-front-page.css', array(), '1.0.3');
	}
	else {
			wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/library/css/style.css', array(), '1.3.5.3');
	}
}
add_action('wp_enqueue_scripts', 'theme_scripts_load');
add_action('wp_enqueue_scripts', 'theme_styles_load');

function register_portfolio_posts() {
	$args = array(
		'label' => 'Portfolio',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'portfolio'),
		'query_var' => true,
		'supports' => array(
			'title',
			'excerpt',
			'custom-fields',
			'revisions',
			'thumbnail',
			'author',
			'editor'
		),
	);
	register_post_type('portfolio', $args);
}
add_action('init', 'register_portfolio_posts');

function excerpt_word_limit($length) { return 20; }
add_filter('excerpt_length', 'excerpt_word_limit', 999);
?>
