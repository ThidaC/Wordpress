<?php

namespace BaplaWeb\Common;

class Settings {

	const OPTIONS_KEY = 'bapla-settings';

	public function __construct() {

		add_action( 'plugins_loaded' , array( $this , 'init' ) , 100 );

	}

	function init() {
		
		add_action( 'init', array( $this, 'add_options_page' ) );
		add_action( 'acf/init', array( $this, 'setup_acf_fields' ) );

	}
	public function add_options_page() {
		if( function_exists('acf_add_options_page') ) {
			
			acf_add_options_page(array(
				'page_title' 	=> 'Personnalisation générale de votre site Bapla Web',
				'menu_title' 	=> 'Personnalisation Bapla',
				'menu_slug' 	=> self::OPTIONS_KEY,
				'parent_slug' => 'options-general.php',
				'icon_url' 		=> 'dashicons-admin-tools',
			));
			
		}
	}
	public function setup_acf_fields() {

		acf_add_local_field_group(array(
			'key' => 'group_5a3ce34c0170d',
			'title' => 'Personnalisation du site',
			'fields' => array(
				array(
					'key' => 'field_5a3ce356aa8e8',
					'label' => 'Général',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'left',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_5a3ce368aa8e9',
					'label' => 'Logo',
					'name' => 'logo',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5a3d39eda6aa8',
					'label' => 'Police du site',
					'name' => 'site_font_headings',
					'type' => 'google_font_selector',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'include_web_safe_fonts' => 1,
					'enqueue_font' => 1,
					'default_font' => 'Droid Sans',
				),
				array(
					'key' => 'field_5a3d3a1aa6aa9',
					'label' => 'Police de texte',
					'name' => 'site_font_text',
					'type' => 'google_font_selector',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'include_web_safe_fonts' => 1,
					'enqueue_font' => 1,
					'default_font' => 'Droid Sans',
				),
				array(
					'key' => 'field_5a3ce3d2aa8f0',
					'label' => 'Couleurs',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'left',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_5a3ce390aa8eb',
					'label' => 'Couleur principale',
					'name' => 'color_main',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
				array(
					'key' => 'field_5a3ce3adaa8ec',
					'label' => 'Couleur accent',
					'name' => 'color_accent',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
				array(
					'key' => 'field_5a3ce3bbaa8ee',
					'label' => 'Couleur texte',
					'name' => 'color_text',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
				array(
					'key' => 'field_5a3ce3c7aa8ef',
					'label' => 'Couleur fond',
					'name' => 'color_bg',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => self::OPTIONS_KEY,
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'seamless',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
		));

	}

} 