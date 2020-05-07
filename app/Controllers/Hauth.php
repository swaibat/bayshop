<?php

namespace App\Controllers;

/**
 * A simple example that shows how to use multiple providers.
 */

require_once 'vendor/autoload.php';

use App\Controllers\BaseController;
use Hybridauth\Exception\Exception;
use Hybridauth\Hybridauth;
use Hybridauth\HttpClient;
use Hybridauth\Storage\Session;



class Hauth extends BaseController

{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        helper(['form', 'url', 'html', 'inflector']);
        $this->hauth       = new \Config\Hauth();
    }

    public function callback()
    {
        try {

            $hybridauth = new Hybridauth($this->hauth->config);
            $storage = new Session();
            $error = false;
        
            //
            // Event 1: User clicked SIGN-IN link
            //
            if (isset($_GET['provider'])) {
                // Validate provider exists in the $config
                if (in_array($_GET['provider'], $hybridauth->getProviders())) {
                    // Store the provider for the callback event
                    $storage->set('provider', $_GET['provider']);
                } else {
                    $error = $_GET['provider'];
                }
            }
        
            //
            // Event 2: User clicked LOGOUT link
            //
            if (isset($_GET['logout'])) {
                if (in_array($_GET['logout'], $hybridauth->getProviders())) {
                    // Disconnect the adapter
                    $adapter = $hybridauth->getAdapter($_GET['logout']);
                    $adapter->disconnect();
                } else {
                    $error = $_GET['logout'];
                }
            }
        
            //
            // Handle invalid provider errors
            //
            if ($error) {
                error_log('HybridAuth Error: Provider '. json_encode($error) .' not found or not enabled in $config');
                // Close the pop-up window
                echo "
                    <script>
                        window.opener.location.reload();
                        window.close();
                    </script>";
                exit;
            }
        
            //
            // Event 3: Provider returns via CALLBACK
            //
            if ($provider = $storage->get('provider')) {
        
                $hybridauth->authenticate($provider);
                $storage->set('provider', null);
        
                // Retrieve the provider record
                $adapter = $hybridauth->getAdapter($provider);
                $userProfile = $adapter->getUserProfile();
                $accessToken = $adapter->getAccessToken();
        
                // add your custom AUTH functions (if any) here
                // ...
                $data = [
                    'auth_token'    => $accessToken,
                    'username'      => $userProfile->displayName,
                    'slug'          => url_title($userProfile->displayName),
                    'identifier'    => $userProfile->identifier,
                    'email'         => $userProfile->email,
                    'first_name'    => $userProfile->firstName,
                    'last_name'     => $userProfile->lastName,
                    'avatar'        => strtok($userProfile->photoURL,'?'),
                    'verified'      => 1
                    ];
                if ($user = $this->user->where('email', $data['email'])->first()) {
                    $this->user->update($user['id'], $data);
                } else {
                    $this->user->save($data);
                }
                echo "<script> window.opener.location.reload(); window.close();</script>";
                set_time_limit(200);
                $_SESSION['user'] = user_session($data);
                return redirect()->to(base_url('admin/dashboard'));
        
            }
        
        } catch (Exception $e) {
            error_log( $e->getMessage());
            echo $e->getMessage();
        }
    }
}
