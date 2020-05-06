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

/*
| -------------------------------------------------------------------
|  Facebook API Configuration
| -------------------------------------------------------------------
|
| To get an facebook app details you have to create a Facebook app
| at Facebook developers panel (https://developers.facebook.com)
|
|  facebook_app_id               string   Your Facebook App ID.
|  facebook_app_secret           string   Your Facebook App Secret.
|  facebook_login_redirect_url   string   URL to redirect back to after login. (do not include base URL)
|  facebook_logout_redirect_url  string   URL to redirect back to after logout. (do not include base URL)
|  facebook_login_type           string   Set login type. (web, js, canvas)
|  facebook_permissions          array    Your required permissions.
|  facebook_graph_version        string   Specify Facebook Graph version. Eg v3.2
|  facebook_auth_on_load         boolean  Set to TRUE to check for valid access token on every page load.
*/
public $config=[
    'facebook_app_id'               => 'Insert_Facebook_App_ID',
    'facebook_app_secret'           => 'Insert_Facebook_App_Secret',
    'facebook_login_redirect_url'   => 'user_authentication/',
    'facebook_logout_redirect_url'  => 'user_authentication/logout',
    'facebook_login_type'           => 'web',
    'facebook_permissions'          => array('email'),
    'facebook_graph_version'        => 'v3.2',
    'facebook_auth_on_load'         => TRUE,
];

}
