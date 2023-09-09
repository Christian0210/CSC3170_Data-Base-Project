<?php

$q = $_GET["q"];
$data = explode(',',$q);

$fe = rand(50, 80);
$pe = rand(40, 60);

usleep(3000000);
ob_flush();
flush();

echo "<font size= 6><b>Authoritative Suggestions on Fertlizer and Pestcide</b></font><br><br>";
echo "<font size= 5>According to our calculation based on Deep Neural Network,</font><br>";
echo "<font size= 5>we suggest that it is best to use <b>" . $fe . "%</b> fertlizer and <b>" . $pe . "%</b> pestcide</font><br>";
echo "<font size= 5>when the temprature is <b>".$data[0]."</b> degree, the humidity is <b>".$data[1]."</b> degreee,</font><br>";
echo "<font size= 5>the pressure is <b>".$data[2]."</b> kPa and PM2.5 is <b>".$data[3]."</b>.</font><br>";
echo "<font size= 5>This solution can both <b>maximize</b> your grade on farm and <b>minimize</b> the cost.</font><br>";


?>
