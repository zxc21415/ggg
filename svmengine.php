<?php
//需要的參數
//Kernel K(…)的gamma
//Support vetors 與 alpha(i)
//b
//support vectors所對應的label(yi)
//單次算式1: -gamma*($x_new1-$SV[0,0](每個點))^2 + ($x_new2-$SV[0,1](每個點))^2
//單次算式2: alpha*exp(單次算式1)
//再加總算式2

$user_gamma=$_GET['gamma'];
$x=$_GET['x'];



/* Defining a PHP Function */
function rbfDecision($gamma, $x_new)
{
    $gamma = 2.0;
    $alpha = [-1.00959861, -1.01027863, -1.01065641, -1.01029326, -0.99151463, 0.98910983, 1.02447978, 1.02567654, 1.02706514, 0.96601024];
    $b = -0.00844928;
    $support_vactor = [[2.1, 2.1], [2.2, -2.2], [-2.3, 2.3], [-2.4, -2.4], [8., 8.], [1.1, 1.1], [1.2, -1.2], [-1.3, 1.3], [-1.4, -1.4], [0.2, 0.2]];
    $total = 0;
    $indx1 = [5, 6, 7, 8, 9, 0, 1, 2, 3, 4];
    foreach ($i as $indx1) {
        //單次算式1: -gamma*($x_new1-$SV[0,0](每個點))^2 + ($x_new2-$SV[0,1](每個點))^2
        $expart = exp(-$gamma * (pow(($x_new - $support_vactor[$i][0]), 2) + pow(($x_new - $support_vactor[$i][1]), 2)));
        //單次算式2:加總(alpha*exp(單次算式1)) 
        $total = $total + $alpha[$i] * $expart;
    }

    $value = $total + $b;
    return  $value;
}


echo(rbfDecision($user_gamma,$x));
