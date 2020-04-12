<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class Admin extends Controller
{

    // CREATE A NEW PRODUCT
    public function product_create()
    {
        if (isset($_POST) && !empty($_POST)) {
            $data['title']                  = $this->input->post('title');
            $data['slug']                   = $this->input->post('slug');
            $data['price']                  = $this->input->post('price');
            $data['compare_price']          = $this->input->post('compare_price');
            $data['available_quantity']     = $this->input->post('available_quantity');
            $data['sku']                    = $this->input->post('sku');
            $data['product_type']           = $this->input->post('product_type');
            $data['description']            = $this->input->post('description');
            $data['vendor']                 = $this->input->post('vendor');
            $data['country']                = $this->input->post('country');
            $data['category']               = $this->input->post('category');
            $data['status']                 = $this->input->post('status');
            $data['focus_keyword']          = $this->input->post('focus_keyword');
            $data['meta_description']       = $this->input->post('meta_description');

            $this->db->insert('products', $data);
            $insert_id = $this->db->insert_id();
            $this->db->update('products', $data, array('products_id' => $insert_id));
            move_uploaded_file($_FILES['thumb']['tmp_name'], 'assets/global/product_thumb/' . $insert_id . '.jpg');
            $this->session->set_flashdata('success', 'add success');
            redirect($this->agent->referrer());
        }

        $data['folder_name']        = 'products';
        $data['page_name']          = 'product_create';
        $data['page_title']         = 'create Product';
        $this->load->view('admin/index', $data);
    }

    // CREATE UPDATE PRODUCT
    public function product_update($product_id)
    {
        $this->product_model->product_update($product_id);
        $data['folder_name']        = 'products';
        $data['page_name']          = 'product_update';
        $data['page_title']         = 'Update Product';
        $data['product_id']            = $product_id;
        $this->load->view('admin/index', $data);
    }

    // GET CATEGORIES
	public function products()
	{
		$data['folder_name']        = 'products';
		$data['page_name']          = 'products';
		$data['page_title']         = 'Manage Products';
		echo view('admin/index', $data);
	}

}
