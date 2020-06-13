<?php namespace App\Models;
	use CodeIgniter\Model;

class PaypalModel extends Model {
	protected $table = 'payments';
    protected $allowedFields = ['txn_id','user_id','payment_method','payer_email','amount','currency_code','payment_status','address_id','created_at','updated_at'];
}
