<?php
// 接收表單傳過來的輸入
$x1=$_GET['x1'];
$x2=$_GET['x2'];
$x3=$_GET['x3'];
//設定係數(2)
$a1=1.5;
$a2=-2.3;
$a3=8.1;
$b=200;
//式子(3)
$y=$a1*$x1+$a2*$x2+$a3*$x3+$b;
//(2)+(3)=所謂的model
//呈現=輸出
echo "輸入的x1: ",$_GET['x1'],"<br>輸入的x2: ",$_GET['x2'],"<br>輸入的x3: ",$_GET['x3'];
echo "<br>經過AI預測後，所得到的Y為: ".$y
?>

