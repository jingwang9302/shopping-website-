<?php 

$host = "jingwang323266739.ipagemysql.com";
$username = "cmpe272";
$pass = "Ziyi123%";

$db= new mysqli($host,$username,$pass,"tracey_cmpe272");
if($db->connect_error)
{
    echo "ERROR: (".$db->connect_errno.") ".$db->connect_error;
    exit();
}
?> 