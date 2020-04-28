<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class Hauth extends BaseConfig {
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

public $config = [
		// set on "base_url" the relative url that point to HybridAuth Endpoint
		'callback' => 'https://localhost:8888/hauth//callback',

		"providers" => array (
			// openid providers
			"OpenID" => array (
				"enabled" => false
			),

			"Google" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "687240882097-819dhmtv2mgf5k6f8npm09kv3paflau5.apps.googleusercontent.com", "secret" => " 3GBFCLn4P4g5PsUSygGwbNdT" ),
				"redirect_uri"=>"http://localhost:8888/codeigniter_social_login/hauth/?hauth.done=google",

			),

			"Facebook" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "2618632188182397", "secret" => "f8a48d72223691ad05ca936fa20049e9" ),
			),

			"Twitter" => array (
				"enabled" => false,
				"keys"    => array ( "key" => "", "secret" => "" )
			),

			"LinkedIn" => array (
				"enabled" => false,
				"keys"    => array ( "key" => "", "secret" => "" )
			),
		),

		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => (ENVIRONMENT == 'development'),

		"debug_file" => APPPATH.'/logs/hybridauth.log',
	];
}


/* End of file hybridauthlib.php */
/* Location: ./application/config/hybridauthlib.php */
