<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$em = $_POST['email'];
$sb = $_POST['subject'];


// table: mess 


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($fn != null && $ln != null && $em != null)
{

    //新增資料進資料庫語法
    $sql = "insert into mess (firstname, lastname, email, subject) values ('$fn', '$ln', '$em', '$sb')";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    if($sql)
        {
            echo 'Message Sent!';
            echo '<meta http-equiv=REFRESH CONTENT=3;url=../index.html>';
        }
    else
        {
            echo 'Message failed!';
            echo '<meta http-equiv=REFRESH CONTENT=3;url=../index.html>';
        }
}
else
{
        echo 'No right to visit this page!';
        echo '<meta http-equiv=REFRESH CONTENT=3;url=../index.html>';
}
?>