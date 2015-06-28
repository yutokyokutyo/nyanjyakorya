<?php

require_once('twitterauth/twitterauth.php');
require_once('config.php');

$conn = new TwitterOAuth(CONSUME_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

$params = array(
    'status' => 'TEST for bot'
);

$result = $conn->post('status_update', $params);

var_dump($result);
