<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title><?php

 if(isset($_GET['p'])) $p=$_GET['p']; else $p="";
if($p=="") $cim="Kezdőlap";else
if($p=="Tablazat")$cim="Táblázat";else
if($p=="Datum") $cim="Datum";else
if($p=="GYIK") $cim="GYIK";else
if($p=="Naptar") $cim="Naptar";else
if($p=="Szolgaltatasok") $cim="Szolgáltatások";else
$cim="A kért oldal nem található";
 print $cim;
 ?>
</title>
</head>

<body>

<div id='fejlec'>
Menüs weboldal
</div>

<div id='menu'>
<a href="./">                 Kezdőlap</a>
<a href="./?p=Tablazat">	  Táblázat</a>
<a href="./?p=Datum">        Dátum</a>
<a href="./?p=Szolgaltatasok"> Szolgáltatások</a>
<a href="./?p=GYIK">          GYIK</a>
<a href="./?p=Naptar">       Naptar</a>
</div>

<div id='tartalom'>
<?php
if(isset($_GET['p'])) $p=$_GET['p']; else $p="";
if($p=="") include("Kezdolap.php");else
if($p=="Szolgaltatasok")include("szolgaltatasok.php");else
if($p=="Datum") include("Datum.php");else
if($p=="Tablazat") include("Tablazat.php");else
if($p=="GYIK") print "<h1>Gyakran ismételt kérdések</h1>";else
if($p=="Naptar") include("Naptar.php");else
print "<h1>A kért oldal nem található</h1>"


?>
</div>
<hr>
<?php
date_default_timezone_set("Europe/Budapest");
$fajlnev=date("Y_m_d") . ".txt";

if(!file_exists($fajlnev))  
{
	$fp=fopen($fajlnev, "w");
	fwrite($fp, "0");
	fclose($fp);
	unset($_SESSION['foci']);
}

$fp=fopen($fajlnev, "r");
$n=fread($fp,filesize($fajlnev));
fclose($fp);

if(!isset($_SESSION['foci']))
{
	$n++;
	$_SESSION['foci']="alma";
	$fp=fopen($fajlnev, "w");
	fwrite($fp, $n);
	fclose($fp);
}


print"Ma $n. látogató volt ezen az oldalon.";
print"<hr>" . session_id();






?>
</body>

</html>
