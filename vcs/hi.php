<html>
<head></head>
<form method="get">
<br>
<input type="radio" name="x3"/><center><input type="text" name="x2"/><br><br>
<button type="submit" name="no2">SuBmIT</button>
</form>
<?php


if(!@mysql_connect("localhost","root",""))
echo "error";
mysql_select_db("vcs");
$yu='s1';

mysql_real_escape_string(mysql_query("INSERT INTO $yu VALUES('poefe','WS','ED','RF','TG','YH')"));
$array=mysql_fetch_array(mysql_query("SELECT * FROM $yu"));
echo $array['NAME'];
if(isset($_GET['no2']))
{unset($_GET['no2']);
$x=$_GET['x3'];
if($x=='on')
{$x="HASHIF";}
$y=$_GET['x2'];
echo "Hai My name is".$x."and my fathers name is".$y."."."<br><br><br><br><br>";
for($i=0;$i<30;$i++)
echo "*"."<br>";
echo date('Y m d H:i:s', time());

}





?>






<body>


</html>