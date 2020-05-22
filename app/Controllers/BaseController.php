<?php

namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;
use App\Models\CategoryModel;
use App\Models\CountryModel;
use App\Models\MessageModel;
use App\Models\ProductModel;
use App\Models\TypeModel;
use App\Models\CurrencyModel;
use App\Models\PageModel;
use App\Models\UserModel;
use App\Models\PostModel;
use App\Models\LogModel;
use App\Models\PostcategoryModel;
use App\Models\ProductfileModel;
use App\Models\SliderModel;
use App\Models\RoleModel;
use App\Models\ClientinfoModel;
use App\Models\SettingModel;



class BaseController extends Controller
{

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['custom_helper'];
    protected $paypal;

    /**
     * Constructor.
     */
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        helper(['form', 'url', 'html', 'inflector']);
        $this->categories       = new CategoryModel();
        $this->countries        = new CountryModel();
        $this->user             = new UserModel();
        $this->messages         = new MessageModel();
        $this->products         = new ProductModel();
        $this->types            = new TypeModel();
        $this->currencies       = new CurrencyModel();
        $this->pages            = new PageModel();
        $this->posts            = new PostModel();
        $this->post_categories  = new PostcategoryModel();
        $this->product_files    = new ProductfileModel();
        $this->slider           = new SliderModel();
        $this->settings         = new SettingModel();
        $this->roles            = new RoleModel();
        $this->clientInfo       = new ClientinfoModel();
        $this->logs             = new LogModel();
        // $this->location         = location_info();
        $this->user_agent       = $this->request->getUserAgent();
        $this->session          = \Config\Services::session();
        $this->validation       = \Config\Services::validation();
        $this->validation       = \Config\Services::validation();
        $this->email            = \Config\Services::email();
        $this->res              = $this->response;
        $this->table            = new \CodeIgniter\View\Table();
        $this->themePath        = 'themes/default/index';
    }
}
