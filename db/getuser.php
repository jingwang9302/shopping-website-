<?php
include("mysql_connect.inc.php");

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
        $email = array();
        $firstname = array();
        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
            echo '<li class="list-group-item list-group-item-info">'.$row['FirstName']. " " .$row['LastName']. ", Email: " .$row["Email"]. ", Phone: " .$row["cell_phone"]. '</li>';
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
//}
