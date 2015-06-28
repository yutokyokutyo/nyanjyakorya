<?php

require_once('twitteroauth/src/TwitterOAuth.php');
require_once('config.php');

$conn = new TwitterOAuth(CONSUME_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

$params = array(
    'status' => 'TEST for bot'
);

// $result = $conn->post('status_update', $params);
$result = $conn->get('account/verify_credentials');

var_dump($result);
