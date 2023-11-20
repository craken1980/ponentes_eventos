<?php
$url=$_SERVER ["REQUEST_URI"];
$request_file="/var/www/html/controllers".strtolower($url).".php"; 
$ruta_actual = __DIR__;
if(file_exists($request_file)){
	require $request_file;
}

?>
