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
            'products'      => $this->products->get_products()
        ];
        return view($this->themePath, $data);
    }

    public function products()
    {
        $data = [
            'page_name'     => 'products',
            'page_title'    => 'products',
            'products'      => $this->products->get_products()
        ];
        return view($this->themePath, $data);
    }

    public function product()
    {
        $slug = $this->request->uri->getSegment(2);
        // return print_r($this->products->get_product($slug));
        $data = [
            'page_name'     => 'product_details',
            'page_title'    => 'product',
            'product'      => $this->products->get_product($slug)
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

    public function shopping_cart(){
        $data = [
            'page_name'     => 'cart',
            'page_title'    => 'view cart',
            'cart_products' => $_SESSION['cart']
            // 'products'      => $this->products->get_products()
        ];
        return view($this->themePath, $data);
    }

    public function add_to_cart(){
        $cart = $this->request->getVar('cart_items');
        $data = [
            'id'           => $this->request->getVar('id'),
            'title'        => $this->request->getVar('title'),
            'qty'          => $this->request->getVar('qty'),
            'slug'         => $this->request->getVar('slug'),
            'price'        => $this->request->getVar('price'),
            'color'        => $this->request->getVar('color'),
            'size'         => $this->request->getVar('size'),
            'image'         => $this->request->getVar('url')
        ];
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        if ($cart) {
            $this->session->remove('cart');
            $_SESSION['cart'] = json_decode($cart, true);
        }
        array_push($_SESSION['cart'],$data);
        return $this->res->setJSON($_SESSION['cart']);
    }

    public function remove_from_cart(){
        $id  = $this->request->uri->getSegment(3);
        unset($_SESSION['cart'][$id]);
        return print_r($_SESSION['cart']);
    }

    public function checkout(){
        $data = [
            'page_name'         => 'checkout',
            'page_title'        => 'checkout',
        ];
        return view($this->themePath, $data);
    }

    public function payment_method(){
        if ($this->validate(['method' => 'required'])) {
            $this->session->push('payment_method', ['method' => $this->request->getVar('method')]);
            if ($this->request->getVar('method')=='paypal') {
                return redirect()->to(base_url('/payments/paypal'));
            } else {
                return redirect()->to(base_url('/payments/stripe'));
            }
            
        }
        $data = [
            'page_name'         => 'payment_methods',
            'page_title'        => 'payment method',
        ];
        return view($this->themePath, $data);
    }

    //--------------------------------------------------------------------
}
