<?php
$sp=fsockopen("google.com", 80, $error_code,$error_msg) or die($error_code.": ".$error_msg);
# запрос страницы idex.php
fputs($sp,"GET / HTTP/1.1\r\n\r\n");
# получение ответа
while (!feof($sp)) echo fgets($sp,1024);
fclose($sp);                                                          