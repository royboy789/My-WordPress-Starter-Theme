<?php

define( 'MY_THEME_BASE_PATH', get_template_directory() );
define( 'MY_THEME_BASE_URI', get_template_directory_uri() );
define( 'MY_THEME_ASSETS_URI', MY_THEME_BASE_URI.'/assets' );
define( 'MY_THEME_BUILD_URI', MY_THEME_BASE_URI.'/build' );
define( 'MY_THEME_VERSION', '3.0.0' );

class CalderaLearnTheme {

    /**
     * Holds the class instance.
     *
     * @access  private
     * @var     Teachers
     */
    private static $instance;

    /**
     * Returns the instance of this class.
     *
     * @access  public
     * @return  Teachers
     */
    public static function instance() {
        if (!! empty(self::$instance)) {
            $class_name = __CLASS__;
            self::$instance = new $class_name;
        }
        return self::$instance;
    }

	protected $theme_enqueue;

	function __construct() {
        add_action( 'wp_enqueue_scripts', [ $this, 'cl_theme_enqueue' ] );
        add_action( 'after_setup_theme', [ $this, 'cl_theme_setup' ] );
	}

	function cl_theme_enqueue() {
        wp_enqueue_script( 'my-theme-main-js', MY_THEME_BUILD_URI. '/js/scripts.js', array( 'jquery' ), MY_THEME_VERSION, false );
        wp_enqueue_style( 'my-theme-main-css', MY_THEME_BUILD_URI. '/css/styles.css', array(), MY_THEME_VERSION, 'all' );
	}

	function cl_theme_setup() {
		add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
	}

}

function caldera_learn_init() {
	return $Caldera = CalderaLearnTheme::instance();
}
caldera_learn_init();

?>
