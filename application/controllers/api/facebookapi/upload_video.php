<?php
session_start();
require_once __DIR__ . '/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '2742946225728200',
  'app_secret' => 'ed05fd063c4b5e578915c9969c72da30',
  'default_graph_version' => 'v3.0',
  ]);

$data = [
  'title' => 'Test Video',
  'description' => 'This video is for test.',
  'source' => $fb->videoToUpload('video.mp4'),
];

try {
  $response = $fb->post('/me/videos', $data, $_SESSION['facebook_access_token']);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$graphNode = $response->getGraphNode();
var_dump($graphNode);

echo 'Video ID: ' . $graphNode['id'];

?>