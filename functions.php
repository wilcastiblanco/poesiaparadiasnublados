<?php
/*-----------------------------------------------------------------------------------*/
// Define the version so we can easily replace it throughout the theme
define( 'PDN_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'PDN' ), // Register the Primary menu
		// Copy and paste the line above right here if you want to make another menu, 
		// just change the 'primary' to another name
	)
);

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function PDN_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
		// Copy and paste the lines above right here if you want to make another sidebar, 
		// just change the values of id and name to another word/name
	));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'PDN_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function PDN_scripts()  { 

	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	
	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style_PDN.css', get_stylesheet_directory_uri() . '/css/style_PDN.css');

	// Script PDN
	wp_enqueue_script( 'PDN-script', get_template_directory_uri() . '/js/script_PDN.js', array(), PDN_VERSION, true );

	// add fitvid
	wp_enqueue_script( 'PDN-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), PDN_VERSION, true );
	
	// add theme scripts
	wp_enqueue_script( 'PDN', get_template_directory_uri() . '/js/theme.min.js', array(), PDN_VERSION, true );
	// Font Awesome
	wp_enqueue_script('Font-Awesome', 'https://kit.fontawesome.com/b633f72132.js');

}
add_action( 'wp_enqueue_scripts', 'PDN_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header

function Bootstrap_scripts(){
	
	wp_enqueue_style( 'bootstrap.css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
	wp_enqueue_style( 'normalize.css', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css.map');
	
	wp_enqueue_script('jquiery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js');
	// wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js');
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'); 
}

add_action( 'wp_enqueue_scripts', 'Bootstrap_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header

