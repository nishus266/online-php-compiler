<?php
$code=$_POST['text'];
$f=fopen("main.php","w+");
fwrite($f,$code);
fclose();
$g=fopen("main.txt","w+");
fwrite($g,$code);
fclose();
 header('Location:http://www.praan.epizy.com/complier.php');

    exit();
?>