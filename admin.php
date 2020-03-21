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
    </div>
    <?php include("./components/scripts.html"); ?>
</body>

</html>