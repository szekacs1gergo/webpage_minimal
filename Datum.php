<h1>Dátum</h1>
<?php


date_default_timezone_set("Europe/Budapest");
print date("Y.m.d");
print "<br>";
print time();
$napnev= array("","hétfő","kedd","szerda","csütörtök","péntek","szombat","vasárnap");
$s=date("N" ,time()+24*60*60);
print "<br>";
print "Holnap ".$napnev[$s];

?>