<?php
require_once('../config/dbsupport.php');
$danhmuc = $tenbaiviet = $noidung = $hinhanh ='';
$id;
if(!empty($_POST)){
    if(isset($_POST['danhmuc']))
    {
        $danhmuc = $_POST['danhmuc'];
    }

    if(isset($_POST['tenbaiviet']))
    {
        $tenbaiviet = $_POST['tenbaiviet'];
    }
    if(isset($_POST['noidung']))
    {
        $noidung = $_POST['noidung'];
    }
    if(isset($_POST['hinhanh']))
    {
        $hinhanh = $_POST['hinhanh'];
    }
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
    }
    if ($id != '')
    {
        $sql = "update baiviet set danhmuc = '$danhmuc',  tenbaiviet = '$tenbaiviet', noidung = '$noidung', hinhanh='$hinhanh' where id = ".$id;
        
    }
    else
    {
        $sql = "insert into baiviet (danhmuc, tenbaiviet, noidung, hinhanh) values 
        ('$danhmuc', '$tenbaiviet','$noidung', '$hinhanh')";
    }
    
    execute($sql);
    echo "$sql";
    header('location: index.php');
    die();
}
$id = '';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = 'select * from baiviet where id = '.$id;
    $list = executeresult_name($sql);
    if($list != null && count($list) >0){
                $lists = $list[0];
                $danhmuc =  $lists["danhmuc"];
                $tenbaiviet = $lists["tenbaiviet"];
                $noidung = $lists["noidung"];
                $hinhanh = $lists["hinhanh"];
    }
    else{
        $id = '';
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="page-header">
                <h1> cập nhật bài viết và tạo bài viết </h1>
            </div>
            <form method="post">
                <input type="hidden" name="id" value="<?=$id?>">

                <div class="form-group">
                    <label for="Name">danh mục</label>
                    <input type="text" name="danhmuc" id="danhmuc" class="form-control" value="<?=$danhmuc?>">
                </div>


                <div class="form-group">
                    <label for="Name">Tên bài viết</label>
                    <input type="text" name="tenbaiviet" id="tenbaiviet" class="form-control" value="<?=$tenbaiviet?>">
                </div>

                <div class="form-group">
                    <label for="Salary">nội dung</label>
                    <textarea   name="noidung" id="noidung" class="form-control" rows="10" value=<?=$noidung?> ><?=$noidung?></textarea>
                </div>

                <div class="form-group">
                    <label for="Salary">hình ảnh</label>
                    <img src='' style="width:650px;" >
                    <input type="text" name="hinhanh" id="hinhanh" class="form-control" value="<?=$hinhanh?>">
                </div>
                <button class="btn btn-success">Lưu lại</button>
                <a class="btn btn-success" href="index.php">Quay lại</a>
            </form>
            
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>