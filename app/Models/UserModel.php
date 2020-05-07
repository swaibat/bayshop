<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['name','slug','first_name','last_name','username','email','password','status','company','role','phone','address','auth_keys','verified','avatar'];

}
