<?php

$hostname = "sparkdb.clhidpe8erg0.us-west-2.rds.amazonaws.com";
$database = "sparknav";
$username = "root";
$password = "jammerc1s3d#";

$connection = new mysqli(
	$hostname,
	$username,
	$password,
	$database,
	3306);

if ($connection->connect_errno) {
	echo "Failed to connect to MySQL: (" . $connection->connect_errno . ") "
	. $connection->connect_error;
	die();
}

mysqli_set_charset($connection, 'utf8');

?>
