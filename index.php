<?php

require __DIR__ .'/vendor/autoload.php';

$db = new \App\MySQL('John Snow');
$db->connect();
$db->status();
$db->disconnect();

echo PHP_EOL;



