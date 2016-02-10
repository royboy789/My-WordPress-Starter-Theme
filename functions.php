<?php

define( 'MY_THEME_BASE_PATH', get_template_directory() );
define( 'MY_THEME_BASE_URI', get_template_directory_uri() );
define( 'MY_THEME_ASSETS_URI', MY_THEME_BASE_URI.'/assets' );
define( 'MY_THEME_BUILD_URI', MY_THEME_BASE_URI.'/build' );
define( 'MY_THEME_VERSION', '1.0' );

require_once 'includes/theme-enqueue.php';


class gepetto_theme {

	protected $theme_enqueue;

	function __construct() {
		$this->theme_enqueue = new my_theme_enqueue();
	}

	function theme_enqueue() {
		$this->theme_enqueue->theme_scripts();
	}
	
	
}

$my_theme = new gepetto_theme();

add_action( 'wp_enqueue_scripts', array( $my_theme, 'theme_enqueue' ) );

?>