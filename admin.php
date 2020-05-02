<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
    $title = "Admin Login";
    include("./components/head.php");
    ?>
    <link rel="stylesheet" href="css/admin.css" type="text/css">
</head>

<body>
    <?php include("./components/header.php"); ?>
    <div class="outerContainer">
        <div class="innerContainer">
            <?php
            if (isset($_GET['error']) && $_GET['error'] == "failed") {
                echo '<div class="alert alert-danger" role="alert">
                Login Failed
              </div>';
            }
            ?>
            <div id="adminLogin">
                <h3 class="formHeader">Admin Login</h3>
                <form action="./admin/adminLogin.php" class="contact-form" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                            <input name="email" type="email" autocomplete="off" placeholder="Email">
                            <input name="password" type="password" autocomplete="off" placeholder="Password">
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>

            <div id="userLogin" style="display: none">
                <h3 class="formHeader">User Login</h3>
                <form action="./public/userLogin.php" class="contact-form" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                            <input name="email" type="email" autocomplete="off" placeholder="Email">
                            <input name="password" type="password" autocomplete="off" placeholder="Password">
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="toggleLogin">
                <div class="toggleButton" id="adminLoginButton">Admin Login</div>
                <div class="toggleButton" id='userLoginButton'>User Login</div>
            </div>
        </div>
    </div>
    <?php include("./components/scripts.html"); ?>

    <script>
        document.getElementById("adminLoginButton").addEventListener("click", function() {
            document.getElementById("adminLogin").style.display = "block";
            document.getElementById("userLogin").style.display = "none";
        });
        document.getElementById("userLoginButton").addEventListener("click", function() {
            document.getElementById("adminLogin").style.display = "none";
            document.getElementById("userLogin").style.display = "block";
        });
    </script>
</body>

</html>