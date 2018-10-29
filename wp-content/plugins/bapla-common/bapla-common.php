<?php
/*
 * Plugin Name: 			Bapla Web - Fonctions communes
 * Plugin URI: 				https://www.rkcreation.fr/
 * Description: 			Authentification sur les sites non publics, languages, helpers...
 * Version: 					1.0.0
 * Author: 						RK Creation
 * Author URI: 				https://www.rkcreation.fr/
 * Copyright: 				RK Creation
 * Text Domain:       baplaweb
 * Domain Path:       /languages
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// include_once plugin_dir_path( __FILE__ ).'inc/basic-auth.php';
include_once plugin_dir_path( __FILE__ ).'inc/language.php';
include_once plugin_dir_path( __FILE__ ).'inc/post-types.php';
include_once plugin_dir_path( __FILE__ ).'inc/settings.php';

if ( !function_exists('p') ) {
function p($var) {
	print '<pre style="text-align:left;">';
	var_dump($var);
	print '</pre>';
}
}

// Start up this plugin
// $BaplaWeb_Common_BasicAuth = new \BaplaWeb\Common\BasicAuth();
$BaplaWeb_Common_Language = new \BaplaWeb\Common\Language();
$BaplaWeb_Common_Settings = new \BaplaWeb\Common\Settings();
