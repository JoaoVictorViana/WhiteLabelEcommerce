<?php declare( strict_types = 1 );

namespace App;

/**
 * Register menu locations.
 *
 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
 * @package WPEmergeTheme
 */

register_nav_menu( 'menu-navigation', 'Header menu' );
register_nav_menu( 'menu-footer', 'Footer menu' );
