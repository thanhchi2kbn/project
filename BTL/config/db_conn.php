<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "btl_web_fpt";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
mysqli_set_charset($conn, 'UTF8');

if (!$conn) {
	echo "Connection failed!";
}