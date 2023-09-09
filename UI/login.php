<?php

$servername = "localhost:3306";
$username = "root";
$password = "123456";
$dbname = "farm";
echo "here1";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$user = $_POST['uname'];
$psw = $_POST["pwd"];
echo $user;
echo $psw;
// $sql = "SELECT count(*) from sys_user where sys_user.username = '".$user"' and sys_user.password = '".$psw"'";
$sql = "SELECT count(*) from sys_user
        where username = '$user' and password = '$psw'";

$result = mysqli_query($conn,$sql);

if(!$result)
    {
        echo "数据查询失败！";
        exit;
    }
$row = mysqli_fetch_row($result);
$count = $row[0];


if($count >0 )
{
    $_SESSION['loggedin']=1;
    header("Location:index2.html");
    exit;
}
else{
    header("Location:index.html");
}



$conn->close();

?>

