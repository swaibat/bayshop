<?php

use App\Controllers\Admin\Country;

function custom_inputs($data, $style)
{
  return "<div class='cv-form-group input-group mb-3 " . $style['group-class'] . "'>
  <div class='input-group-prepend'>
    <span class='input-group-text bg-white rounded-0 cv-chev left'>
      <ion-icon name='" . $style['icon-name'] . "'></ion-icon>
    </span>
  </div>" . form_input($data) .
    "<span class='bar'></span>
    <label class='cv-label left text-capitalize'>Enter " . $data['label'] . "</label>
</div>";
}

function location_info()
{
  $req_url = 'https://get.client-ip.com/lookup';
  $data = file_get_contents($req_url);

  return ['ip' => $data->clientIP, 'country' => $data->countryName,];
}


function user_session($user)
{
  if ( @fopen("https://get.client-ip.com/lookup", "r") ) 
    {
      $req_url = 'https://get.client-ip.com/lookup';
      $result = file_get_contents($req_url);
      $data = json_decode($result);
      return [
        'id'        => $user['id'],
        'username'  => $user['username'],
        'role'      => $user['role'],
        'ip'        => $data->clientIP,
        'country'   => $data->countryCode,
      ];
    } else{
      return [
        'id'        => $user['id'],
        'username'  => $user['username'],
        'role'      => $user['role'],
        'message'   => 'features disabled',
      ];
    }
  
}

function send_email($data)
{
  $email = \Config\Services::email();
  $config['protocol'] = 'smtp';
  $config['smtp_host'] = 'ssl://smtp.googlemail.com';
  $config['smtp_user'] = 'rumbiihas@gmail.com';
  $config['smtp_pass'] = 'Kanyanyama01';
  $config['smtp_port'] = 465;

  $config['charset'] = 'utf-8';
  $config['mailtype'] = 'html';
  $config['newline'] = "\r\n";

  $email->initialize($config);
  $email->setFrom('admin@gmail.com', 'Your Name');
  $email->setTo($data['email']);
  $email->setSubject($data['subject']);
  $email->setMessage($data['body']);
  $email->send();
} 

function get_name_by_id($id, $data){
  foreach ($data as $dat) {
    if ($id == $dat['id']) {
      return $dat['name'];
    }
  }
}

function menu($page_name, $value, $type)
{
	if ($type == 'child') {
		echo (preg_match("/$value/i", $page_name)) ? 'on-outline' : 'off';
	} else {
		echo (preg_match("/$value/i", $page_name)) ? $type : '';
	}
}

function get_config($name)
{
  $db      = \Config\Database::connect();
  $builder = $db->table('settings');
  $query   = $builder->get();
  foreach ($query->getResultArray() as $config) {
      if ($config['name'] == $name) {
        return $config['value'];
    }
  }
}

