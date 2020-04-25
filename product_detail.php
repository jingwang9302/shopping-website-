<?php
if (!empty($_COOKIE['history'])) {
    $history = explode(',', $_COOKIE['history']);
    array_unshift($history, $_GET["productName"]);
    $history = array_unique($history);
    while (count($history) > 5) {
        array_pop($history);
    }
    setcookie('history', implode(',', $history), time() + 60 * 60 * 24 * 7);
} else {
    setcookie("history", $_GET["productName"], time() + 60 * 60 * 24 * 7);
}

?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
    $title = "Product Detail";
    include("./components/head.php");
    $productName = $_GET["productName"];
    $id = $_GET["id"];
    $price = $_GET["price"];
    ?>
    <style>
        #product-section {
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <?php include("./components/header.php"); ?>
    <div class="container" id="product-section">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src=<?php echo "img/products/img-" . $id . ".jpg" ?> class="image-responsive" />
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php echo $productName ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php echo $price ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <?php include("./components/scripts.html"); ?>
</body>

</html>