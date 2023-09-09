<?php
$servername = "localhost:3306";
$username = "root";
$password = "Lzx@0704";
$dbname = "farm";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 


$q = $_GET["q"];


$data = explode(',',$q);
$ddate = $data[0].'-'.$data[1].'-'.$data[2];
$temp = $data[3];
$humidy = $data[4];
$press = $data[5];
$pm25 = $data[6];
$ferti = $data[7];
$pesti = $data[8];
$grade = $data[9];



echo "Your report has been generated.<br><br><br><br><br>";
$table="<table border='1' align='center'  style='line-height: 40px; font-size: 18px;'  width='800'>";{
    $table.="<tr align='center'>";
        $table.="<td colspan='3' bgcolor='#FAFAD2'><h3> Your Farm Report </h3></td>";
    $table.="</tr>";
    $table.="<tr align='center'>";
        $table.="<td colspan='3' bgcolor='#d1ead1'><b> Basic Farm Information </b></td>";
    $table.="</tr>";
    $table.="<tr align='center'>";
        $table.="<td bgcolor='#FAFAD2'><b>Farm Name</b></td>";
        $table.="<td bgcolor='#FAFAD2'><b>State</b></td>";
        $table.="<td bgcolor='#FAFAD2'><b>Date and Time</b></td>";
    $table.="</tr>";
    $table.="<tr align='center'>";
        $table.="<td bgcolor='#FAFAD2'>Intelligence Farm</td>";
        $table.="<td bgcolor='#FAFAD2'>Good</td>";
        $datetime=$ddate."  00:00:00 - 23:59:59";
        $table.="<td bgcolor='#FAFAD2'>$datetime</td>";
    $table.="</tr>";

    $table.="<tr align='center'>";
        $table.="<td  colspan='3' bgcolor='#d1ead1' ><b>Average Data from Detector</b></td>";      
    $table.="</tr>";

    if($temp == '1'){
        $table.="<tr align='center'>";
        $sql1 = "SELECT t from t_temperature WHERE ddatetime = '$ddate'";
        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_row($result1);
        $tem1 = $row1[0];
        $table.="<td bgcolor='#FAFAD2'>Temperature (Celsius)</td>";
        $table.="<td colspan='2' bgcolor='#FAFAD2'>$tem1</td>";
        $table.="</tr>";
    }

    if($humidy == '1'){
        $table.="<tr align='center'>";
        $sql1 = "SELECT h from t_humidity WHERE ddatetime = '$ddate'";
        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_row($result1);
        $tem1 = $row1[0];
        $table.="<td bgcolor='#FAFAD2'>Humidity</td>";
        $table.="<td colspan='2' bgcolor='#FAFAD2'>$tem1</td>";
        $table.="</tr>";
    }

    if($press == '1'){
        $table.="<tr align='center'>";
        $sql1 = "SELECT p from t_pressure WHERE ddatetime = '$ddate'";
        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_row($result1);
        $tem1 = $row1[0];
        $table.="<td bgcolor='#FAFAD2'>Pressure</td>";
        $table.="<td colspan='2' bgcolor='#FAFAD2'>$tem1</td>";
        $table.="</tr>";
    }

    if($pm25 == '1'){
        $table.="<tr align='center'>";
        $sql1 = "SELECT pm from t_pm25 WHERE ddatetime = '$ddate'";
        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_row($result1);
        $tem1 = $row1[0];
        $table.="<td bgcolor='#FAFAD2'>PM2.5</td>";
        $table.="<td colspan='2' bgcolor='#FAFAD2'>$tem1</td>";
        $table.="</tr>";
    }

    if($ferti == '1'){
        $table.="<tr align='center'>";
        $sql1 = "SELECT fertAmount from t_fertilizer WHERE ddatetime = '$ddate'";
        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_row($result1);
        $tem1 = $row1[0];
        $table.="<td bgcolor='#FAFAD2'>Fertilizer Amount</td>";
        $table.="<td colspan='2' bgcolor='#FAFAD2'>$tem1</td>";
        $table.="</tr>";
    }

    if($pesti == '1'){
        $table.="<tr align='center'>";
        $sql1 = "SELECT pesticide from t_pesticide WHERE ddatetime = '$ddate'";
        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_row($result1);
        $tem1 = $row1[0];
        $table.="<td bgcolor='#FAFAD2'>Pesticide Amount</td>";
        $table.="<td colspan='2' bgcolor='#FAFAD2'>$tem1</td>";
        $table.="</tr>";
    }

    if($grade == '1'){
        $table.="<tr align='center'>";
        $sql1 = "SELECT grade from t_grade WHERE ddatetime = '$ddate'";
        $result1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_row($result1);
        $tem1 = $row1[0];
        $table.="<td bgcolor='#FAFAD2'>Grade</td>";
        $table.="<td colspan='2' bgcolor='#FAFAD2'>$tem1</td>";
        $table.="</tr>";
    }
    $table.="<tr align='center'>";
        $table.="<td colspan='3' bgcolor='#d1ead1'><b>Certification Agency</b></td>";
    $table.="</tr>";
    $table.="<tr align='center'>";
        $table.="<td colspan='3' bgcolor='#FAFAD2'>www.intelligentfarm.com</td>";
    $table.="</tr>";
}

echo $table;

mysqli_close($conn);

?>

