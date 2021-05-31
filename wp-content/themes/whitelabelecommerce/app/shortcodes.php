<?php declare( strict_types = 1 );

namespace App;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define shortcodes.
 */
add_shortcode( 'app-example', 'App\app_example' );

require_once APP_APP_SETUP_DIR . 'shortcodes' . DIRECTORY_SEPARATOR . 'example.php';
