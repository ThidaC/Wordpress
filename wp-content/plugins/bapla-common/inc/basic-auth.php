<?php

namespace BaplaWeb\Common;

class BasicAuth {

	const HTACCES_REWRITE_RULE = '
# BEGIN WP BASIC Auth
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteCond %{HTTP:Authorization} ^(.*)
RewriteRule ^(.*) - [E=HTTP_AUTHORIZATION:%1]
</IfModule>
# END WP BASIC Auth
	';

	static $instance;
	private $blogDetails;

	function __construct(){
		self::$instance = $this;


		// register_activation_hook(__FILE__, array($this, 'activate'));
		// register_deactivation_hook(__FILE__, array($this, 'deactivate'));

		add_action( 'plugins_loaded' , array( $this , 'init' ) , 100 );

	}

	// Check for non-public site only

	function init() {

		$this->blogDetails = get_blog_details( get_current_blog_id() );

		if ( !$this->blogDetails->public ) {
			add_action('template_redirect', array($this, 'basic_auth'), 1);
		}

	}

	// Auth

	public function basic_auth(){
		nocache_headers();
		if ( is_user_logged_in() ) {
			return;
		}

		$usr = isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : '';
		$pwd = isset($_SERVER['PHP_AUTH_PW'])   ? $_SERVER['PHP_AUTH_PW']   : '';
		if (empty($usr) && empty($pwd) && isset($_SERVER['HTTP_AUTHORIZATION']) && $_SERVER['HTTP_AUTHORIZATION']) {
			list($type, $auth) = explode(' ', $_SERVER['HTTP_AUTHORIZATION']);
			if (strtolower($type) === 'basic') {
				list($usr, $pwd) = explode(':', base64_decode($auth));
			}
		}

		$user = get_user_by( 'login', $usr );
		if ( $user && wp_check_password( $pwd, $user->data->user_pass, $user->ID) ) {
			return;
		}

		$label = $usr && $pwd ? 'Erreur, mercide saisir des informations de connexion valides' : 'Merci de saisir votre mot de passe Bapla Web';

		// $is_authenticated = wp_authenticate($usr, $pwd);
		// if ( !is_wp_error( $is_authenticated ) ) {
		// 	return;
		// }

		header('WWW-Authenticate: Basic realm="'.$label.'"');
		wp_die(
			'<h1>Site protégé !</h1><p>Vous devez saisir vos informations de connexion pour voir le site ' . $this->blogDetails->blogname . '.</p><a href="https://www.' . DOMAIN_CURRENT_SITE . '" class="button">Retour sur Bapla Web</a>'
			.'<pre>'.print_r($this->blogDetails,true).'</pre><pre>'.print_r($_SERVER,true).'</pre>',
			'Authorization Required',
			array( 'response' => 401 )
		);
	}

	// Htaccess management

	public function activate(){
		if (!file_exists(ABSPATH.'.htaccess')) {
			return;
		}
		$htaccess = file_get_contents(ABSPATH.'.htaccess');
		if (strpos($htaccess, self::HTACCES_REWRITE_RULE) !== false) {
			return;
		}
		file_put_contents(ABSPATH.'.htaccess', self::HTACCES_REWRITE_RULE . $htaccess);
	}

	public function deactivate(){
		if (!file_exists(ABSPATH.'.htaccess')) {
			return;
		}
		$htaccess = file_get_contents(ABSPATH.'.htaccess');
		if (strpos($htaccess, self::HTACCES_REWRITE_RULE) === false) {
			return;
		}
		file_put_contents(ABSPATH.'.htaccess', str_replace(self::HTACCES_REWRITE_RULE, '', $htaccess));
	}

}