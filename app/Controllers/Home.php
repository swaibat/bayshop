<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		helper(['form', 'url', 'html', 'inflector']);
		return view('login');
	}

	//--------------------------------------------------------------------

}
