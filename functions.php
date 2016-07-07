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



/* ---------------------------------------------------- */
/* 3. GET post meta
/* ---------------------------------------------------- */

if(!function_exists('ca_post_meta'))
{
	function ca_post_meta()
	{
			if(get_post_type() === 'post')
			{
				echo '<p><span>';
				_e('Created with by ', 'agency');
				printf('<a href="%1$s" rel="author">%2$s</a>', esc_url(get_author_posts_url(get_the_author_meta('ID'))), get_the_author());
				echo ' | '.get_the_date().'</span></p>';

			}
	}
}


/* ---------------------------------------------------- */
/* 4. Pagination
/* ---------------------------------------------------- */

if(!function_exists('ca_numbered_pagination'))
{
	function ca_numbered_pagination()
	{
		$args = [
			'prev_next'	=>	false,
			'type'			=> 'array'
		];

		echo '<nav>';
		$pagination = paginate_links($args);

		if(is_array($pagination))
		{
			echo '<ul class="pagination pagination-lg">';
			foreach ($pagination as $page)
			{
				if(stripos( $page, 'current' ))
				{
					echo '<li class="active"><a href="#">'. $page .'</a></li>';
				} else {
					echo '<li>'. $page .'</li>';
				}
			}
			echo '</ul>';
		}

		echo '</nav>';
	}
}

/* ---------------------------------------------------- */
/* 5. REgister Widget Area
/* ---------------------------------------------------- */

if(!function_exists('ca_widget_init'))
{
	function ca_widget_init()
	{
		if(function_exists('register_sidebar'))
		{
			register_sidebar(array(
				'name'					=>	__('Main Widget Area', 'agency'),
				'id'						=>	'main-sidebar',
				'description'		=>	__('Appears in the blog page', 'agency'),
				'before_widget'	=>	'<div id="%1$s" class="holder-section %2$s">',
				'after_widget'	=>	'</div>',
				'before_title'	=>	'<h3>',
				'after_title'		=>	'</h3>'

			));
		}
	}

	add_action('widgets_init', 'ca_widget_init');
}









?>
