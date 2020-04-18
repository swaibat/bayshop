<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class PageModel extends Model
{
    protected $table = 'pages';
    protected $allowedFields = ['title','slug','content','category_id','user_id','status','focus_keyword','meta_description'];
}
