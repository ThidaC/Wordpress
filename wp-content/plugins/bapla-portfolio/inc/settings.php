<?php

namespace BaplaWeb\Portfolio;

class Settings {
	public function __construct() {

		add_action( 'plugins_loaded' , array( $this , 'init' ) , 100 );

	}

	function init() {
		
		add_action( 'init', array( $this, 'add_options_page' ) );

	}
	public function add_options_page() {
		if( function_exists('acf_add_options_page') ) {
			
			acf_add_options_page(array(
				'page_title' 	=> 'Paramètres',
				'menu_title' 	=> 'Paramètres',
				'menu_slug' 	=> 'bapla-'.PostType::POST_TYPE_KEY,
				'parent_slug' => 'edit.php?post_type='.PostType::POST_TYPE_KEY,
				'icon_url' 		=> 'dashicons-admin-tools',
			));
			
		}
	}

} 