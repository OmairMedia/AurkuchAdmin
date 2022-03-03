<?php
	// include config and twitter api wrappe
	require_once( 'config.php' );
	require_once( 'codebird.php' );
	// settings for twitter api connection
	$settings = array(
		'oauth_access_token' => TWITTER_ACCESS_TOKEN, 
		'oauth_access_token_secret' => TWITTER_ACCESS_TOKEN_SECRET, 
		'consumer_key' => TWITTER_CONSUMER_KEY, 
		'consumer_secret' => TWITTER_CONSUMER_SECRET
	);

\Codebird\Codebird::setConsumerKey(TWITTER_CONSUMER_KEY, TWITTER_CONSUMER_SECRET);
$cb = \Codebird\Codebird::getInstance();
$cb->setToken(TWITTER_ACCESS_TOKEN, TWITTER_ACCESS_TOKEN_SECRET);
$cb->setTimeout(60 * 1000); // 60 second request timeout

	$file       = 'videopost.mp4';
$size_bytes = filesize($file);
$fp         = fopen($file, 'r');

// INIT the upload

$reply = $cb->media_upload([
  'command'     => 'INIT',
  'media_type'  => 'video/mp4',
  'total_bytes' => $size_bytes
]);

$media_id = $reply->media_id_string;

// APPEND data to the upload

$segment_id = 0;

while (! feof($fp)) {
  $chunk = fread($fp, 1048576); // 1MB per chunk for this sample

  $reply = $cb->media_upload([
    'command'       => 'APPEND',
    'media_id'      => $media_id,
    'segment_index' => $segment_id,
    'media'         => $chunk
  ]);

  $segment_id++;
}

fclose($fp);

// FINALIZE the upload

$reply = $cb->media_upload([
  'command'       => 'FINALIZE',
  'media_id'      => $media_id
]);

var_dump($reply);

if ($reply->httpstatus < 200 || $reply->httpstatus > 299) {
  die();
}

// if you have a field `processing_info` in the reply,
// use the STATUS command to check if the video has finished processing.

// Now use the media_id in a Tweet
$reply = $cb->statuses_update([
  'status'    => 'Twitter now accepts video uploads.',
  'media_ids' => $media_id
]);
?>