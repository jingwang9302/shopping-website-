<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$em = $_POST['email'];
$pw = $_POST['password'];

//搜尋資料庫資料
$sql = $conn ->prepare("SELECT user, pass FROM admin where user= '$em'");
$sql -> execute(array($em,$pw));

$row = $sql -> fetch(PDO::FETCH_ASSOC);



//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($em != null && $pw != null && $row['user'] == 'root' && $row['pass'] == 'root')
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $em;
        echo 'Log in success!';
        echo '<br>Welcome back'.'&nbsp'.$em;
        echo '<meta http-equiv=REFRESH CONTENT=2;url=./fetch.php>';

}
else
{
        echo 'Log in failed!';
        echo '<meta http-equiv=REFRESH CONTENT=5;url=../index.html>';
}
?>