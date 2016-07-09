<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$fb = new Facebook\Facebook([
    'app_id' => '1763077917273267',
    'app_secret' => '02ded92ceb16f6e7b5281cd41b2bb2f3',
    'default_graph_version' => 'v2.5',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://jmware.co.uk/fb/login-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
