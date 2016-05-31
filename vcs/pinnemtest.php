<script type="text/javascript">
var refreshTime = 600000; // every 10 minutes in milliseconds
window.setInterval( function() {
    $.ajax({
        cache: false,
        type: "GET",
        url: "refreshSession.php",
        success: function(data) {
        }
    });
}, refreshTime );
</script>
<?php
$vehicle="vehicle";

$vehicle1="vehicle";
include_once 'dbconnect.php';
$i=0;
$name=1;
$brands=array();
$brands[0]="Adidas";
$t=array();

$sum=array();
$sum1=array();
for($i=0;$i<70;$i++)
{$sum[$i]=0;
$sum1[$i]=0;
$add[$i]=0;}
if(isset($_POST['sub']))
{
for($n1=0;$n1<70;$n1++){
for($n=0;$n<1;$n++)
{  //for each day
$capture_field_vals[$n1][$n] ="";
    foreach($_POST['vehicle'][$n1][$n] as $key => $text_field){
	$capture_field_vals[$n1][$n] .= $text_field ." ";}
		
	//vehicle2
	$capture_field_vals1[$n1][$n] ="";
    foreach($_POST['vehicle1'][$n1][$n] as $key => $text_field){
        $capture_field_vals1[$n1][$n] .= $text_field ." ";
    }
	//v3
	$capture_field_vals2[$n1][$n] ="";
    foreach($_POST['vehicle2'][$n1][$n] as $key => $text_field){
        $capture_field_vals2[$n1][$n] .= $text_field ." ";
    }
	
	
$x[$n1]=explode(" ",$capture_field_vals[$n1][$n]);

$x1[$n1]=explode(" ",$capture_field_vals1[$n1][$n]); 
echo $capture_field_vals[$n1][$n]." ".$capture_field_vals1[$n1][$n]." ".$capture_field_vals2[$n1][$n]."<br>";
//$x[$n1][$n]=str_split($capture_field_vals[$n1][$n]); 
//$x1[$n1][$n]=str_split($capture_field_vals1[$n1][$n]);  
//for($i=0;$i<strlen($capture_field_vals[$n1][0]);$i++)
//$sum[$n1]+=$x[$n1][$n];
	//$sum1[$n1]+=$x1[$n1][$n];}

//}

//mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$n1','$sum[$n1]','$sum[$n1]')");
//echo $sum1[$n1]."******".$sum[$n1]."<br>";
}
//for($temp=0;$temp<5;$temp++)




for($f=0;$f<70;$f++)
{	
for($r=0;$r<6;$r++)
{if($x[$f][$r]==1)
$add[$n1]=$x[$f][$r];
if($x1[$f][$r]==1)
$add[$n1]=$x[$f][$r];}}
}

echo "*****".$add[0];

}
for($i=0;$i<70;$i++)
$t[$i]=$i; ?> 
<table border="1" style="width:100%">
<form method="post">  
<?php
for($j=0;$j<70;$j++)
{ echo "<tr>";


echo "<td>".$t[$j]."</td>";
for($p=0;$p<1;$p++){
echo "<td>";
for($k=0;$k<6;$k++)
{


?>

<input type="checkbox" name="vehicle<?php echo htmlspecialchars("[".$j."]"."[".$p."]"); ?>[]" value="1" <?php echo in_array("Adidas",$brands)?" checked='checked'":""; ?>/>
<?php }
echo "</td>"; 
}
//new row
for($p=0;$p<1;$p++){
echo "<td>";
for($k=0;$k<6;$k++)
{


?>

<input type="checkbox" name="vehicle1<?php echo htmlspecialchars("[".$j."]"."[".$p."]"); ?>[]" value="1" <?php echo in_array("Adidas",$brands)?" checked='checked'":""; ?>/>
<?php }
echo "</td>"; 
}

for($p=0;$p<1;$p++){
echo "<td>";
for($k=0;$k<6;$k++)
{


?>
<input type="checkbox" name="vehicle2<?php echo htmlspecialchars("[".$j."]"."[".$p."]"); ?>[]" value="1" <?php echo in_array("Adidas",$brands)?" checked='checked'":""; ?>/>
<?php }
echo "</td>"; 
}


echo "</tr>";
} ?>

</tr>


</table>

<button type="submit" name="sub">SUBMIT</button>
</form>
</body>
</html>