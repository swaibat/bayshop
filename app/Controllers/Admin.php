<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;
use App\Models\CategoryModel;

class Admin extends Controller
{

    protected $ProductModel;


    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->products = new ProductModel();
        $this->categories = new CategoryModel();
    }

    // CREATE A NEW PRODUCT
    public function product_create()
    {
        helper('form');
        if (isset($_POST) && !empty($_POST)) {
            $data = [
                'title'               => $this->request->getVar('title'),
                'slug'                => url_title($this->request->getVar('title')),
                'price'               => $this->request->getVar('price'),
                'compare_price'       => $this->request->getVar('compare_price'),
                'available_quantity'  => $this->request->getVar('available_quantity'),
                'product_type'        => $this->request->getVar('product_type'),
                'description'         => $this->request->getVar('description'),
                'vendor'              => $this->request->getVar('vendor'),
                'country'             => $this->request->getVar('country'),
                'category'            => $this->request->getVar('category'),
                'status'              => $this->request->getVar('status'),
                'focus_keyword'       => $this->request->getVar('focus_keyword'),
                'meta_description'    => $this->request->getVar('meta_description'),
            ];
            $this->products->create_product($data);
        }

        $data = [
            'folder_name'       => 'products',
            'page_name'         => 'product_create',
            'page_title'        => 'Create Product',
            'categories'        => $this->categories->get_categories()
        ];
        echo view('admin/index', $data);
    }

    // GET CATEGORIES
    public function products()
    {
        $data = [
            'folder_name'   => 'products',
            'page_name'     => 'products',
            'page_title'    => 'products',
            'products'      => $this->products->get_products(),
            'categories'    => $this->categories->get_categories()
        ];
        echo view('admin/index', $data);
    }
}
