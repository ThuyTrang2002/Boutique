<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'ecommerce1';

// Database Username
$dbuser = 'root';

// Database Password
$dbpass = 'mysql';

// Defining base url
define("BASE_URL", "http://localhost:81/baitap/ulsa/");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser,);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}