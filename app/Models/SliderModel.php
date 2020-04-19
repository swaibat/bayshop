<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class SliderModel extends Model
{
    protected $table = 'sliders';

    protected $allowedFields = ['title','slug','description','product_link','image_link','btn_text','order'];
}
