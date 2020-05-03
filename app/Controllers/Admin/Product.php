<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public $product = [
        'title'                 => 'required|min_length[3]',
        'price'                 => 'required|integer',
        'compare_price'         => 'required|integer|less_than_equal_to[price]',
        'available_quantity'    => 'required|integer',
        'sku'                   => 'string',
        'type_id'               => 'integer',
        'vendor_id'             => 'integer',
        'available_quantity'    => 'integer',
        'description'           => 'string',
        'country'               => 'string',
        'category_id'           => 'integer',
        'status'                => 'integer',
        'focus_keyword'         => 'string',
        'meta_description'      => 'string',
    ];

    // GET PRODUCTS
    public function index()
    {

        $data = [
            'folder_name'   => 'products',
            'page_name'     => 'products',
            'page_title'    => 'products',
            'products'      => $this->products->orderBy('id', 'DESC')->findAll(),
            'types'         => $this->types->findAll(),
        ];
        echo view('admin/index', $data);
    }

    // CREATE A NEW PRODUCT
    public function create()
    {
        helper(['form', 'url']);
        if ($this->validate($this->product)) {
            $data = [
                'title'                 => $this->request->getVar('title'),
                'slug'                  => url_title($this->request->getVar('title')),
                'price'                 => $this->request->getVar('price'),
                'compare_price'         => $this->request->getVar('compare_price'),
                'available_quantity'    => $this->request->getVar('available_quantity'),
                'sku'                   => $this->request->getVar('sku'),
                'type_id'               => $this->request->getVar('type_id'),
                'vendor_id'             => $this->request->getVar('vendor_id'),
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
            $inserId    = $this->products->insertID();
            $order      = 1;
            if ($imagefile = $this->request->getFiles()) {
                foreach ($imagefile['images'] as $img) {
                    if ($img->isValid() && !$img->hasMoved()) {
                        $file_name = $img->getRandomName();
                        $this->product_files->save([
                            'products_id' => $inserId,
                            'file_url' => base_url(WRITEPATH . 'uploads/' . $file_name),
                            'order' => $order++,
                        ]);
                        $img->move(WRITEPATH . 'uploads', $file_name);
                    }
                }
            }
            return $this->res->setJSON(['status' => 201, 'message' => 'Product created Successfully']);
        } elseif (isset($_POST) && !empty($_POST)) {
            return $this->res->setJSON(['status' => 400, 'errors'  => $this->validation->getErrors()]);
        }
        $data = [
            'folder_name'       => 'products',
            'page_name'         => 'create',
            'page_title'        => 'Create Product',
            'types'             => $this->types->findAll(),
            'categories'        => $this->categories->findAll(),
            'countries'         => $this->countries->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        return view('admin/index', $data);
    }

    // UPDATE PRODUCT
    public function update()
    {
        $id  = $this->request->uri->getSegment(3);
        if ($this->validate($this->product)) {
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
                'available_quantity'    => $this->request->getVar('available_quantity'),
                'description'           => $this->request->getVar('description'),
                'country'               => $this->request->getVar('country'),
                'category_id'           => $this->request->getVar('category_id'),
                'status'                => $this->request->getVar('status'),
                'focus_keyword'         => $this->request->getVar('focus_keyword'),
                'meta_description'      => $this->request->getVar('meta_description'),
                'message'               => 'Product updated successfully'
            ];
            $order      = 1;
            if ($imagefile = $this->request->getFiles()) {

                foreach ($imagefile['images'] as $img) {
                    if ($img->isValid() && !$img->hasMoved()) {
                        $file_name = $img->getRandomName();
                        $this->product_files->save([
                            'products_id' => $id,
                            'file_url' => base_url(WRITEPATH . 'uploads/' . $file_name),
                            'order' => $order++,
                        ]);
                        $img->move(WRITEPATH . 'uploads', $file_name);
                    }
                }
            }
            $this->products->update($id, $data);
            return $this->res->setJSON(['status' => 200, 'message' => 'Product updated Successfully']);
        } elseif (isset($_POST) && !empty($_POST)) {
            return $this->res->setJSON(['status' => 400, 'errors'  => $this->validation->getErrors()]);
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
