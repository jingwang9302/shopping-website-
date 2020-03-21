<?php
$servername = "jingwang323266739.ipagemysql.com";
$dbname = "tracey_cmpe272";
$username = "cmpe272";
$password = "Ziyi123%";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$em = $_POST['email'];
$pw = $_POST['password'];

$sql = $conn->prepare("SELECT user, pass FROM admin where user= '$em'");
$sql->execute(array($em, $pw));

$row = $sql->fetch(PDO::FETCH_ASSOC);

if ($em != null && $pw != null && $row['user'] == 'admin@admin.com' && $row['pass'] == 'admin') {
    header("Location: ../secureSection.php");
} else {
    header("Location: ../admin.php?error=failed");
}
?>