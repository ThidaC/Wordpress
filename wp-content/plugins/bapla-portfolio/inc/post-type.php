<?php

namespace BaplaWeb\Portfolio;

include_once plugin_dir_path( __FILE__ ).'../../bapla-common/inc/post-types.php';
use BaplaWeb\Common\PostTypes;


class PostType {

	const POST_TYPE_KEY = 'reference';

	public function __construct() {

		add_action( 'plugins_loaded' , array( $this , 'init' ) , 100 );

	}

	function init() {
		
		add_action( 'init', array( $this, 'add_post_type' ) );
		add_action( 'init', array( $this, 'add_taxonomy' ) );
		add_action( 'acf/init', array( $this, 'setup_acf_fields' ) );

	}
	public function add_post_type() {

		PostTypes::setup_post_type( array( 'Référence', 'Références', self::POST_TYPE_KEY, 'references' ), array(
			'menu_position' => '-10',
			'supports' => array( 'title', 'permalink', 'thumbnail', 'revisions', 'editor', 'author', 'page-attributes' ),
		), true, 'dashicons-portfolio', false );

	}
	public function add_taxonomy() {

		PostTypes::setup_taxonomy( 'Client', 'Clients', 'client', 'clients', array( self::POST_TYPE_KEY ), false, false, true );
		PostTypes::setup_taxonomy( 'Catégorie', 'Catégories', 'reference-types', 'reference-types', array( self::POST_TYPE_KEY ), true, false, false );
		
	}

	public function setup_acf_fields() {

		acf_add_local_field_group(array(
			'key' => 'group_reference_infos',
			'title' => 'Informations sur la référence',
			'fields' => array(
				array(
					'key' => 'field_reference_date',
					'label' => 'Date',
					'name' => 'reference_date',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'd/m/Y',
					'return_format' => 'U',
					'first_day' => 1,
				),
				array(
					'key' => 'field_reference_photos',
					'label' => 'Photos',
					'name' => 'photos',
					'type' => 'gallery',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'min' => '',
					'max' => '',
					'insert' => 'append',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => self::POST_TYPE_KEY,
					),
				),
			),
			'menu_order' => -100,
			'position' => 'acf_after_title',
			'style' => 'seamless',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
		));
		// acf_add_local_field_group(array(
		// 	'key' => 'group_side',
		// 	'title' => 'Médias',
		// 	'fields' => array(
		// 		array(
		// 			'key' => 'field_5a181e386f391',
		// 			'label' => 'Plan',
		// 			'name' => 'plan',
		// 			'type' => 'image',
		// 			'instructions' => '',
		// 			'required' => 0,
		// 			'conditional_logic' => 0,
		// 			'wrapper' => array(
		// 				'width' => '',
		// 				'class' => '',
		// 				'id' => '',
		// 			),
		// 			'return_format' => 'id',
		// 			'preview_size' => 'thumbnail',
		// 			'library' => 'all',
		// 			'min_width' => '',
		// 			'min_height' => '',
		// 			'min_size' => '',
		// 			'max_width' => '',
		// 			'max_height' => '',
		// 			'max_size' => '',
		// 			'mime_types' => '',
		// 		),
		// 	),
		// 	'location' => array(
		// 		array(
		// 			array(
		// 				'param' => 'post_type',
		// 				'operator' => '==',
		// 				'value' => 'rando',
		// 			),
		// 		),
		// 	),
		// 	'menu_order' => 1,
		// 	'position' => 'side',
		// 	'style' => 'default',
		// 	'label_placement' => 'top',
		// 	'instruction_placement' => 'label',
		// 	'hide_on_screen' => '',
		// 	'active' => 1,
		// 	'description' => '',
		// ));

	}

} 
