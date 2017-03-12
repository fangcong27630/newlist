<?php
header('Access-Control-Allow-Origin:*');
$type = $_GET['type'];
$callback = $_GET['callback'];
$url = "http://v.juhe.cn/toutiao/index?type=".$_GET['type']."&key=506215dbc2302fb8b6a8aa5b4cb605eb";
$ret = file_get_contents($url); 
echo $callback."(".json_encode($ret).")";
?>
