<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class PageModel extends Model
{
    protected $table = 'pages';
    protected $allowedFields = ['title', 'slug', 'content', 'location_nav', 'status', 'focus_keyword', 'meta_description'];
}
