<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
    $title = "Search User";
    include("./components/head.php");
    ?>
    <link rel="stylesheet" href="css/searchUser.css" type="text/css">
</head>

<body>
    <?php include("./components/header.php"); ?>
    <div class="outerContainer">
        <div class="innerContainer">
            <h3 class="form_title">User Search Engine</h3>
            <form class="searchForm">
                <input id="searchValue" class="form-control" type="search" placeholder="Search">
                <button class="btn btn-outline-success" id="searchButton" type="submit">Search</button>
                <button class="btn btn-outline-success" id="searchAllButton" type="submit">All User</button>
                <div class="radioContainer">
                    <input class="searchBy" type="radio" name="searchBy" value="lastname">
                    <label for="name">Name</label>
                    <input class="searchBy" type="radio" name="searchBy" value="email">
                    <label for="email">Email</label>
                    <input class="searchBy" type="radio" name="searchBy" value="phone">
                    <label for="phone">Phone number</label>
                </div>
            </form>
            <ul class="list-group" id="result">
        </div>
    </div>
    <?php include("./components/scripts.html"); ?>
    <script>
        var button = document.querySelector("#searchButton");
        var success = function(data) {
                $("#result").html(data);
            }
        button.addEventListener("click", function(event) {
            event.preventDefault();
            var searchByRadios = document.querySelectorAll(".searchBy");
            var searchType = "";
            var url = "./db/";
            for (var i = 0; i < searchByRadios.length; i++) {
                if (searchByRadios[i].checked) {
                    searchType = searchByRadios[i].value;
                    url += searchByRadios[i].value + "_search.php";
                }
            }
            var mapping = {
                "lastname": "lname",
                "email": "email",
                "phone": "cell_phone"
            }
            var searchValue = document.querySelector("#searchValue").value;
            var data = {};
            data[mapping[searchType]] = searchValue;
            $.ajax({
                type: "POST",
                url: url,
                data: data,
                success: success,
            });
        });
        var searchAllButton = document.querySelector("#searchAllButton");
        searchAllButton.addEventListener("click", function(event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "./db/getuser.php",
                success: success,
            });
        });
    </script>
</body>

</html>