<?php

include("mysql_connect.inc.php");

$ln = $_POST['lname'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM user_list where LastName = '$ln'"); 
    $stmt->execute();
    echo '<br>';
    $email = array();
    $firstname = array();
    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
        echo '<li class="list-group-item list-group-item-info">'.$row['FirstName']. " " .$row['LastName'].'</li>';
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>