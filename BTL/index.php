<?php 
require_once('config/dbsupport.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="https://ihe.fpt.edu.vn/upload/config/original/trang-chu-favicon-1620353748.png" type="image/x-icon">
    <title>Trang chủ - Tổ chức Giáo dục FPT</title>
</head>

<body>
        <?php
        // sql baiviet
        $sql_name = "select * from baiviet where danhmuc = 'cóc hóng' ";
        $list_name =  executeresult_name($sql_name);

        $sql_name3 = "select * from baiviet where danhmuc = 'cóc biết' ";
        $list_name3 =  executeresult_name($sql_name3);

        $sql_name2 = 'SELECT * FROM baiviet ORDER BY id DESC limit 3';
        $list_name2 =  executeresult_name($sql_name2);

        ?>   
    <div class="container-sm">
        <!-- header-main -->
        <?php
            require_once('template/header.php')
        ?>

        <!-- header meunu -->
        <?php
            require_once('template/header-menu.php')
        ?>

        <!-- banner-sldier-home container -->
        <?php
            require_once('banner-home.php')
        ?>
        <!-- content -->
        <div class="content">
            <!-- content-blog-1 -->
            <div class="row">
                <!-- layout right -->
                <div class="col-8 layout-right">
                    <!-- grid muc bai viet blog1  -->
                    <!-- blog hang 1 -->
                <?php
                    foreach($list_name2 as $lists2){
                    echo '  <div class="row blog-1">
                                <div class="col-8 blog-1-1">
                                    <img src="./img/'.$lists2['hinhanh'].'"
                                        style="width:555px;height:344px;object-fit: cover;">
                                    <a  href="post-page.php?id='.$lists2['id'].'" class="b-name ">
                                        '.$lists2['tenbaiviet'].'
                                    </a>
                                    <p class="b-desc-blog-4 ">
                                        '.$lists2['noidung'].'
                                    </p>
                                </div>
                    
                            </div>';

                    }

                ?>

                   
                    <!-- blog cóc hóng -->
                    <div class="blog-4">
                        <div class="head d-flex"
                            style="padding: 20px;border-bottom: 1px solid grey; padding-bottom: 0;">
                            <img src="https://ihe.fpt.edu.vn/upload/category/thumb_250x0/coc-hong-1601880461.png"
                                alt="Cóc hóng" style="width: 30px;height: 26px;">
                            <h3 style="text-transform: uppercase; color:#fff">Cóc hóng</h3>
                        </div>
                       
                        <?php
                            foreach($list_name as $lists)
                        {
                             echo '<div class="row item" style="width: 100%;">
                             <div class="row item-blog-4" style="margin-top: 15px; margin: 20px;">
                                 <div class="col-4" style="margin-right: 20px;">
                                     <a href="post-page.php?id='.$lists['id'].'">
                                         <img src="./img/'.$lists['hinhanh'].'"
                                         style="width:288px;height:213px;object-fit: cover;">
                                     </a>
                                 </div>
                                 <div class="col-7" style="padding: 20px;">
                                     <a href="post-page.php?id='.$lists['id'].'" class="b-link-blog-4">'.$lists['tenbaiviet'].'</a>
                                     <p class="b-desc-blog-4">'.$lists['noidung'].'</p>
                                 </div>
                             </div>
                         </div>';
                        }
                        ?>
                        
                    </div>

                     <!-- blog cóc biết -->   
                    <div class="blog-4">
                        <div class="head d-flex"
                            style="padding: 20px;border-bottom: 1px solid grey; padding-bottom: 0;">
                            <img src="https://ihe.fpt.edu.vn/upload/category/thumb_250x0/coc-hong-1601880461.png"
                                alt="Cóc biet" style="width: 30px;height: 26px;">
                            <h3 style="text-transform: uppercase; color:#fff">Cóc biết</h3>
                        </div>
                        <!-- item 1 -->
                        <?php
                            foreach($list_name3 as $lists3)
                        {
                             echo '<div class="row item" style="width: 100%;">
                             <div class="row item-blog-4" style="margin-top: 15px; margin: 20px;">
                                 <div class="col-4" style="margin-right: 20px;">
                                     <a href="post-page.php?id='.$lists3['id'].'">
                                         <img src="./img/'.$lists3['hinhanh'].'"
                                         style="width:288px;height:213px;object-fit: cover;">
                                     </a>
                                 </div>
                                 <div class="col-7" style="padding: 20px;">
                                     <a href="post-page.php?id='.$lists3['id'].'" class="b-link-blog-4">'.$lists3['tenbaiviet'].'</a>
                                     <p class="b-desc-blog-4">'.$lists3['noidung'].'</p>
                                 </div>
                             </div>
                         </div>';
                        }
                        ?>
                        
                    </div>
                    
                    <div class="row blog-5">
                        <div class="col-6">
                            <div class="head" style="padding:10px">
                                <img src="https://ihe.fpt.edu.vn/upload/category/original/phong-su-nha-coc-icons-1602155789.png"
                                    style="width:44px;height:44px">
                                <h4 style="display: inline-block;font-size: 28px;font-weight: bold;color: #121212;">
                                    Phóng sự nhà cóc</h4>
                            </div>
                            <img src="https://ihe.fpt.edu.vn/upload/news/thumb_378x260/dn-fpt-polytechnic-to-chuc-ngay-hoi-hien-mau-tinh-nguyen-1620271987.jpg"
                                style="width: 410px;height:270px;object-fit: cover;">
                            <a class="b-name-2">
                                ĐN – FPT Polytechnic tổ chức ngày hội hiến máu tình nguyện
                            </a>
                        </div>
                        <div class="col-6">
                            <div class="head" style="padding:10px">
                                <img src="https://ihe.fpt.edu.vn/upload/category/original/photostory-icons-1620355552.png"
                                    style="width:44px;height:44px">
                                <h4 style="display: inline-block;font-size: 28px;font-weight: bold;color: #121212;">
                                    Photostory</h4>
                            </div>
                            <img src="https://ihe.fpt.edu.vn/upload/news/thumb_378x260/dieu-alumni-tu-hao-khi-hoc-o-fptu-1628483724.png"
                                style="width: 410px;height:270px;object-fit: cover;">
                            <a class="b-name-2">
                                Điều Alumni tự hào khi học ở FPTU?
                            </a>
                        </div>
                    </div>
                </div>
                <!-- layout left -->
                <?php
                    require_once('sidebar-main-left.php')
                ?>
            </div>

            <!-- footer -->
                <?php
                    require_once('template/footer.php')
                ?>

  