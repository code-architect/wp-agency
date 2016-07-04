<?php
/*
 #=======================================================
 *
 * function.php
 *
 * The theme's function file
 *
 #=======================================================
 */


/* ---------------------------------------------------- */
/* 1. CONSTANTS
/* ---------------------------------------------------- */

define('THEMEROOT', get_stylesheet_directory_uri() );
define('IMAGES', THEMEROOT.'/img' );
define('JS', THEMEROOT.'/js' );


/* ---------------------------------------------------- */
/* 2. THEME SETUP
/* ---------------------------------------------------- */
if(!function_exists('ca_theme_setup'))
{
	function ca_theme_setup()
	{
		/* Make the theme available for translation  */
		$lang_dir = THEMEROOT .'/languages';
		load_theme_textdomain('agency', $lang_dir);

		/* Add support for automatic feed links */
		add_theme_support('automatic-feed-links');

		/* Add support for post thumbnails */
		add_theme_support('post-thumbnails');

		/* Register Nav menus */
		register_nav_menus( array(
			'main-menu'	=>	__('Main Menu', 'agency')
		) );
	}

	add_action( 'after_setup_theme', 'ca_theme_setup' );
}













?>
