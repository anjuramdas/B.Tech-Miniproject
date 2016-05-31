<?php
include_once 'dbconnect.php';
$name=1;
$brands=array();
$brands[0]="Adidas";

for($d=0;$d<70;$d++)
{$no=$d+1; //si starts from 1 auto increment
  $tstring1=mysql_fetch_array(mysql_query("SELECT * FROM attendances2a WHERE si='$no'"));  
  echo $tstring1['mon'];
  for($r=0;$r<6;$r++)
  {if($tstring1['mon'][$r]==1)
	  $x[$d][$r]=1;}
}
if(isset($_POST['clearrow'])) //testing not perfect
{
	//clearing row code here
	$m1=$_POST['mon1'];
	if($m1==1)
	{
		for($d=0;$d<70;$d++)
		$x[0][$d]=1;
		}
}
$t=array();
$x2=9;
if(isset($_POST['sel']))
{$sem = mysql_real_escape_string($_POST['sem']);

	$batch = mysql_real_escape_string($_POST['batch']);
	$table=$sem.$batch;
	$rowcount=mysql_query("SELECT * FROM $table");
$numberrow=mysql_num_rows($rowcount); 
echo "Total records in Student table= ". $numberrow;
//$x[0]=1;
} //set to one for testing, actual code in testing .php
if(isset($_POST['sub']))
{echo str_repeat(" ", 40000);
 ob_start();
	for($num=0;$num<70;$num++)
	{
		for($u=0;$u<70;$u++)
{$GLOBALS['$sum1[$u]']=0;}
		
	$id="vehicle".$num;
	$capture_field_vals ="";
    foreach($_POST[$id] as $key => $text_field){
        $capture_field_vals .= $text_field ."";
    }
  mysql_query("INSERT INTO attendances2a(si,mon) VALUES('$num','$capture_field_vals')");  
    $GLOBALS['x']=str_split($capture_field_vals);


for($i=0;$i<strlen($capture_field_vals);$i++)
	$sum1[$num]+=$x[$i];
//mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$num','mon','$sum[$num]')");
echo $sum1[$num]."<br>";

}

for($num=0;$num<70;$num++)
	{
		for($u=0;$u<70;$u++)
{$GLOBALS['$sum2[$u]']=0;}
		
	$id="vehiclet".$num;
	$capture_field_vals ="";
    foreach($_POST[$id] as $key => $text_field){
        $capture_field_vals .= $text_field ."";
    }
//mysql_query("INSERT INTO attendances2a(tue) VALUES('$capture_field_vals')");    
    $xt=str_split($capture_field_vals);


{for($i=0;$i<strlen($capture_field_vals);$i++)
	$sum2[$num]+=$xt[$i];}
//mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$num','tue','$sum[$num]')");
echo $sum2[$num]."<br>";

}
//wed
for($num=0;$num<70;$num++)
	{
		for($u=0;$u<70;$u++)
{$GLOBALS['$sum3[$u]']=0;}
		
	$id="vehiclew".$num;
	$capture_field_vals ="";
    foreach($_POST[$id] as $key => $text_field){
        $capture_field_vals .= $text_field ."";
    }
    
    $xw=str_split($capture_field_vals);


{for($i=0;$i<strlen($capture_field_vals);$i++)
	$sum3[$num]+=$xw[$i];}
//mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$num','wed','$sum[$num]')");
echo $sum3[$num]."<br>";

}

//thursday

for($num=0;$num<70;$num++)
	{
		for($u=0;$u<70;$u++)
{$GLOBALS['$sum4[$u]']=0;}
		
	$id="vehicleh".$num;
	$capture_field_vals ="";
    foreach($_POST[$id] as $key => $text_field){
        $capture_field_vals .= $text_field ."";
    }
    
    $xh=str_split($capture_field_vals);


{for($i=0;$i<strlen($capture_field_vals);$i++)
	$sum4[$num]+=$xh[$i];}
//mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$num','thu','$sum[$num]')");
echo $sum4[$num]."<br>";

}

//friday

for($num=0;$num<70;$num++)
	{
		for($u=0;$u<70;$u++)
{$GLOBALS['$sum5[$u]']=0;}
		
	$id="vehiclef".$num;
	$capture_field_vals ="";
    foreach($_POST[$id] as $key => $text_field){
        $capture_field_vals .= $text_field ."";
    }
    
    $xf=str_split($capture_field_vals);


{for($i=0;$i<strlen($capture_field_vals);$i++)
	$sum5[$num]+=$xf[$i];}
//mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$num','fri','$sum[$num]')");
echo $sum5[$num]."<br>";

}
ob_end_flush();
        ob_flush();
        flush();
		for($v=0;$v<70;$v++)
		{$GLOBALS['$sum[$v]']=0;
			$sum[$v]=$sum1[$v]+$sum2[$v]+$sum3[$v]+$sum4[$v]+$sum5[$v];
	mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$v','total','$sum[$v]')");}
}
for($i=0;$i<70;$i++)
$t[$i]=$i+1; ?> 
<table border="1" style="width:100%">
<form method="post">  
Semeseter: <select name="sem">
                     <optgroup label="Semester">
                        <option value="S2">Semester 1,2</option>
                        <option value="S3">Semester 3</option>
                        <option value="S4">Semester 4</option>
                       <option value="S5">Semester 5</option>
                        <option value="S6">Semester 6</option>
                        <option value="S7">Semester 7</option>
                        <option value="S8">Semester 8</option>
                     </optgroup>

  
              </select>
</tr>
<tr>

Batch: <select name="batch">
                     <optgroup label="Batch">
                        <option value="A">Batch A</option>
                        <option value="B">Batch B</option>
                        <option value="C">Batch C</option>
                       <option value="D">Batch D</option>
                        <option value="E">Batch E</option>
                        <option value="F">Batch F</option>
                        <option value="G">Batch G</option>
                     </optgroup>

  
              </select>
</tr>
<tr><button type="submit" name ="sel">Select</button></tr>

<?php
echo "<tr>";
echo "<td>";
echo "SI";
echo "</td>";
echo "<td>";
echo "Name";
echo "</td>";
echo "<td>";
echo "Monday";
echo "</td>";
echo "<td>";
echo "Tuesday";
echo "</td>";
echo "<td>";
echo "Wednesday";
echo "</td>";
echo "<td>";
echo "Thursday";
echo "</td>";
echo "<td>";
echo "Friday";
echo "</td>";
echo "</tr>";
for($j=0;$j<70;$j++)
{ echo "<tr>";
for($i=0;$i<1;$i++)
{

echo "<td>".$t[$j]."</td>";
echo "<td>"."name"."</td>";  // $x[$k]==1?" checked='checked'":"";
echo "<td>";
for($k=0;$k<6;$k++)
{

for($o=0;$o<1;$o++){
?>
<input type="hidden" name="vehicle[]" value="0"/>
<input type="checkbox" name="vehicle<?php echo htmlspecialchars($j); ?>[]" value="1" <?php if($x[$j][$k]==1) echo "checked='checked'"; ?>/>
<?php }

}echo "</td>"; }
//tues
for($i=0;$i<1;$i++)
{

echo "<td>";
for($k=0;$k<6;$k++)
{

for($o=0;$o<1;$o++){
?>
<input type="hidden" name="vehiclet[]" value="0"/>
<input type="checkbox" name="vehiclet<?php echo htmlspecialchars($j); ?>[]" value="1" <?php echo in_array("Adidas",$brands)?" checked='checked'":""; ?>/>
<?php }

}echo "</td>"; }

//WED
for($i=0;$i<1;$i++)
{

echo "<td>";
for($k=0;$k<6;$k++)
{

for($o=0;$o<1;$o++){
?>
<input type="hidden" name="vehiclew[]" value="0"/>
<input type="checkbox" name="vehiclew<?php echo htmlspecialchars($j); ?>[]" value="1" <?php echo in_array("Adidas",$brands)?" checked='checked'":""; ?>/>
<?php }

}echo "</td>"; }
//thursday

for($i=0;$i<1;$i++)
{

echo "<td>";
for($k=0;$k<6;$k++)
{

for($o=0;$o<1;$o++){
?>
<input type="hidden" name="vehicleh[]" value="0"/>
<input type="checkbox" name="vehicleh<?php echo htmlspecialchars($j); ?>[]" value="1" <?php echo in_array("Adidas",$brands)?" checked='checked'":""; ?>/>
<?php }

}echo "</td>"; }

//friday

for($i=0;$i<1;$i++)
{

echo "<td>";
for($k=0;$k<6;$k++)
{

for($o=0;$o<1;$o++){
?>
<input type="hidden" name="vehiclef[]" value="0"/>
<input type="checkbox" name="vehiclef<?php echo htmlspecialchars($j); ?>[]" value="1" <?php echo in_array("Adidas",$brands)?" checked='checked'":""; ?>/>
<?php }

}echo "</td>"; }

echo "</tr>";
} ?>

</tr>
<tr><td>Clear Row</td><td><button type="submit" name="clearrow">Clear</button></td>
<td><input type="hidden" name="mon1" value="0"/>
<input type="checkbox" name="mon1" value="1"/><input type="hidden" name="mon2" value="0"/>
<input type="checkbox" name="mon2" value="1"/><input type="hidden" name="mon3" value="0"/>
<input type="checkbox" name="mon3" value="1"/><input type="hidden" name="mon4" value="0"/>
<input type="checkbox" name="mon4" value="1"/><input type="hidden" name="mon5" value="0"/>
<input type="checkbox" name="mon5" value="1"/><input type="hidden" name="mon6" value="0"/>
<input type="checkbox" name="mon6" value="1"/>
</td>
<td><input type="hidden" name="tue1" value="0"/>
<input type="checkbox" name="tue1" value="1"/><input type="hidden" name="tue2" value="0"/>
<input type="checkbox" name="tue2" value="1"/><input type="hidden" name="tue3" value="0"/>
<input type="checkbox" name="tue3" value="1"/><input type="hidden" name="tue4" value="0"/>
<input type="checkbox" name="tue4" value="1"/><input type="hidden" name="tue5" value="0"/>
<input type="checkbox" name="tue5" value="1"/><input type="hidden" name="tue6" value="0"/>
<input type="checkbox" name="tue6" value="1"/>
</td>
<td><input type="hidden" name="wed1" value="0"/>
<input type="checkbox" name="wed1" value="1"/><input type="hidden" name="wed2" value="0"/>
<input type="checkbox" name="wed2" value="1"/><input type="hidden" name="wed3" value="0"/>
<input type="checkbox" name="wed3" value="1"/><input type="hidden" name="wed4" value="0"/>
<input type="checkbox" name="wed4" value="1"/><input type="hidden" name="wed5" value="0"/>
<input type="checkbox" name="wed5" value="1"/><input type="hidden" name="wed6" value="0"/>
<input type="checkbox" name="wed6" value="1"/>
</td>
<td><input type="hidden" name="thu1" value="0"/>
<input type="checkbox" name="thu1" value="1"/><input type="hidden" name="thu2" value="0"/>
<input type="checkbox" name="thu2" value="1"/><input type="hidden" name="thu3" value="0"/>
<input type="checkbox" name="thu3" value="1"/><input type="hidden" name="thu4" value="0"/>
<input type="checkbox" name="thu4" value="1"/><input type="hidden" name="thu5" value="0"/>
<input type="checkbox" name="thu5" value="1"/><input type="hidden" name="thu6" value="0"/>
<input type="checkbox" name="thu6" value="1"/>
</td>
<td><input type="hidden" name="fri1" value="0"/>
<input type="checkbox" name="fri1" value="1"/><input type="hidden" name="fri2" value="0"/>
<input type="checkbox" name="fri2" value="1"/><input type="hidden" name="fri3" value="0"/>
<input type="checkbox" name="fri3" value="1"/><input type="hidden" name="fri4" value="0"/>
<input type="checkbox" name="fri4" value="1"/><input type="hidden" name="fri5" value="0"/>
<input type="checkbox" name="fri5" value="1"/><input type="hidden" name="fri6" value="0"/>
<input type="checkbox" name="fri6" value="1"/>
</td></tr>


</table>

<button type="submit" name="sub">SUBMIT</button>
</form>
</body>
</html>