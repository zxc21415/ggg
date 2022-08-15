<?php



function loca_url($x1,$x2){ 
    $url = "https://www.google.com.tw/maps/place/".$x1.",".$x2;
    return $url;
}

$html = file_get_contents(loca_url($_GET['x1'],$_GET['x2']));
$html_text = htmlentities($html);
$htmlOneLine = preg_replace("/\r|\n|\t/","",$html_text);

$res = preg_split("/meta content=/",$htmlOneLine);
$res2 = preg_split('/"/',$res[14]);
$location = $res2[0];

echo $_GET['x1']."<br>";
echo $_GET['x2']."<br>";
print_r($res2[0]) ;

?>