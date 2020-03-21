<?php

include("mysql_connect.inc.php");

$em = $_POST['email'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM user_list where Email = '$em'"); 
    $stmt->execute();
    echo '<br>';
    echo '<h1>Users:</h1>';
    $email = array();
    $firstname = array();
    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
        echo '<b>First name: </b>'.$row['FirstName'].'&nbsp'.'&nbsp'.'&nbsp';
        echo '<b>Last name: </b>'.$row['LastName'].'&nbsp'.'&nbsp'.'&nbsp';
        echo '<br>';
    }
    ?>
    <a href="../index.php">Go back</a>
    <?php
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>