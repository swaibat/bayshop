<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;
use App\Models\ProductTypeModel;
use App\Models\CategoryModel;
use App\Models\CountryModel;
use Config\Validation;

class Product extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->products         = new ProductModel();
        $this->product_types    = new ProductTypeModel();
        $this->categories       = new CategoryModel();
        $this->countries        = new CountryModel();
        $this->session          = \Config\Services::session();
        $this->validation       = \Config\Services::validation();
    }


    // GET CATEGORIES
    public function index()
    {
        $data = [
            'folder_name'   => 'products',
            'page_name'     => 'products',
            'page_title'    => 'products',
            'products'      => $this->products->orderBy('id', 'DESC')->findAll()
        ];
        echo view('admin/index', $data);
    }
    // if ($this->validate([
    //     'title'                     => 'required|is_unique[products.title]',
    //     'price'                     => 'required|integer|greater_than[compare_price]',
    //     'product_type'              => 'permit_empty|integer',
    //     'vendor'                    => 'required|integer',
    //     'category'                  => 'required|integer',
    //     'compare_price'             => 'permit_empty|integer',
    //     'available_quantity'        => 'permit_empty|integer',
    //     'status'                    => 'required|integer',
    // ]))
    // UPDATE CATEGORIES
    public function update($id)
    {
        helper('form');
        if (isset($_POST) && !empty($_POST)) {
            $this->products->update($id, [
                'title'               => $this->request->getVar('title'),
                'slug'                => url_title($this->request->getVar('title')),
                'price'               => $this->request->getVar('price'),
                'sku'                 => $this->request->getVar('sku'),
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
            ]);
            return redirect()->to(base_url('admin/products'));
        }

        $data = [
            'folder_name'       => 'products',
            'page_name'         => 'update',
            'page_title'        => 'Update Product',
            'id'                => $this->request->uri->getSegment(3),
            'product'           => $this->products->find($id),
            'product_types'     => $this->product_types->findAll(),
            'categories'        => $this->categories->findAll(),
            'countries'         => $this->countries->findAll(),
        ];
        echo view('admin/index', $data);
    }

    // CREATE A NEW PRODUCT
    public function create()
    {
        helper(['form', 'url']);
        if ($this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
        ])) {
            $this->products->save([
                'title'                 => $this->request->getVar('title'),
                'slug'                  => url_title($this->request->getVar('title')),
                'price'                 => $this->request->getVar('price'),
                'compare_price'         => $this->request->getVar('compare_price'),
                'available_quantity'    => $this->request->getVar('available_quantity'),
                'product_type'          => $this->request->getVar('product_type'),
                'description'           => $this->request->getVar('description'),
                'vendor'                => $this->request->getVar('vendor'),
                'country'               => $this->request->getVar('country'),
                'category'              => $this->request->getVar('category'),
                'status'                => $this->request->getVar('status'),
                'focus_keyword'         => $this->request->getVar('focus_keyword'),
                'meta_description'      => $this->request->getVar('meta_description'),
            ]);
            return $this->session->setFlashdata('msg', 'product created successfully');
        }
        $data = [
            'folder_name'       => 'products',
            'page_name'         => 'create',
            'page_title'        => 'Create Product',
            'product_types'     => $this->product_types->findAll(),
            'categories'        => $this->categories->findAll(),
            'countries'         => $this->countries->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        return view('admin/index', $data);
    }
}
