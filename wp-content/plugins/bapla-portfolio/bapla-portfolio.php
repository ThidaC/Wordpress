<?php
/*
 * Plugin Name: 			Bapla Web - Références
 * Plugin URI: 				https://www.rkcreation.fr/
 * Description: 			Type de contenu et catégories de références.
 * Version: 					1.0.0
 * Author: 						RK Creation
 * Author URI: 				https://www.rkcreation.fr/
 * Copyright: 				RK Creation
 * Text Domain:       baplaweb
 * Domain Path:       /languages
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

include_once plugin_dir_path( __FILE__ ).'inc/post-type.php';
include_once plugin_dir_path( __FILE__ ).'inc/settings.php';

// Start up this plugin
$BaplaWeb_Portfolio_PostType = new \BaplaWeb\Portfolio\PostType();
$BaplaWeb_Portfolio_Settings = new \BaplaWeb\Portfolio\Settings();