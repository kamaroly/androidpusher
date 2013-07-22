<?php

include __DIR__ . "/vendor/autoload.php";

// https://code.google.com/apis/console/
$apiKey = "myApiKey";
$regId = "device reg ID";

$pusher = new AndroidPusher\Pusher($apiKey);
$pusher->notify($regId, "Hola");

print_r($pusher->getOutputAsArray());