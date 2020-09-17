<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'MONTANA_DIR_URI' ) ) {
	define( 'MONTANA_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'MONTANA_DIR_ASSETS_URI' ) ) {
	define( 'MONTANA_DIR_ASSETS_URI', MONTANA_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'MONTANA_DIR_CSS_URI' ) ) {
	define( 'MONTANA_DIR_CSS_URI', MONTANA_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'MONTANA_DIR_JS_URI' ) ) {
	define( 'MONTANA_DIR_JS_URI', MONTANA_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'MONTANA_DIR_IMGS_URI' ) ) {
	define( 'MONTANA_DIR_IMGS_URI', MONTANA_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'MONTANA_DIR_ICON_IMG_URI' ) ) {
	define( 'MONTANA_DIR_ICON_IMG_URI', MONTANA_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'MONTANA_DIR_PATH' ) ) {
	define( 'MONTANA_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'MONTANA_DIR_PATH_INC' ) ) {
	define( 'MONTANA_DIR_PATH_INC', MONTANA_DIR_PATH . 'inc/' );
}

//Montana Libraries Folder Directory
if ( ! defined( 'MONTANA_DIR_PATH_LIBS' ) ) {
	define( 'MONTANA_DIR_PATH_LIBS', MONTANA_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'MONTANA_DIR_PATH_CLASSES' ) ) {
	define( 'MONTANA_DIR_PATH_CLASSES', MONTANA_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'MONTANA_DIR_PATH_HOOKS' ) ) {
	define( 'MONTANA_DIR_PATH_HOOKS', MONTANA_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function montana_admin_script(){
    wp_enqueue_style( 'montana-admin', get_template_directory_uri().'/assets/css/montana_admin.css', false, '1.0.0' );
    wp_enqueue_script( 'montana_admin', get_template_directory_uri().'/assets/js/montana_admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'montana_admin_script' );



/**
 * Include File
 *
 */
require_once( MONTANA_DIR_PATH_INC . 'montana-breadcrumbs.php' );
require_once( MONTANA_DIR_PATH_INC . 'montana-widgets-reg.php' );
require_once( MONTANA_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( MONTANA_DIR_PATH_INC . 'post-like.php' );
require_once( MONTANA_DIR_PATH_INC . 'montana-functions.php' );
require_once( MONTANA_DIR_PATH_INC . 'montana-commoncss.php' );
require_once( MONTANA_DIR_PATH_INC . 'support-functions.php' );
require_once( MONTANA_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( MONTANA_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( MONTANA_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( MONTANA_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( MONTANA_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( MONTANA_DIR_PATH_HOOKS . 'hooks.php' );
require_once( MONTANA_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( MONTANA_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( MONTANA_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Montana object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Montana = new Montana();