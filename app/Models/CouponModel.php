<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CouponModel extends Model
{
    protected $table = 'coupons';
    protected $allowedFields = ['type', 'name', 'code','offer','expiry_date','collection_id','user_id','status'];
}
