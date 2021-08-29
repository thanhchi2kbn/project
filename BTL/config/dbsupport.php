<?php
require_once('config.php');
function execute($sql)
{
    $conn = mysqli_connect(Host, Username, Password, database);
    mysqli_set_charset($conn, 'UTF8');
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

function executeresult_name($sql_name){
    $conn = mysqli_connect(Host, Username, Password, database);
    mysqli_set_charset($conn, 'UTF8');
    $resultset = mysqli_query($conn, $sql_name);
    $list =[];
    while($row = mysqli_fetch_array($resultset, 1)){
        $list[] = $row;
    }
    mysqli_close($conn);
    return $list;
}
?>