<?php
	include("../config/db_conn.php");
    include("../config/dbsupport.php");
    session_start();
    
   
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <div id="main-main" class="container-fluid" >
        <main>
            <form method="POST" action="">
                <div class="col-md-4 mb-3">
                    <label for="txtEmail" class="form-label fw-bold">Tên Tài khoản</label>
                    <input type="text" class="form-control bg-light" id="txtTaikhoan" name="txtTaikhoan">
                    
                </div>
                <div class="col-md-4  mb-3">
                    <label for="txtPass" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control bg-light " id="txtPass" name="txtPass">
                    
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="chkSave">
                    <label class="form-check-label" for="chkSave">Lưu thông tin Đăng nhập</label>
                </div>
                <div class="mb-3 form-check">
                    <?php
                        if(isset($_SESSION['message'])){
                            echo "<h3>Lỗi! Kiểm tra lại thông tin tài khoản</div>";
                        }
                    ?>
                </div>
                <button type="submit" class="btn btn-success" name="sbmLogin">Login</button>
            </form>
            <?php
                if(isset($_POST['sbmLogin'])){
                    $tk = $_POST['txtTaikhoan'];
                    $pass  = $_POST['txtPass'];
            
                    //CSDL của chúng ta đã lưu Mật khẩu ở dạng THÔ
                    //Bước 02: Thực hiện truy vấn
                    $sql = "SELECT * FROM taikhoan WHERE tentk='$tk' AND matkhau='$pass'";
                    $result = mysqli_query($conn,$sql);
                    
                    $count=mysqli_num_rows($result);
                    
                    if($count == 1){
                        $_SESSION['login'] = $tk; //Tạo SESSION
                        header('location: http://localhost:81/test/admin/');
                    }else{
                        $_SESSION['message'] = 'abcxuz';
                        header('location:http://localhost:81/test/admin/login.php');
                    }
                }

            ?>
        </main>
    </div>