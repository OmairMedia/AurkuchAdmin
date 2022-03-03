<?php
    // OAUTH Configuration
    $oauthClientID = '454715070903-1a4r64st02k0fcdcb5lj92o14htpkf2n.apps.googleusercontent.com';
    $oauthClientSecret = 'TZ4XP3cEr0uYR1XcKhdKKLnN';
    $baseUri = 'http://localhost/newsadmin/';
    $redirectUri = 'http://localhost/newsadmin/admin/news';
    
    define('OAUTH_CLIENT_ID',$oauthClientID);
    define('OAUTH_CLIENT_SECRET',$oauthClientSecret);
    define('REDIRECT_URI',$redirectUri);
    define('BASE_URI',$baseUri);
    
    // Include google client libraries
    require_once 'src/autoload.php'; 
    require_once 'src/Client.php';
    require_once 'src/Service/YouTube.php';
    //session_start();
    
    $client = new Google_Client();
    $client->setClientId(OAUTH_CLIENT_ID);
    $client->setClientSecret(OAUTH_CLIENT_SECRET);
    $client->setScopes('https://www.googleapis.com/auth/youtube');
    $client->setRedirectUri(REDIRECT_URI);
    
    // Define an object that will be used to make all API requests.
    $youtube = new Google_Service_YouTube($client);
    
?>