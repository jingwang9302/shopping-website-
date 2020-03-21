
<?php
include("mysql_connect.inc.php");

$em = $_POST['email'];
$pw = $_POST['password'];
$pw2 = $_POST['password2'];
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($em != null && $pw != null && $pw2 != null && $pw == $pw2 && $fn != null && $ln != null)
{
        $sql = $conn ->prepare("SELECT FirstName, LastName, Email, Password FROM user_list WHERE Email = '$em'");
        $sql -> execute(array($em,$pw));
        $row = $sql -> fetch(PDO::FETCH_ASSOC);

        if ($row['Email'] == $em or $row['FirstName'] == $fn or $row['LastName'] == $ln){
                echo 'user already exist!';
                echo '<meta http-equiv=REFRESH CONTENT=5;url=register.html>';
        }
        else{
                        //新增資料進資料庫語法
                        $sql1 = "insert into user_list (FirstName, LastName, Email, Password) values ('$fn', '$ln', '$em','$pw')";
                        $stmt = $conn->prepare($sql1); 
                        $stmt->execute();
                        if($sql1)
                        {
                                echo 'Account Created!';
                                echo '<meta http-equiv=REFRESH CONTENT=2;url=../index.php>';
                        }
                        else
                        {
                                echo 'Update failed!';
                                echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
                        }
                }
        }
}
else
{
        echo 'No right to visit this page!';
        echo '<meta http-equiv=REFRESH CONTENT=5;url=register.html>';
}
?>