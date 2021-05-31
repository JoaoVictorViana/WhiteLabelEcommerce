<?php declare( strict_types = 1 );

namespace App;

/**
 * Bootstrap Carbon Fields container definitions
 */
function app_boot_carbon_fields_register_fields(): void {
	include_once APP_APP_SETUP_DIR . 'carbon-fields' . DIRECTORY_SEPARATOR . 'options.php';
}
