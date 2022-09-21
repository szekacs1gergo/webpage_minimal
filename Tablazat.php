<h1>TABLES FOR NO USEAGE</h1>
<table border=2><tr>
<?php


	
for($i=1; $i<=20;$i++)
{
	print "<tr>";
		for($b=1;$b<=50;$b++)
		{
	print "<td title='$b*$i'>".($b*$i)."</td>";
		}

}
print "<tr>";



?>
</tr></table>