<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Install extends Controller
{
	public function index()
	{
        helper(['form', 'url', 'html', 'inflector']);
        $forge = \Config\Database::forge();
		if ($forge->createDatabase('my_db')){
            echo 'Database created!';
        }
	}

	//--------------------------------------------------------------------

}
