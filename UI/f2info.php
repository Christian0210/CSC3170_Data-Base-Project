<?php

$q = $_GET["q"];




echo "Your chart has been generated.<br><br><br><br><br>";

if($q==0){
    echo "<font size = 5>Scatter Diagram</font><br>";
    echo "<img src = img/f2/temp_date.PNG width=1050 height=490 /><br><br><br><br><br>";
    echo "<font size = 5>Heat Map</font><br>";
    echo "<img src= img/f3/temp_on_grade.PNG width= 1050 height= 530 /><br>";
}
if($q==1){
    echo "<font size = 5>Scatter Diagram</font><br>";
    echo "<img src = img/f2/humidity_date.PNG width=1050 height=490 /><br><br><br><br><br>";
    echo "<font size = 5>Heat Map</font><br>";
    echo "<img src= img/f3/humidity_on_grade.PNG width= 1050 height= 530 /><br>";
}
if($q==2){
    echo "<font size = 5>Scatter Diagram</font><br>";
    echo "<img src = img/f2/pressure_date.PNG width=1050 height=490 /><br><br><br><br><br>";
    echo "<font size = 5>Heat Map</font><br>";
    echo "<img src= img/f3/pressure_on_grade.PNG width= 1050 height= 530 /><br>";
}
if($q==3){
    echo "<font size = 5>Scatter Diagram</font><br>";
    echo "<img src = img/f2/pm25_date.PNG width=1050 height=490 /><br><br><br><br><br>";
    echo "<font size = 5>Heat Map</font><br>";
    echo "<img src= img/f3/pm25_on_grade.PNG width= 1050 height= 530 /><br>";
}
if($q==4){
    echo "<font size = 5>Scatter Diagram</font><br>";
    echo "<img src = img/f2/fert_date.PNG width=1050 height=490 /><br><br><br><br><br>";
    echo "<font size = 5>Heat Map</font><br>";
    echo "<img src= img/f3/fert_on_grade.PNG width= 1050 height= 530 /><br>";
}
if($q==5){
    echo "<img src = img/f2/pest_date.PNG width=1050 height=490 /><br><br><br><br><br>";
    echo "<img src= img/f3/pesti_on_grade.PNG width= 1050 height= 530 /><br>";
}
if($q==6){
    echo "<font size = 5>Scatter Diagram</font><br>";
    echo "<img src = img/f2/grade_date.PNG width=1050 height=490 /><br><br><br><br><br>";
    echo "<font size = 5>Heat Map</font><br>";
    echo "<img src= img/f3/date_on_grade.PNG width= 1050 height= 530 /><br>";
}

?>
