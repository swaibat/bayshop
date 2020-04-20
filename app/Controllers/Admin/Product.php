<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;
use App\Models\TypeModel;
use App\Models\CategoryModel;
use App\Models\CountryModel;

class Product extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->products         = new ProductModel();
        $this->types    = new TypeModel();
        $this->categories       = new CategoryModel();
        $this->countries        = new CountryModel();
        $this->session          = \Config\Services::session();
        $this->validation       = \Config\Services::validation();
    }


    // GET PRODUCTS
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

    // CREATE A NEW PRODUCT
    public function create()
    {
        helper(['form', 'url']);
        if ($this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'title'                 => $this->request->getVar('title'),
                'slug'                  => url_title($this->request->getVar('title')),
                'price'                 => $this->request->getVar('price'),
                'compare_price'         => $this->request->getVar('compare_price'),
                'available_quantity'    => $this->request->getVar('available_quantity'),
                'product_type'          => $this->request->getVar('product_type'),
                'sku'                   => $this->request->getVar('sku'),
                'type_id'               => $this->request->getVar('type_id'),
                'vendor_id'             => $this->request->getVar('vendor_id'),
                'compare_price'         => $this->request->getVar('compare_price'),
                'available_quantity'    => $this->request->getVar('available_quantity'),
                'description'           => $this->request->getVar('description'),
                'country'               => $this->request->getVar('country'),
                'category_id'           => $this->request->getVar('category_id'),
                'status'                => $this->request->getVar('status'),
                'focus_keyword'         => $this->request->getVar('focus_keyword'),
                'meta_description'      => $this->request->getVar('meta_description'),
                'message'               => 'product created successfully'
            ];
            $this->products->save($data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'       => 'products',
            'page_name'         => 'create',
            'page_title'        => 'Create Product',
            'types'     => $this->types->findAll(),
            'categories'        => $this->categories->findAll(),
            'countries'         => $this->countries->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        return view('admin/index', $data);
    }

    // UPDATE PRODUCT
    public function update()
    {
        helper('form');
        $id                = $this->request->uri->getSegment(3);
        if ($this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'title'                 => $this->request->getVar('title'),
                'slug'                  => url_title($this->request->getVar('title')),
                'price'                 => $this->request->getVar('price'),
                'compare_price'         => $this->request->getVar('compare_price'),
                'available_quantity'    => $this->request->getVar('available_quantity'),
                'product_type'          => $this->request->getVar('product_type'),
                'sku'                   => $this->request->getVar('sku'),
                'type_id'               => $this->request->getVar('type_id'),
                'vendor_id'             => $this->request->getVar('vendor_id'),
                'compare_price'         => $this->request->getVar('compare_price'),
                'available_quantity'    => $this->request->getVar('available_quantity'),
                'description'           => $this->request->getVar('description'),
                'country'               => $this->request->getVar('country'),
                'category_id'           => $this->request->getVar('category_id'),
                'status'                => $this->request->getVar('status'),
                'focus_keyword'         => $this->request->getVar('focus_keyword'),
                'meta_description'      => $this->request->getVar('meta_description'),
                'message'               => 'Product updated successfully'
            ];
            $this->products->update($id, $data);
            return $this->response->setJSON($data);
        }

        $data = [
            'folder_name'       => 'products',
            'page_name'         => 'update',
            'page_title'        => 'Update Product',
            'product'           => $this->products->find($id),
            'types'             => $this->types->findAll(),
            'categories'        => $this->categories->findAll(),
            'countries'         => $this->countries->findAll(),
        ];
        echo view('admin/index', $data);
    }
}
