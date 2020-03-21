<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
    $title = "About";
    include("./components/head.php");
    ?>
</head>

<body>
    <?php include("./components/header.php"); ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/slider-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/slider-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/slider-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">About us</h1>
            <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts
                with this example based on Apple’s marketing pages.</p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <?php include("./components/scripts.html"); ?>
</body>

</html>