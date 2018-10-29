<?php

namespace BaplaWeb\Common;

class PostTypes {
	public function __construct() {
		_x( 'Add New', 'male', 'baplaweb' );
		_x( 'Add New', 'female', 'baplaweb' );
	}

	public static function setup_post_type( $type, $args = array(), $ui = true, $menu_icon = 'dashicons-location-alt', $male = true ) {
		if ( is_array( $type ) ) {
			$types = isset( $type[1] ) ? $type[1] : $type . 's';
			$key = isset( $type[2] ) ? $type[2] : strtolower( str_ireplace( ' ', '_', $type[1] ) );
			$slug = isset( $type[3] ) ? $type[3] : str_ireplace( '_', '-', $key );
			$type = $type[0];
		} else {
			$types = $type . 's';
			$key = strtolower( str_ireplace( ' ', '_', $type ) );
			$slug = str_ireplace( '_', '-', $key );
		}
		$labels = array(
			'name'                => $type,
			'singular_name'       => $type,
			'add_new'             => _x( 'Add New', $male ? 'male' : 'female', 'baplaweb' ),
			'add_new_item'        => sprintf(_x( 'Add New %s', $male ? 'male' : 'female', 'baplaweb' ), $type),
			'edit_item'           => sprintf(_x( 'Edit %s', $male ? 'male' : 'female', 'baplaweb' ), $type),
			'new_item'            => sprintf(_x( 'New %s', $male ? 'male' : 'female', 'baplaweb' ), $type),
			'view_item'           => sprintf(_x( 'View %s', $male ? 'male' : 'female', 'baplaweb' ), $type),
			'search_items'        => sprintf(_x( 'Search %s', $male ? 'male' : 'female', 'baplaweb' ), $types),
			'not_found'           => sprintf(_x( 'No %s found', $male ? 'male' : 'female', 'baplaweb' ), $types),
			'not_found_in_trash'  => sprintf(_x( 'No %s found in Trash', $male ? 'male' : 'female', 'baplaweb' ), $types),
			'parent_item_colon'   => '',
			'menu_name'           => $types
		);
		$rewrite = array(
			'slug'                => $slug,
			'with_front'          => $ui,
			'pages'               => $ui,
			'feeds'               => true,
		);
		$args = wp_parse_args( $args, array(
			'labels'              => $labels,
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'query_var'           => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'menu_position'       => '5',
			'menu_icon' 					=> $menu_icon,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'supports'            => array( 'title', 'permalink' ),
			'taxonomies'          => array()
		));
		register_post_type( $key, $args );
	}

	/** Helpers for adding taxonomy */
	public static function setup_taxonomy( $type, $types, $key, $url_slug, $post_type_keys, $ui = true, $tag = false, $male = true ) {
		$labels = array(
			'name'                       => $types,
			'singular_name'              => $type,
			'search_items'               => sprintf(_x( 'Search %s', $male ? 'male' : 'female', 'baplaweb' ), $types),
			'popular_items'              => sprintf(_x( 'Common %s', $male ? 'male' : 'female', 'baplaweb' ), $types),
			'all_items'                  => sprintf(_x( 'All %s', $male ? 'male' : 'female', 'baplaweb' ), $types),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => sprintf(_x( 'Edit %s', $male ? 'male' : 'female', 'baplaweb' ), $type),
			'update_item'                => sprintf(_x( 'Update %s', $male ? 'male' : 'female', 'baplaweb' ), $type),
			'add_new_item'               => sprintf(_x( 'Add New %s', $male ? 'male' : 'female', 'baplaweb' ), $type),
			'new_item_name'              => sprintf(_x( 'New %s Name', $male ? 'male' : 'female', 'baplaweb' ), $type),
			'separate_items_with_commas' => sprintf(_x( 'Separate %s with commas', $male ? 'male' : 'female', 'baplaweb' ), $types),
			'add_or_remove_items'        => sprintf(_x( 'Add or remove %s', $male ? 'male' : 'female', 'baplaweb' ), $types),
			'choose_from_most_used'      => sprintf(_x( 'Choose from the most used %s', $male ? 'male' : 'female', 'baplaweb' ), $types),
		);
		$rewrite = $ui ? array(
			'slug'                       => $url_slug,
			'with_front'          			 => true,
			'hierarchical'               => !$tag,
		) : false;
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => !$tag,
			'public'                     => $ui,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
			'query_var'                  => true,
			'rewrite'                    => $rewrite
		);
		register_taxonomy( $key, $post_type_keys, $args );
	}

}