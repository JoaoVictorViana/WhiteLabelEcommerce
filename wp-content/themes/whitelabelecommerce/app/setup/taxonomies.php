<?php declare( strict_types = 1 );

namespace App;

/**
 * Register custom taxonomies.
 *
 * @link https://developer.wordpress.org/reference/functions/register_taxonomy/
 * @package WPEmergeTheme
 */
function app_example_taxonomies(): void {
	/* add categories */
	$label_category = [
		'name' => _x( 'Categories', 'taxonomy general name' ),
		'singular_name' => _x( 'Category', 'taxonomy singular name' ),
		'search_items' => __( 'Search Categories' ),
		'popular_items' => __( 'Popular Categories' ),
		'all_items' => __( 'All Categories' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Category' ),
		'update_item' => __( 'Update Category' ),
		'add_new_item' => __( 'Add New Category' ),
		'new_item_name' => __( 'New Category Name' ),
		'separate_items_with_commas' => __( 'Separate categories with commas' ),
		'add_or_remove_items' => __( 'Add or remove categories' ),
		'choose_from_most_used' => __( 'Choose from the most used categories' ),
		'menu_name' => __( 'Categories' ),
	];

	register_taxonomy(
		'app_example_category',
		'app_example',
		[
		'hierarchical' => true,
		'labels' => $label_category,
		'description' => 'Organize as categorias exemplo',
		'update_count_callback' => '_update_post_term_count',
		'show_in_rest' => true,
		'query_var' => true,
		]
	);
}

