<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
    $title = "Product";
    include("./components/head.php");
    ?>
    <style>
        #resultContainer {
            top: 300px;
            left: 20px;
            position: fixed;
            width: 300px;
        }

        #showHistory {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include("./components/header.php"); ?>

    <!-- Related Product Section Begin -->
    <section class="related-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Products</h2>
                    </div>
                </div>
            </div>
            <div class="row" id="productGridList"></div>
            <div id="resultContainer">
                <div id="showHistory">Click to view history</div>
                <ul class="list-group" id="result"></ul>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

    <?php include("./components/scripts.html"); ?>
    <script>
        var historyShow = false;
        document.getElementById("showHistory").addEventListener("click", function() {
            document.getElementById("result").innerHTML = "";
            var hint = document.getElementById("showHistory");
            hint.innerHTML = "Click to view history";
            if (!historyShow) {
                var success = function(data) {
                    $("#result").html(data);
                }
                $.ajax({
                    type: "GET",
                    url: "./cookie.php",
                    success: success,
                });
                hint.innerHTML = "Click to hide history";
            }
            historyShow = !historyShow;
        });

        $.get("./db/getProducts.php", function(data) {
            data = data.split("/>")[1];
            var data = JSON.parse(data);
            var row = document.querySelector("#productGridList");
            data.forEach(function(product) {
                createProductPoster(row, product);
            });
        });


        function createProductPoster(node, params) {
            params = params || {};
            var name = params.productName;
            var price = params.price;
            var id = params.id;
            var outerContainer = document.createElement("div");
            outerContainer.setAttribute("class", "col-lg-3 col-sm-6");
            var innerContainer = document.createElement("div");
            innerContainer.setAttribute("class", "single-product-item");
            outerContainer.appendChild(innerContainer);
            var figure = document.createElement("figure");
            innerContainer.appendChild(figure);
            var img = document.createElement("img");
            img.src = "img/products/img-" + id + ".jpg";
            var link = document.createElement("a");
            var url = "./product_detail.php?";
            url += "productName=" + name + "&";
            url += "price=" + price + "&";
            url += "id=" + id;
            link.setAttribute("href", url);
            link.appendChild(img);
            figure.appendChild(link);
            var productDetail = document.createElement("div");
            productDetail.setAttribute("class", "product-text");
            innerContainer.appendChild(productDetail);
            var productName = document.createElement("h6");
            productName.innerHTML = name;
            productDetail.appendChild(productName);
            var productPrice = document.createElement("p");
            productDetail.appendChild(productPrice);
            productPrice.innerHTML = price;
            node.appendChild(outerContainer);
        }
    </script>
</body>

</html>