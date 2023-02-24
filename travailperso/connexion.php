<?php
require 'define.php';
require 'global.php';

$host = DB_HOST; $dbname = DB_NAME; $dbuser = DB_USER; $dbpassword = DB_PASSWORD;

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpassword);

?>