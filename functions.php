<?php
/**
 * @package WordPress
 * @subpackage Adorno_Theme_v1
 */
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '',
		'after_title' => '',
	));

function bootstrap_scripts() {
	wp_enqueue_script(
		'bootstrap',
		'http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js',
		array( 'jquery' )
	);

}

add_action( 'wp_enqueue_scripts', 'bootstrap_scripts' );

//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/css/bootstrap.min.css

function bootstrap_styles()
{
	wp_register_style( 'bootstrap-style', 
		'http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/css/bootstrap.min.css', 
		array(), 
		'3.0.0', 
		'all' 
	);

	// For either a plugin or a theme, you can then enqueue the style:
	wp_enqueue_style( 'bootstrap-style' );
}

add_action( 'wp_enqueue_scripts', 'bootstrap_styles' );

?>
