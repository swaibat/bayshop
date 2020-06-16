<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use PHPUnit\Util\Json;

class Dashboard extends BaseController
{
    
    // Dashboard
    public function index()
    {
        return check_access_permissions($this->request);
        // if()
        $data = [
            'folder_name'       => 'dashboard',
            'page_name'         => 'dashboard',
            'page_title'        => 'Dashboard',
        ];
        if($this->admin_user){
            $data['total_categories']   = count($this->categories->findAll());
            $data['total_products']     = count($this->products->findAll());
            $data['total_users']        = count($this->user->findAll());
        }else{
            $data['total_categories']   = count($this->categories->where('vendor_id', $this->user_data['id'])->findAll());
            $data['total_products']     = count($this->products->where('vendor_id', $this->user_data['id'])->findAll());
            $data['total_pages']        = count($this->pages->where('vendor_id', $this->user_data['id'])->findAll());
        } 
        return view($this->backpath.'/index', $data);
    }
}
