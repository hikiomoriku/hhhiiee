<?php
$sp=fsockopen("heel.net.ua", 80, $error_code,$error_msg) or die($error_code.": ".$error_msg);
# запрос страницы idex.php
fputs($sp,"GET /index.php HTTP/1.1\r\n");
# получение ответа
while (!feof($sp)) echo fgets($sp,1024);
fclose($sp);                                                          
?>