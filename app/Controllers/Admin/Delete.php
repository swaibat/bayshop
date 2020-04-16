<?php namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class Delete extends Controller
{

	public function index()
	{
            $db              = \Config\Database::connect();
            $id               = $this->request->uri->getSegment(4);
            $table_name       = $this->request->uri->getSegment(3);
            $db->table($table_name)->delete(array('id' => $id)); 
	}

}

