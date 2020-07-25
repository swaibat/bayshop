<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CouponModel extends Model
{
    protected $table = 'coupons';
    protected $allowedFields = ['type', 'name', 'code','offer','valid_from','valid_to','buy_x_get_y','apply_to','apply_value','user_id'];
}
