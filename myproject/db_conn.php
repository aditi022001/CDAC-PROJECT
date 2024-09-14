<?php

$sname= getenv('MYSQL_HOST');
$unmae= getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

$db_name = getenv('MYSQL_DATABASE');

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
