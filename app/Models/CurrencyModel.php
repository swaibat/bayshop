<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CurrencyModel extends Model
{
    protected $table = 'currencies';
    protected $allowedFields = ['name', 'value'];
}
