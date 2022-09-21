<h1>Naptár</h1>

<table border=2>
<tr>
<?php

		date_default_timezone_set("Europe/Budapest");
		$napnev= array("","hétfő","kedd","szerda","csütörtök","péntek","szombat","vasárnap");
		$s=date("N");
		print "Ma a hét " .$s. ". napja";
		print "<br>";
		print "Hétfő: ". date("Y.m.d" , time()-($s-1)*24*60*60)."<hr>";
		
		if(isset($_GET['het'])) $het=$_GET['het'];
		else $het=0;
		
		$hetfo= time()-($s-1)*24*60*60+ $het *7*24*60*60;
		//datumozas:
		// 2héttel később:time()+ 2*7*24*60*60;
		for($i=0;$i<=6;$i++)
		{
		print date("Y.m.d",$hetfo + $i*24*60*60) . "<br>";
		}
		
		$elozo=$het-1;
		$kovetkezo=$het+1;
		
		print"
			<input type='button' value='Előző hét'  	onclick='location.href=\"./?p=Naptar&het=$elozo\"		'>
			<input type='button' value='Ez a hét'  		onclick='location.href=\"./?p=Naptar&het=0\"			'>
			<input type='button' value='Következő hét'  onclick='location.href=\"./?p=Naptar&het=$kovetkezo\"	'>
		"
?>
</tr>
</table>