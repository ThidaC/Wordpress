<?php

namespace BaplaWeb\Common;

class Language {
	public function __construct() {

		add_action( 'plugins_loaded' , array( $this , 'init' ) , 100 );

	}

	function init() {
		
		load_plugin_textdomain( 'baplaweb' , false , 'bapla-common/languages' );

	}
}