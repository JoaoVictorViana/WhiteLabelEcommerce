<?php declare( strict_types = 1 );

/**
 * Declare all your actions and filters here.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ------------------------------------------------------------------------
 * Load theme setup files
 * ------------------------------------------------------------------------
 */
require_once APP_APP_SETUP_DIR . 'assets.php';
require_once APP_APP_SETUP_DIR . 'carbon-fields.php';
require_once APP_APP_SETUP_DIR . 'images.php';
require_once APP_APP_SETUP_DIR . 'menus.php';
require_once APP_APP_SETUP_DIR . 'post-types.php';
require_once APP_APP_SETUP_DIR . 'post.php';
require_once APP_APP_SETUP_DIR . 'sidebars.php';
require_once APP_APP_SETUP_DIR . 'taxonomies.php';
require_once APP_APP_SETUP_DIR . 'theme-support.php';
require_once APP_APP_SETUP_DIR . 'widgets.php';

/**
 * Setup Assets
 */
add_action( 'wp_enqueue_scripts', 'App\action_theme_enqueue_assets' );
add_action( 'admin_enqueue_scripts', 'App\action_admin_enqueue_assets' );
add_action( 'enqueue_block_editor_assets', 'App\action_editor_enqueue_assets' );

/**
 * Setup Carbon Fields
 */
add_action( 'after_setup_theme', ['Carbon_Fields\Carbon_Fields', 'boot'] );
add_action( 'carbon_fields_register_fields', 'App\app_boot_carbon_fields_register_fields' );
add_action( 'carbon_fields_register_fields', 'App\crb_attach_theme_options' );

/**
 * Setup Images
 */

/**
 * Setup Menu
 */

/**
 * Setup Post Types.
 */
add_action( 'init', 'App\app_register_example' );

/**
 * Setup Sidebars
 */

/**
 * Setup Taxonomies.
 */
add_action( 'init', 'App\app_example_taxonomies' );

/**
 * Setup Theme Supports
 */

/**
 * Setup Widgets
 */
add_action( 'widgets_init', 'App\load_widgets' );
add_action( 'widgets_init', 'App\register_widgets_init' );

/**
 * Setup api
 */

