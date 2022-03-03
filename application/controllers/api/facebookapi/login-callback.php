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
try {
  $accessToken = $helper->getAccessToken();
} catch(Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
    // Logged in!
    $_SESSION['facebook_access_token'] = (string) $accessToken;
    echo $_SESSION['facebook_access_token'];

    $postURL = "http://localhost/facebookapi/upload_video.php";
    echo '<br><a href="' . $postURL . '">Post Video on Facebook!</a>';

  	$response = $fb->get('/me?locale=en_US&fields=name,email', $_SESSION['facebook_access_token'] );
  	$userNode = $response->getGraphUser();
  	
    echo "<pre>"; 
    print_r($userNode);
  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']
}