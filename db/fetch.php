<?php
session_start();
$servername = "jingwang323266739.ipagemysql.com";
$username = "cmpe272";
$password = "Ziyi123%";
$dbname = "tracey_cmpe272";


//if (!isset($_SESSION['username'])){
    //echo 'No right to access!';
    //echo '<meta http-equiv=REFRESH CONTENT=3;url=../index.html>';
//}else{
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM user_list"); 
        $stmt->execute();
        echo '<br>';
        echo '<h1>These are all the members:</h1>';

        $email = array();
        $firstname = array();
        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
            echo '<b>Firstname: </b>'.$row['Firstname'].'&nbsp'.'&nbsp'.'&nbsp';
            echo '<b>Lastname: </b>'.$row['Lastname'].'&nbsp'.'&nbsp'.'&nbsp';
            echo '<b>Email: </b>'.$row['Email'].'&nbsp'.'&nbsp'.'&nbsp';
            echo '<b>Password: </b>'.$row['Password'].'<hr>';
        }
        ?>
        <?php unset($_SESSION["username"]);?>
        <a href="../index.html">Go back</a>
        <?php

    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
//}
?>