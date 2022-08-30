<?php
  $f = fopen("textfile.txt", "a+");
  fwrite($f, $_POST["name"]."\r\n".$_POST["title"]."\r\n".$_POST["mess"]."\r\n");
  fwrite($f, "-------------------"."\r\n");
  fclose($f);
  header("Location: index.php");
?>