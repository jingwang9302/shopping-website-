<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$servername = "jingwang323266739.ipagemysql.com";
$username = "cmpe272";
$password = "Ziyi123%";
$dbname = "tracey_cmpe272";


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
