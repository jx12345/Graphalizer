<?php

require_once __DIR__ . '/vendor/autoload.php';

echo '<pre>test';

$fb = new Facebook\Facebook([
    'app_id' => '1763077917273267',
    'app_secret' => '02ded92ceb16f6e7b5281cd41b2bb2f3',
    'default_graph_version' => 'v2.5',
]);
print_r($fb);

