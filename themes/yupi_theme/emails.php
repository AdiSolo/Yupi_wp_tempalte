<?php

$myFile = "a43sk.txt";
$fh = fopen($myFile, 'a') or die("Scuze , a survenit o eroare , incearca mai tirziu.");
$stringData = $_POST["m"]. " , ";
fwrite($fh, $stringData);
fclose($fh);
echo "Iti multumim pentru abonare. Vei primi saptaminal cele mai tari posturi pe email-ul indicat."; ?>
<div><a href="javascript: history.go(-1)">&lt;&lt; Inapoi</a> </div>
