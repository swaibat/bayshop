<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
		// return print_r($this->categories->group_categories());
        $data = [
            'page_name'     => 'home',
			'page_title'    => 'home',
			'categories'    => $this->categories->group_categories(),
            'products'      => $this->products->orderBy('id', 'DESC')->findAll()
        ];
        return view($this->themePath, $data);
    }

    public function products()
    {
        $data = [
            'page_name'     => 'products',
            'page_title'    => 'products',
            'products'      => $this->products->orderBy('id', 'DESC')->findAll()
        ];
        return view($this->themePath, $data);
    }

    public function product()
    {
        $slug = $this->request->uri->getSegment(3);
        $data = [
            'page_name'     => 'product_details',
            'page_title'    => 'product',
            'products'      => $this->products->where('slug', $slug)->first()
        ];
        return view($this->themePath, $data);
    }

    public function category_products()
    {
		$slug = $this->request->uri->getSegment(2);
        $data = [
            'page_name'         => 'products',
            'page_title'        => 'categories',
            'categories'        => $this->categories->group_categories(),
            'products'          => $this->categories->get_products_by_category($slug),
        ];
        echo view($this->themePath, $data);
    }
    //--------------------------------------------------------------------
}
