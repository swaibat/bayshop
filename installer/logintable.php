<?php
class Logintable
{
	// Change the value only
	public $table = 'test';	//Table Name
	public $email_field = 'rswaib@gmail.com';			// Email Field Name
	public $password_field = 'password'; 	// Password Field Name

	// End of change part

	// Get user login table information
	function get_login_table_info()
	{
		$data['table'] = $this->table; 			
		$data['email_field'] = $this->email_field;		
		$data['password_field'] = $this->password_field;	
		return (object) $data;
	}

}

?>