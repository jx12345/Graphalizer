<?php 
session_start();
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
  
