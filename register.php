<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
    $title = "Register";
    include("./components/head.php");
    ?>
    <link rel="stylesheet" href="css/register.css" type="text/css">
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
            <h3 class="formHeader">Register</h3>
            <form action="./db/register_finish.php" class="contact-form" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <input type="input" id="firstName" name="firstname" autocomplete="off" placeholder="First Name" size="50" required autofocus>
                        <input type="input" id="lastName" name="lastname" autocomplete="off" placeholder="Last Name" size="50" required>
                        <input name="email" type="email" autocomplete="off" placeholder="Email">
                        <input type="password" name="password" autocomplete="off" id="inputPassword" placeholder="Password" size="50" required>
                        <input type="password" name="password2" autocomplete="off" id="inputPassword" placeholder="Please type in password again" size="50" required>
                        <input type="input" id="address" name="address" autocomplete="off" placeholder="Address" size="50">
                        <input type="input" id="homePhone" name="homePhone" autocomplete="off" placeholder="Home Phone" size="50">
                        <input type="input" id="cellPhone" name="cellPhone" autocomplete="off" placeholder="Cell Phone" size="50">
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
            <a href="./searchUser.php">
                <button class="btn">Search User</button>
            </a>
        </div>
    </div>
    <?php include("./components/scripts.html"); ?>
</body>

</html>