<?php
require_once('../config/dbsupport.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://ihe.fpt.edu.vn/upload/config/original/trang-chu-favicon-1620353748.png" type="image/x-icon">
    <title>admin</title>
</head>
<?php
session_start();

?>
<?php
        if(!isset($_SESSION['login'])){
            header('location: http://localhost:81/test/admin/login.php');
        }
    ?>
<body>
    
<table style="text-align: center;" class="table table-striped">
    <tr>
        <th >ID</th>
        <th >Tên Bài viết</th>
        <th ></th>
        <th ></th>
        <th ></th>
    </tr>
    <?php
        // sql interests
        $sql_name = 'select * from baiviet';
        $list_name=  executeresult_name($sql_name);

        foreach($list_name as $lists){
            echo'<tr>
            <td >'.$lists['id'].'</td>
            <td >'.$lists['tenbaiviet'].'</td>
            <td><a href="admin_update.php?id='.$lists['id'].'"<i class="far fa-edit"></i></a></td>
            <td><a href="admin_delete.php?id='.$lists['id'].'"<i class="fas fa-trash-alt"></i></a></td>
        </tr>';
        }
    ?>
</table>
    <p class="text-center">
      <a href="../index.php" class="btn btn-success">trang chủ</a>
      <a href="admin_update.php" class="btn btn-success">Thêm mới</a>
      <a href="logout.php" class="btn btn-success">Đăng Xuất</a>
    </p>


    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
<script src="./bootstrap-5.1.0-dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
    crossorigin="anonymous"></script>
</body>
</html>
