<?php
echo date (' h:i:s A');
$testout = "mytest.html";
$fhtestout = fopen($testout, 'w') or die("cant open file");
fwrite($fhtestout,"I did it");
close($fhtestout); 


?>