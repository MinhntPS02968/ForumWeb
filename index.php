<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
    <title>Forum</title>
</head>
<body>
<?php
include 'header.php';
?>
<div id="carouselExampleControls" class="carousel slide mt-5 pt-5" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="#">
                <img class="d-block w-100" src="img/silde-01.png" alt="First slide">
                <div class="carousel-caption d-none d-sm-block text-left text-dark">
                    <p>Chào Mừng đến với</p>
                    <h2>Website <span class="text-danger">Người Thăng Uy</span></h2>
                    <p class="text-justify">Nơi chúng ta giao lưu học hỏi nâng cao hiêu quả công việc, cải thiện tư duy, thắt chặc mối quan hệt</p>
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <a href="#"><img class="d-block w-100" src="img/slide-02.png" alt="Second slide"></a>
            <div class="carousel-caption d-none d-sm-block text-left text-dark">
                <p>Chào Mừng đến với</p>
                <h2>Website <span class="text-danger">Người Thăng Uy</span></h2>
                <p class="text-justify">Nơi chúng ta giao lưu học hỏi nâng cao hiêu quả công việc, cải thiện tư duy, thắt chặc mối quan hệt</p>
            </div>
        </div>
        <div class="carousel-item">
            <a href="#">
                <img class="d-block w-100" src="img/silde-01.png" alt="First slide">
                <div class="carousel-caption d-none d-sm-block text-left text-dark">
                    <p>Chào Mừng đến với</p>
                    <h2>Website <span class="text-danger">Người Thăng Uy</span></h2>
                    <p class="text-justify">Nơi chúng ta giao lưu học hỏi nâng cao hiêu quả công việc, cải thiện tư duy, thắt chặc mối quan hệt</p>
                </div>
            </a>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php include_once "footer.php"; ?>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>