<?php declare( strict_types = 1 );

namespace App;

/**
 * Enqueue theme Assets
 */

/**
 * Enqueue front-end assets.
 */
function action_theme_enqueue_assets(): void {
	wp_enqueue_style(
		'app-theme',
		get_theme_file_uri( '/dist/theme.css' ),
		[],
		filemtime( get_theme_file_path( '/dist/theme.css' ) )
	);

	/**
	 * Enqueue script.
	 */
	wp_enqueue_script(
		'app-theme',
		get_theme_file_uri( '/dist/theme.js' ),
		['jquery'],
		filemtime( get_theme_file_path( '/dist/theme.js' ) ),
		true
	);
}

/**
 * Enqueue admin assets.
 */
function action_admin_enqueue_assets(): void {
	/**
	 * Enqueue style.
	 */
	wp_enqueue_style(
		'app-admin',
		get_theme_file_uri( '/dist/admin.css' ),
		[],
		filemtime( get_theme_file_path( '/dist/admin.css' ) )
	);

	/**
	 * Enqueue script.
	 */
	wp_enqueue_script(
		'app-admin',
		get_theme_file_uri( '/dist/admin.js' ),
		['jquery'],
		filemtime( get_theme_file_path( '/dist/admin.js' ) ),
		true
	);
}

function action_editor_enqueue_assets(): void {
	/**
	 * Enqueue style.
	 */
	wp_enqueue_style(
		'app-editor',
		get_theme_file_uri( '/dist/editor.css' ),
		[],
		filemtime( get_theme_file_path( '/dist/editor.css' ) )
	);

	/**
	 * Enqueue script.
	 */
	wp_enqueue_script(
		'app-editor',
		get_theme_file_uri( '/dist/editor.js' ),
		['jquery', 'wp-blocks', 'wp-element', 'wp-api-fetch', 'wp-url'],
		filemtime( get_theme_file_path( '/dist/editor.js' ) ),
		true
	);
}

