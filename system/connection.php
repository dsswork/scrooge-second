<?php

$settings= include ('config/db.php');

$host =$settings ['host'];
$dbName =$settings ['dbName'];
$user = $settings['user'];
$pass =$settings ['pass'];

$connection = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);