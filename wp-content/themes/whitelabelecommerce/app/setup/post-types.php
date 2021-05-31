<?php declare( strict_types = 1 );

namespace App;

/**
 * Register post types.
 *
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @package WPEmergeTheme
 */
function app_register_example(): void {
	register_post_type(
		'example',
		[
		'labels' => [
			'name' => 'Examples',
			'singular_name' => 'Example',
		],
		'public' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-multisite',
		'supports' => [
			'title',
			'editor',
			'thumbnail',
			'author',
			'excerpt',
		],
		'show_in_rest' => true,
		]
	);
}
