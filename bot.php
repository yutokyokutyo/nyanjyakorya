<?php

require_once('twitterauth/twitterauth.php');
require_once('config.php');

$conn = new TwitterOAuth(CONSUME_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

$result = $conn->get('account/verify_credentials');

var_dump($result);
