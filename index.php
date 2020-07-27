<?php session_start();

ini_set('display_errors', 1);
include ('config.php');
$dbObject = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

require_once 'application/bootstrap.php';
