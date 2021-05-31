<?php declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Constant definitions.
 */
const APP_DIR = __DIR__ . DIRECTORY_SEPARATOR;
const APP_APP_DIR_NAME = 'app';
const APP_APP_HELPERS_DIR_NAME = 'helpers';
const APP_APP_ROUTES_DIR_NAME = 'routes';
const APP_APP_SETUP_DIR_NAME = 'setup';
const APP_DIST_DIR_NAME = 'dist';
const APP_RESOURCES_DIR_NAME = 'resources';
const APP_THEME_DIR_NAME = 'theme';
const APP_VENDOR_DIR_NAME = 'vendor';

const APP_APP_DIR = APP_DIR . APP_APP_DIR_NAME . DIRECTORY_SEPARATOR;
const APP_APP_HELPERS_DIR = APP_APP_DIR . APP_APP_HELPERS_DIR_NAME . DIRECTORY_SEPARATOR;
const APP_APP_ROUTES_DIR = APP_APP_DIR . APP_APP_ROUTES_DIR_NAME . DIRECTORY_SEPARATOR;
const APP_APP_SETUP_DIR = APP_APP_DIR . APP_APP_SETUP_DIR_NAME . DIRECTORY_SEPARATOR;
const APP_DIST_DIR = APP_DIR . APP_DIST_DIR_NAME . DIRECTORY_SEPARATOR;
const APP_RESOURCES_DIR = APP_DIR . APP_RESOURCES_DIR_NAME . DIRECTORY_SEPARATOR;
const APP_THEME_DIR = APP_DIR . APP_THEME_DIR_NAME . DIRECTORY_SEPARATOR;
const APP_VENDOR_DIR = APP_DIR . APP_VENDOR_DIR_NAME . DIRECTORY_SEPARATOR;

/**
 * Load composer dependencies.
 */
if ( file_exists( APP_VENDOR_DIR . 'autoload.php' ) ) {
	require_once APP_VENDOR_DIR . 'autoload.php';
}

/**
 * Load helpers.
 */
require_once APP_APP_DIR . 'helpers.php';

/**
 * Register hooks.
 */
require_once APP_APP_DIR . 'hooks.php';

/**
 * Define shortcodes.
 */
require_once APP_APP_DIR . 'shortcodes.php';

add_action(
	'after_setup_theme',
	static function(): void {
		require_once APP_APP_SETUP_DIR . 'theme-support.php';
		require_once APP_APP_SETUP_DIR . 'menus.php';
	}
);

add_action(
	'init',
	static function(): void {
		require_once APP_APP_SETUP_DIR . 'post-types.php';
		require_once APP_APP_SETUP_DIR . 'taxonomies.php';
	}
);

add_action(
	'widgets_init',
	static function(): void {
		require_once APP_APP_SETUP_DIR . 'widgets.php';
		require_once APP_APP_SETUP_DIR . 'sidebars.php';
	}
);
