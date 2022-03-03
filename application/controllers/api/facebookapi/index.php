<?php

session_start();
require_once __DIR__ . '/autoload.php';


$fb = new Facebook\Facebook([
  'app_id' => '2742946225728200',
  'app_secret' => 'ed05fd063c4b5e578915c9969c72da30',
  'default_graph_version' => 'v3.0',
  "persistent_data_handler"=>"session"
  ]);


$helper = $fb->getRedirectLoginHelper(); 
$permissions = ['email', 'user_likes','publish_actions']; // optional

$loginUrl = $helper->getLoginUrl('http://localhost/facebookapi/login-callback.php', $permissions);
$postVideoUrl = $helper->getLoginUrl('http://localhost/facebookapi/upload_video.php', $permissions);

//echo '<a href="' . $loginUrl . '">Log in with Facebook!</a><br>';
//echo '<a href="' . $postVideoUrl . '">Post video on Facebook!</a><br>';

?>

<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button&size=large&appId=2742946225728200&width=77&height=28" width="77" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>