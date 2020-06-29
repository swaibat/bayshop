<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public $product = [
        'title'                 => 'required|min_length[3]',
        'price'                 => 'required|integer',
        'discount'              => 'integer',
        'sku'                   => 'string',
        'collection_id'         => 'integer',
        'vendor_id'             => 'integer',
        'description'           => 'string',
        'category_id'           => 'integer',
        'status'                => 'string',
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
            'collection'         => $this->collection->findAll(),
        ];
        return view($this->backpath.'/index', $data);
    }

    // CREATE A NEW PRODUCT
    public function create()
    {
        if (isset($_POST) && !empty($_POST)) {
            $data = [
                'title'                 => $this->request->getVar('title'),
                'slug'                  => url_title($this->request->getVar('title')),
                'price'                 => $this->request->getVar('price'),
                'discount'              => $this->request->getVar('discount'),
                'sku'                   => $this->request->getVar('sku'),
                'collection_id'         => $this->request->getVar('collection_id'),
                'vendor_id'             => $this->request->getVar('vendor_id'),
                'description'           => $this->request->getVar('description'),
                'category_id'           => $this->request->getVar('category_id'),
                'status'                => $this->request->getVar('status'),
                'focus_keyword'         => $this->request->getVar('focus_keyword'),
                'meta_description'      => $this->request->getVar('meta_description'),
            ];
            $this->products->save($data);
            $insert_id    = $this->products->insertID();
            return $this->request->getFiles();
            $order      = 1;
            if ($imagefile = $this->request->getFiles()) {
                foreach ($imagefile['image'] as $img) {
                    if ($img->isValid() && !$img->hasMoved()) {
                        $file_name = $img->getRandomName();
                        $this->product_files->save([
                            'products_id' => $insert_id,
                            'file_url' => 'assets/uploads/products/' . $file_name,
                            'order' => $order++,
                        ]);
                        
                        $img->move('assets/uploads/products/', $file_name);
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
            'collection'        => $this->collection->findAll(),
            'categories'        => $this->categories->group_categories(),
            'countries'         => $this->countries->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        return view($this->backpath.'/index', $data);
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
                'discount'              => $this->request->getVar('discount'),
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
            'collection'        => $this->collection->findAll(),
            'categories'        => $this->categories->group_categories(),
            'countries'         => $this->countries->findAll(),
        ];
        echo view($this->backpath.'/index', $data);
    }
}
