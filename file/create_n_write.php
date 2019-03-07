<?php
$myfile = fopen("write.txt", "w") or die("Unable to open file!");
$txt = "arsybai\n";
fwrite($myfile, $txt);
$txt = "trisna\n";
fwrite($myfile, $txt);
fclose($myfile);
?>