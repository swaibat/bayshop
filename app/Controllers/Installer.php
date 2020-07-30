<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Install extends BaseController
{
	public $database_validation = [
        'hostname'              => 'required|string',
        'database'              => 'required|string',
        'username'              => 'required|string',
        'password'              => 'string',
	];
	
	public function index()
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

	public function install()
	{
        return view('install/index');
	}

	//--------------------------------------------------------------------

}
