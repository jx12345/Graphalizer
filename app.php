<?php 
session_start();
require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '1763077917273267',
    'app_secret' => '02ded92ceb16f6e7b5281cd41b2bb2f3',
    'default_graph_version' => 'v2.5',
]);

$accessToken = $_SESSION['facebook_access_token'];

$fb->setDefaultAccessToken($accessToken);
try {
  $response = $fb->get('/me');
  $userNode = $response->getGraphUser();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
}

echo 'Logged in as ' . $userNode->getName();
echo '<pre>';
print_r($userNode);
  
