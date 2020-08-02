<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['names','slug','username','email','password','company','role','telephone','address','auth_keys','verified','avatar'];

}
