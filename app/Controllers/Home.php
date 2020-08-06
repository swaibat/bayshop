<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
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
            'products'      => $this->products->findAll()
        ];
        return view($this->themePath, $data);
    }

    public function products_search(){
        $search_term    = $this->request->getVar('term');
        $data           = $this->products->search($search_term);
        return $this->response->setJSON(['data'=> $data]);
        return print_r($data);
    }

    public function vendors()
    {
        $data = [
            'page_name'     => 'vendors',
            'page_title'    => 'vendors',
            'vendors'      => $this->user->where('role', 0)->findAll()
        ];
        return view($this->themePath, $data);
    }

    public function product()
    {
        // return $this->products->get_product($slug);
        $slug = $this->request->uri->getSegment(2);
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
            'qty'          => $this->request->getVar('qty'),
            'color'        => $this->request->getVar('color'),
            'size'         => $this->request->getVar('size'),
        ];
        $item = $this->products->get_product($this->request->getVar('slug'));
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        if ($cart) {
            $this->session->remove('cart');
            $_SESSION['cart'] = json_decode($cart, true);
        }else {
            $_SESSION['cart'][] = array_merge($item,$data);
        }
        // return print_r($_SESSION['cart']);
        return $this->res->setJSON($_SESSION['cart']);
    }

    public function remove_from_cart(){
        $id  = $this->request->uri->getSegment(3);
        unset($_SESSION['cart'][$id]);
        return print_r($_SESSION['cart']);
    }

    public function buyer_login(){
        if (!isset($_SESSION['cart'])) {
           return redirect()->to(base_url('/shopping/cart'));
        }
        if(!isset($_SESSION['user'])){
            return redirect()->to(base_url('/shipping/address'));
        }
        $data = [
            'page_name'         => 'buyer_login',
            'page_title'        => 'Buyer Login',
        ];
        return view($this->themePath, $data);
    }

    public function shipping_address(){
        if (isset($_POST) && !empty($_POST)) {
            $adress = $this->request->getVar('shipping_address');
            $_SESSION['shipping_address'] = json_decode($adress, true);
            return  $adress;
        }
        if (!isset($_SESSION['cart'])) {
           return redirect()->to(base_url('/shopping/cart'));
        }
        $data = [
            'page_name'         => 'shipping_address',
            'page_title'        => 'Shipping Address',
        ];
        return view($this->themePath, $data);
    }

    public function checkout(){
        if (!isset($_SESSION['cart'])) {
           return redirect()->to(base_url('/shopping/cart'));
        }
        $data = [
            'page_name'         => 'checkout',
            'page_title'        => 'checkout',
        ];
        return view($this->themePath, $data);
    }

    public function payment_method(){
        if (!isset($_SESSION['cart'])) {
            return redirect()->to(base_url('/shopping/cart'));
         }
        $data = [
            'page_name'         => 'payment_methods',
            'page_title'        => 'payment method',
        ];
        return view($this->themePath, $data);
    }

    //--------------------------------------------------------------------
    public $database_validation = [
        'hostname'              => 'required|string',
        'database'              => 'required|string',
        'username'              => 'required|string',
        'password'              => 'string',
	];
	
	public function install()
	{
		if (isset($_POST) && !empty($_POST) && $this->validate($database_validation)) {
		file_put_contents(".env", "
			#--------------------------------------------------------------------
			# DATABASE
			#--------------------------------------------------------------------

			database.default.hostname = ".$this->request->getVar('hostname')."
			database.default.database = ".$this->request->getVar('databse')."
			database.default.username = ".$this->request->getVar('username')."
			database.default.password = ".$this->request->getVar('password')."
			database.default.DBDriver = MySQLi"
		);

	}
        return view('install/index');
	}

	public function overview()
	{
        return view('install/index');
	}

}
