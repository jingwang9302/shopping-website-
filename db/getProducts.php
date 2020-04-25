<?php
include("mysql_connect.inc.php");
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM product_list"); 
    $stmt->execute();
    $res = array();
    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
        $res[] = array('productName' => $row['productName'], 'price' => $row['price'], 'id' => $row['id']);
    }
    header('Content-Type: application/json');
    echo json_encode($res);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>