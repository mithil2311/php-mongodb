<?php

require 'vendor/autoload.php';
$client = new MongoDB\Client('mongodb://127.0.0.1/test');

$db = $client->test;