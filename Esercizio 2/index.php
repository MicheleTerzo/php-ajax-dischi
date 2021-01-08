<?php

include __DIR__ . '/../database/db.php';

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($database);
// var_dump($encodedDb);