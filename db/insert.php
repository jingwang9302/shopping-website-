<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into department(dname, dnumber, mgrssn, mgrstartdate) values ('ClientServe1', 123,555555501, 1981/09/13);";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
 
	echo 'added!';

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>