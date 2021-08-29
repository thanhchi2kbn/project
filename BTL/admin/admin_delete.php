<?php
require_once('../config/dbsupport.php');
$id = $_GET['id'];
$sql = "delete from baiviet where id = '$id'";
echo $sql;
execute($sql);
header("location: index.php");
die();
 ?>