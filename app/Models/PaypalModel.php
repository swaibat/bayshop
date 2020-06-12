<?php namespace App\Models;
	use CodeIgniter\Model;

class PaypalModel extends Model {
	protected $table = 'payments';
    protected $allowedFields = ['txn_id','user_id','payment_method','country_code','payer_email','amount','address_id','created_at','updated_at', 'payment_status'];
}
