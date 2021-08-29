<?php
if(isset($_GET["id"]) && !empty(trim($_GET["id"])))
{
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'btl_web_fpt');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_set_charset($link, 'UTF8');

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

    $sql = "SELECT * FROM baiviet WHERE id  = ?";
    if($stmt = mysqli_prepare($link, $sql))
    {
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        $param_id = trim($_GET["id"]);
        if(mysqli_stmt_execute($stmt))
        {
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) == 1)
            {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $ten = $row["tenbaiviet"];
                $mota = $row["noidung"];
                $anh = $row["hinhanh"];
            }
            else
            {
               
                exit();
            }
        }
        else
        {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
}
else
{
    
    exit();
}
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
    <link rel="stylesheet" href="css/postpage.css">
    <link rel="shortcut icon" href="https://ihe.fpt.edu.vn/upload/config/original/trang-chu-favicon-1620353748.png" type="image/x-icon">
    <title>Trang tin tức FPT</title>
</head>

<body>
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
                <!-- head -->
                <section class="cat-head">
                    <img style="filter: brightness(0);" src="https://ihe.fpt.edu.vn/upload/category/original/coc-hong-icons-1601702447.png" alt="Cóc hóng">          
                    <span>Cóc hóng </span>
                </section>
                <!-- heading -->
                <div class="container-post" >
                    <h2 class="post-name">
                    <?php echo $ten; ?>
                    </h2>
                    <img style="display: block; margin-left: auto; margin-right: auto;" 
                    src="./img/<?php echo $anh; ?>" width="650">
                    <p style="text-align: justify; padding-top: 20px;">
                    <?php echo $mota; ?>
                    </p>
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