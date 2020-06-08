<?php namespace App\Models;
	use CodeIgniter\Model;

class PaymentModel extends Model {

	protected $table = 'payments';
    protected $allowedFields = ['txn_id','user_id','payment_method','payer_email','total','sub_total','tax','created_at','updated_at', 'payment_status'];
}