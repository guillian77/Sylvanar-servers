<div id="sidebar-marketing" class="sidebar-module">
	<div class="sidebar-title">
		<h3 class="title-bnet-ads">
			STATUS DES SERVEURS
		</h3>
	</div>
</div>



<p>Teamspeak: 

<?php
$fp = @fsockopen("sylvanar-servers.com", "10011", $errno, $errstr, 1);
if($fp >= 1)
{ 
echo '<FONT SIZE=2><FONT COLOR="#AEEE00"><b>En Ligne</b></FONT></FONT>';
}
else
{ 
echo '<FONT SIZE=2><FONT COLOR="#B9121B"><b>Hors Ligne</b></FONT></FONT>';
}
?>

<p>Minecraft:

<?php
$fp = @fsockopen("sylvanar-servers.com", "25565", $errno, $errstr, 1);
if($fp >= 1)
{ 
echo '<FONT SIZE=2><FONT COLOR="#AEEE00"><b>En Ligne</b></FONT></FONT>';
}
else
{ 
echo '<FONT SIZE=2><FONT COLOR="#B9121B"><b>Hors Ligne</b></FONT></FONT>';
}
?>

<p>World Of Warcraft: 

<?php
$fp = @fsockopen("sylvanar-servers.com", "8085", $errno, $errstr, 1);
if($fp >= 1)
{ 
echo '<FONT SIZE=2><FONT COLOR="#AEEE00"><b>En Ligne</b></FONT></FONT>';
}
else
{ 
echo '<FONT SIZE=2><FONT COLOR="#B9121B"><b>Hors Ligne</b></FONT></FONT>';
}
?>


<p>Planetside 2: 

<?php
$fp = @fsockopen("planetside2.eu", "80", $errno, $errstr, 1);
if($fp >= 1)
{ 
echo '<FONT SIZE=2><FONT COLOR="#AEEE00"><b>En Ligne</b></FONT></FONT>';
}
else
{ 
echo '<FONT SIZE=2><FONT COLOR="#B9121B"><b>Hors Ligne</b></FONT></FONT>';
}
?>

<div id="sidebar-marketing" class="sidebar-module">
	<div class="sidebar-title">
		<h3 class="title-bnet-ads">
			INFOS UTILES
		</h3>
	</div>
</div>

<p>Teamspeak: <font color="#BD8D46">teamspeak.sylvanar-servers.com</font>
<p>Planetside 2: <font color="#BD8D46"><a href="http://planetside2.eu/fr">http://planetside2.eu/fr</a></font>