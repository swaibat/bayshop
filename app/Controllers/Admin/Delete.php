<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class Delete extends BaseController
{

	public function index()
	{
            $db              = \Config\Database::connect();
            $id               = $this->request->uri->getSegment(4);
            $table_name       = $this->request->uri->getSegment(3);
            $db->table($table_name)->delete(array('id' => $id)); 
	}

}

