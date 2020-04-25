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
    <label class='cv-label left text-capitalize'>Enter " . pascalize($data['name']) . "</label>
</div>";
}

function location_info()
{
  $req_url = 'https://get.client-ip.com/lookup';
  $data = file_get_contents($req_url);
  return ['ip' => $data->clientIP, 'country' => $data->countryName,];
}


function user_session($agent, $user)
{
  $req_url = 'https://get.client-ip.com/lookup';
  $result = file_get_contents($req_url);
  $data = json_decode($result);
  if ($agent->isBrowser()) {
    $currentAgent = $agent->getBrowser() . ' ' . $agent->getVersion();
  } elseif ($agent->isRobot()) {
    $currentAgent = $this->agent->robot();
  } elseif ($agent->isMobile()) {
    $currentAgent = $agent->getMobile();
  } else {
    $currentAgent = 'Unidentified User Agent';
  }
  return json_encode([
    'id'        => $user['id'],
    'username'  => $user['username'],
    'role'      => $user['role'],
    'ip'        => $data->clientIP,
    'timezone'  => $data->timezone,
    'country'   => $data->countryName,
    'browser'   => $currentAgent,
    'os'        => $agent->getPlatform()
  ]);
}
