<?php

namespace App\Models;

use CodeIgniter\Model;

class AddressModel extends Model
{
    protected $table = 'address';
    protected $allowedFields = [
        'user_id',
        'contact_names',
        'address_line_1',
        'address_line_2',
        'admin_area_2',
        'admin_area_1',
        'postal_code',
        'country_code',
    ];
}