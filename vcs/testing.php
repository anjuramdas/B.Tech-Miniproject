<?php
session_start();
include_once 'dbconnect.php';
$name=1;
$brands=array();
$brands[0]="Adidas";
if(isset($_SESSION['tableh']))
{$GLOBALS['atable']="attendance".$_SESSION['tableh'];
$nop=mysql_fetch_array(mysql_query("SELECT * FROM $atable WHERE si='0'"));
$_SESSION['nopp']=$nop['nop'];}
if(isset($_POST['cnw']))
{$tab=$_SESSION['tableh'];
	$sqlh1 = mysql_query("SELECT * FROM $tab");
$sqlh2 = mysql_query("SELECT * FROM $atable");
$hcount=0;
$gcount=0;
	while ($rowh1 = mysql_fetch_array($sqlh1, MYSQL_NUM)) {
   // $rowh2 = mysql_fetch_array($sqlh2, MYSQL_NUM);
	$att1[$hcount]=$rowh1[9];
	$admh[$hcount]=$rowh1[4];
	$hcount++;
	}
	while ($rowh2 = mysql_fetch_array($sqlh2, MYSQL_NUM)) {
   // $rowh2 = mysql_fetch_array($sqlh2, MYSQL_NUM);
	$att2[$gcount]=$rowh2[6];
	$weekno=$nop['week'];
	$att2[$gcount]+=$att1[$gcount];
	$att2[$gcount]=$att2[$gcount]/$weekno;
	
mysql_query("UPDATE $tab SET attendance='$att2[$gcount]' WHERE admno='$admh[$gcount]'");
	
	mysql_query("UPDATE $atable SET mon='0' WHERE si='$gcount'");
	mysql_query("UPDATE $atable SET tue='0' WHERE si='$gcount'");
	mysql_query("UPDATE $atable SET wed='0' WHERE si='$gcount'");
	mysql_query("UPDATE $atable SET thu='0' WHERE si='$gcount'");
	mysql_query("UPDATE $atable SET fri='0' WHERE si='$gcount'");
	mysql_query("UPDATE $atable SET total='0' WHERE si='$gcount'");
	mysql_query("UPDATE $atable SET nop='30' WHERE si='$gcount'");
	$gcount++;
	//printf("Name: %s <br/>", $row[1]);
	 //printf("Name: %s <br/>", $row[2]);

}
$weekno=$nop['week']+1;
mysql_query("UPDATE $atable SET week='$weekno' WHERE si='0'");
	
}
	
	


if(isset($_SESSION['norow']))
{$cl=$_SESSION['tableh'];
	$sql = mysql_query("SELECT * FROM $cl");
$kru=0;
	while ($row = mysql_fetch_array($sql, MYSQL_NUM)) {
   // printf("Name: %s <br/>", $row[1]);
   $namek[$kru]=$row[1];
   $rollnok[$kru]=$row[0];
   $kru++;
}
for($d=0;$d<$_SESSION['norow'];$d++)
{$no=$d; //si starts from 1 auto increment
  $tstring1=mysql_fetch_array(mysql_query("SELECT * FROM $atable WHERE si='$no'"));  
  //echo $tstring1['mon'];
  for($r=0;$r<6;$r++)
  {if($tstring1['mon'][$r]==1)
	  $x[$d][$r]=1;
  if($tstring1['tue'][$r]==1)
	  $x1[$d][$r]=1;
 if($tstring1['wed'][$r]==1)
	  $x2[$d][$r]=1;
  if($tstring1['thu'][$r]==1)
	  $x3[$d][$r]=1;
  if($tstring1['fri'][$r]==1)
	  $x4[$d][$r]=1;
  }
}}
//clear actually

if(isset($_POST['clearrow1'])) //testing not perfect
{
//mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
	//clearing row code here
	
	//montday
	$m1=$_POST['mont1'];
	$m2=$_POST['mont2'];
	$m3=$_POST['mont3'];
	$m4=$_POST['mont4'];
	$m5=$_POST['mont5'];
	$m6=$_POST['mont6'];
	if($m1==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x[$d][0]=0;
		}
		if($m2==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x[$d][1]=0;
		}
			if($m3==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x[$d][2]=0;
		}
			if($m4==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x[$d][3]=0;
		}
			if($m5==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x[$d][4]=0;
		}
			if($m6==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x[$d][5]=0;
		}
		
		//tuet
	$t1=$_POST['tuet1'];
	$t2=$_POST['tuet2'];
	$t3=$_POST['tuet3'];
	$t4=$_POST['tuet4'];
	$t5=$_POST['tuet5'];
	$t6=$_POST['tuet6'];
	if($t1==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x1[$d][0]=0;
		}
		if($t2==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x1[$d][1]=0;
		}
			if($t3==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x1[$d][2]=0;
		}
			if($t4==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x1[$d][3]=0;
		}
			if($t5==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x1[$d][4]=0;
		}
			if($t6==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x1[$d][5]=0;
		}
		
		//wedt
	$w1=$_POST['wedt1'];
	$w2=$_POST['wedt2'];
	$w3=$_POST['wedt3'];
	$w4=$_POST['wedt4'];
	$w5=$_POST['wedt5'];
	$w6=$_POST['wedt6'];
	if($w1==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x2[$d][0]=0;
		}
		if($w2==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x2[$d][1]=0;
		}
			if($w3==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x2[$d][2]=0;
		}
			if($w4==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x2[$d][3]=0;
		}
			if($w5==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x2[$d][4]=0;
		}
			if($w6==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x2[$d][5]=0;
		}
		//thut
	$th1=$_POST['thut1'];
	$th2=$_POST['thut2'];
	$th3=$_POST['thut3'];
	$th4=$_POST['thut4'];
	$th5=$_POST['thut5'];
	$th6=$_POST['thut6'];
	if($th1==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x3[$d][0]=0;
		}
		if($th2==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x3[$d][1]=0;
		}
			if($th3==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x3[$d][2]=0;
		}
			if($th4==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x3[$d][3]=0;
		}
			if($th5==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x3[$d][4]=0;
		}
			if($th6==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x3[$d][5]=0;
		}
		//frit
	$fr1=$_POST['frit1'];
	$fr2=$_POST['frit2'];
	$fr3=$_POST['frit3'];
	$fr4=$_POST['frit4'];
	$fr5=$_POST['frit5'];
	$fr6=$_POST['frit6'];
	if($fr1==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x4[$d][0]=0;
		}
		if($fr2==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x4[$d][1]=0;
		}
			if($fr3==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x4[$d][2]=0;
		}
			if($fr4==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x4[$d][3]=0;
		}
			if($fr5==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x4[$d][4]=0;
		}
			if($fr6==1)
	{$_SESSION['nopp']=$_SESSION['nopp']-1;
$cpn=$_SESSION['nopp'];
$atable="attendance".$_SESSION['tableh'];;
mysql_query("UPDATE $atable SET nop='$cpn' WHERE si='0'");
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x4[$d][5]=0;
		}
		//unset($_SESSION['nopp']);
		//header("Location: testing.php");
		
}





if(isset($_POST['clearrow'])) //testing not perfect
{
	//clearing row code here
	
	//monday
	$m1=$_POST['mon1'];
	$m2=$_POST['mon2'];
	$m3=$_POST['mon3'];
	$m4=$_POST['mon4'];
	$m5=$_POST['mon5'];
	$m6=$_POST['mon6'];
	if($m1==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x[$d][0]=1;
		}
		if($m2==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x[$d][1]=1;
		}
			if($m3==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x[$d][2]=1;
		}
			if($m4==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x[$d][3]=1;
		}
			if($m5==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x[$d][4]=1;
		}
			if($m6==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x[$d][5]=1;
		}
		
		//tue
	$t1=$_POST['tue1'];
	$t2=$_POST['tue2'];
	$t3=$_POST['tue3'];
	$t4=$_POST['tue4'];
	$t5=$_POST['tue5'];
	$t6=$_POST['tue6'];
	if($t1==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x1[$d][0]=1;
		}
		if($t2==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x1[$d][1]=1;
		}
			if($t3==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x1[$d][2]=1;
		}
			if($t4==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x1[$d][3]=1;
		}
			if($t5==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x1[$d][4]=1;
		}
			if($t6==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x1[$d][5]=1;
		}
		
		//wed
	$w1=$_POST['wed1'];
	$w2=$_POST['wed2'];
	$w3=$_POST['wed3'];
	$w4=$_POST['wed4'];
	$w5=$_POST['wed5'];
	$w6=$_POST['wed6'];
	if($w1==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x2[$d][0]=1;
		}
		if($w2==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x2[$d][1]=1;
		}
			if($w3==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x2[$d][2]=1;
		}
			if($w4==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x2[$d][3]=1;
		}
			if($w5==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x2[$d][4]=1;
		}
			if($w6==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x2[$d][5]=1;
		}
		//thu
	$th1=$_POST['thu1'];
	$th2=$_POST['thu2'];
	$th3=$_POST['thu3'];
	$th4=$_POST['thu4'];
	$th5=$_POST['thu5'];
	$th6=$_POST['thu6'];
	if($th1==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x3[$d][0]=1;
		}
		if($th2==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x3[$d][1]=1;
		}
			if($th3==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x3[$d][2]=1;
		}
			if($th4==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x3[$d][3]=1;
		}
			if($th5==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x3[$d][4]=1;
		}
			if($th6==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x3[$d][5]=1;
		}
		//fri
	$fr1=$_POST['fri1'];
	$fr2=$_POST['fri2'];
	$fr3=$_POST['fri3'];
	$fr4=$_POST['fri4'];
	$fr5=$_POST['fri5'];
	$fr6=$_POST['fri6'];
	if($fr1==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x4[$d][0]=1;
		}
		if($fr2==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x4[$d][1]=1;
		}
			if($fr3==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x4[$d][2]=1;
		}
			if($fr4==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x4[$d][3]=1;
		}
			if($fr5==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x4[$d][4]=1;
		}
			if($fr6==1)
	{
		for($d=0;$d<$_SESSION['norow'];$d++)
		$x4[$d][5]=1;
		}
}
$t=array();
if(isset($_SESSION['tableh']))
{$tab=$_SESSION['tableh'];
$sql1 = mysql_query("SELECT * FROM $tab");
$at=0;

while ($row1 = mysql_fetch_array($sql1, MYSQL_NUM)) {
    //printf("Name: %s <br/>", $row[1]);
	 //printf("Name: %s <br/>", $row[2]);
	 $att[$at]=$row1[9];
	 $adm[$at]=$row1[4];
	 //echo $adm[$at];
	 $at++;
}


}

if(isset($_POST['sel']))
{$sem = mysql_real_escape_string($_POST['sem']);
//iserting to student table..atendance



	$batch = mysql_real_escape_string($_POST['batch']);
	$table=$sem.$batch;
	$_SESSION['tableh']=$table;
	$rowcount=mysql_query("SELECT * FROM $table");
$_SESSION['norow']=mysql_num_rows($rowcount); 
echo "Total records in Student table= ". $_SESSION['norow'];

$_SESSION['norow']=$_SESSION['norow'];
//$x[0]=1;
header("Location: testing.php");
} //set to one for testing, actual code in testing .php
if(isset($_POST['sub']))
{echo str_repeat(" ", 40000);
 ob_start();
	for($num=0;$num<$_SESSION['norow'];$num++)
	{
		for($u=0;$u<$_SESSION['norow'];$u++)
{$GLOBALS['$sum1[$u]']=0;}
		
	$id="day".$num;
	$capture_field_vals ="";
    foreach($_POST[$id] as $key => $text_field){
        $capture_field_vals .= $text_field ."";
    }
	$monrow=$capture_field_vals;
  mysql_query("UPDATE $atable SET mon='$capture_field_vals' WHERE si='$num'");  
    $GLOBALS['x']=str_split($capture_field_vals);


for($i=0;$i<strlen($capture_field_vals);$i++)
	$sum1[$num]+=$x[$i];
//mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$num','mon','$sum[$num]')");
//echo $sum1[$num]."<br>";

}

for($num=0;$num<$_SESSION['norow'];$num++)
	{
		for($u=0;$u<$_SESSION['norow'];$u++)
{$GLOBALS['$sum2[$u]']=0;}
		
	$id="dayt".$num;
	$capture_field_vals ="";
    foreach($_POST[$id] as $key => $text_field){
        $capture_field_vals .= $text_field ."";
    }
	$tuerow=$capture_field_vals;
 mysql_query("UPDATE $atable SET tue='$capture_field_vals' WHERE si='$num'");  
     $xt=str_split($capture_field_vals);


{for($i=0;$i<strlen($capture_field_vals);$i++)
	$sum2[$num]+=$xt[$i];}
//mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$num','tue','$sum[$num]')");
//echo $sum2[$num]."<br>";

}
//wed
for($num=0;$num<$_SESSION['norow'];$num++)
	{
		for($u=0;$u<$_SESSION['norow'];$u++)
{$GLOBALS['$sum3[$u]']=0;}
		
	$id="dayw".$num;
	$capture_field_vals ="";
    foreach($_POST[$id] as $key => $text_field){
        $capture_field_vals .= $text_field ."";
    }
    $wedrow=$capture_field_vals;
	 mysql_query("UPDATE $atable SET wed='$capture_field_vals' WHERE si='$num'");  
 
    $xw=str_split($capture_field_vals);


{for($i=0;$i<strlen($capture_field_vals);$i++)
	$sum3[$num]+=$xw[$i];}
//mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$num','wed','$sum[$num]')");
//echo $sum3[$num]."<br>";

}

//thursday

for($num=0;$num<$_SESSION['norow'];$num++)
	{
		for($u=0;$u<$_SESSION['norow'];$u++)
{$GLOBALS['$sum4[$u]']=0;}
		
	$id="dayh".$num;
	$capture_field_vals ="";
    foreach($_POST[$id] as $key => $text_field){
        $capture_field_vals .= $text_field ."";
    }
    $thurow=$capture_field_vals;
	 mysql_query("UPDATE $atable SET thu='$capture_field_vals' WHERE si='$num'");  
 
    $xh=str_split($capture_field_vals);


{for($i=0;$i<strlen($capture_field_vals);$i++)
	$sum4[$num]+=$xh[$i];}
//mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$num','thu','$sum[$num]')");
//echo $sum4[$num]."<br>";

}

//friday

for($num=0;$num<$_SESSION['norow'];$num++)
	{
		for($u=0;$u<$_SESSION['norow'];$u++)
{$GLOBALS['$sum5[$u]']=0;}
		
	$id="dayf".$num;
	$capture_field_vals ="";
    foreach($_POST[$id] as $key => $text_field){
        $capture_field_vals .= $text_field ."";
    }
    $frirow=$capture_field_vals;
	 mysql_query("UPDATE $atable SET fri='$capture_field_vals' WHERE si='$num'");  
 
    $xf=str_split($capture_field_vals);


{for($i=0;$i<strlen($capture_field_vals);$i++)
	$sum5[$num]+=$xf[$i];}
//mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$num','fri','$sum[$num]')");
//echo $sum5[$num]."<br>";

}
ob_end_flush();
        ob_flush();
        flush();
		for($v=0;$v<$_SESSION['norow'];$v++)
		{$GLOBALS['$sum[$v]']=0;
			$sum[$v]=$sum1[$v]+$sum2[$v]+$sum3[$v]+$sum4[$v]+$sum5[$v];
			$per[$v]=$sum[$v]/$_SESSION['nopp']*100;
	//mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$v','total','$sum[$v]')");
	mysql_query("UPDATE $atable SET TOTAL='$per[$v]' WHERE si='$v'");
$tab=$_SESSION['tableh'];
	
//$att[$v]+=$sum[$v];
//mysql_query("UPDATE $tab SET attendance='$att[$v]' WHERE admno='$adm[$v]'");

//echo $att[$v]."HHHHHHHHHHHHHHH";	
}
//mysql_query("INSERT INTO $atable(si,mon,tue,wed,thu,fri) VALUES('$','$monrow','$tuerow','$wedrow','$thurow','$frirow')");    
  
	}
	
	
for($i=0;$i<$_SESSION['norow'];$i++)
$t[$i]=$i+1; ?> 
<br><center><h2>College Of Engineering, Chengannur</h2></center>
<table border="1" style="width:100%">
<form method="post">  
Semeseter: <select name="sem">
                     <optgroup label="Semester">
                        <option value="s2">Semester 1,2</option>
                        <option value="s3">Semester 3</option>
                        <option value="s4">Semester 4</option>
                       <option value="s5">Semester 5</option>
                        <option value="s6">Semester 6</option>
                        <option value="s7">Semester 7</option>
                        <option value="s8">Semester 8</option>
                     </optgroup>

  
              </select>
</tr>
<tr>

Batch: <select name="batch">
                     <optgroup label="Batch">
                        <option value="a">Batch A</option>
                        <option value="b">Batch B</option>
                        <option value="c">Batch C</option>
                       <option value="d">Batch D</option>
                        <option value="e">Batch E</option>
                        <option value="f">Batch F</option>
                        <option value="g">Batch G</option>
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
echo "Rollno";
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
echo "<td>";
echo "Attended %";
echo "</td>";
echo "</tr>";
for($j=0;$j<$_SESSION['norow'];$j++)
{ echo "<tr>";
for($i=0;$i<1;$i++)
{

echo "<td>".$t[$j]."</td>";
echo "<td>".$rollnok[$j]."</td>";
echo "<td>".$namek[$j]."</td>";  // $x[$k]==1?" checked='checked'":"";
echo "<td>";
for($k=0;$k<6;$k++)
{

for($o=0;$o<1;$o++){
?>
<input type="hidden" name="day[]" value="0"/>    
<input type="checkbox" name="day<?php echo htmlspecialchars($j); ?>[]" value="1" <?php if($x[$j][$k]==1) echo "checked='checked'"; ?>/>
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
<input type="hidden" name="dayt[]" value="0"/>
<input type="checkbox" name="dayt<?php echo htmlspecialchars($j); ?>[]" value="1" <?php  if($x1[$j][$k]==1) echo "checked='checked'";?>/>
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
<input type="hidden" name="dayw[]" value="0"/>
<input type="checkbox" name="dayw<?php echo htmlspecialchars($j); ?>[]" value="1" <?php if($x2[$j][$k]==1) echo "checked='checked'"; ?>/>
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
<input type="hidden" name="dayh[]" value="0"/>
<input type="checkbox" name="dayh<?php echo htmlspecialchars($j); ?>[]" value="1" <?php if($x3[$j][$k]==1) echo "checked='checked'"; ?>/>
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
<input type="hidden" name="dayf[]" value="0"/>
<input type="checkbox" name="dayf<?php echo htmlspecialchars($j); ?>[]" value="1" <?php if($x4[$j][$k]==1) echo "checked='checked'"; ?>/>
<?php }

}echo "</td>"; }
if($j==0)  //displaying total attendance test...insrt into db the value above and retrieve and display and calculate percentage.
{$gcount=0;
$sqlh2 = mysql_query("SELECT * FROM $atable");
while ($rowh2 = mysql_fetch_array($sqlh2, MYSQL_NUM)) {
	$att4[$gcount]=$rowh2[6];
$gcount++;
}}
echo "<td>"; echo $att4[$j]; echo "</td>";

echo "</tr>";

} ?>

</tr>
<tr><td>Clear Row</td><td><button type="submit" name="clearrow1">Clear</button></td>
<td>Periods</td>
<td><input type="hidden" name="mont1" value="0"/>
<input type="checkbox" name="mont1" value="1"/><input type="hidden" name="mont2" value="0"/>
<input type="checkbox" name="mont2" value="1"/><input type="hidden" name="mont3" value="0"/>
<input type="checkbox" name="mont3" value="1"/><input type="hidden" name="mont4" value="0"/>
<input type="checkbox" name="mont4" value="1"/><input type="hidden" name="mont5" value="0"/>
<input type="checkbox" name="mont5" value="1"/><input type="hidden" name="mont6" value="0"/>
<input type="checkbox" name="mont6" value="1"/>
</td>
<td><input type="hidden" name="tuet1" value="0"/>
<input type="checkbox" name="tuet1" value="1"/><input type="hidden" name="tuet2" value="0"/>
<input type="checkbox" name="tuet2" value="1"/><input type="hidden" name="tuet3" value="0"/>
<input type="checkbox" name="tuet3" value="1"/><input type="hidden" name="tuet4" value="0"/>
<input type="checkbox" name="tuet4" value="1"/><input type="hidden" name="tuet5" value="0"/>
<input type="checkbox" name="tuet5" value="1"/><input type="hidden" name="tuet6" value="0"/>
<input type="checkbox" name="tuet6" value="1"/>
</td>
<td><input type="hidden" name="wedt1" value="0"/>
<input type="checkbox" name="wedt1" value="1"/><input type="hidden" name="wedt2" value="0"/>
<input type="checkbox" name="wedt2" value="1"/><input type="hidden" name="wedt3" value="0"/>
<input type="checkbox" name="wedt3" value="1"/><input type="hidden" name="wedt4" value="0"/>
<input type="checkbox" name="wedt4" value="1"/><input type="hidden" name="wedt5" value="0"/>
<input type="checkbox" name="wedt5" value="1"/><input type="hidden" name="wedt6" value="0"/>
<input type="checkbox" name="wedt6" value="1"/>
</td>
<td><input type="hidden" name="thut1" value="0"/>
<input type="checkbox" name="thut1" value="1"/><input type="hidden" name="thut2" value="0"/>
<input type="checkbox" name="thut2" value="1"/><input type="hidden" name="thut3" value="0"/>
<input type="checkbox" name="thut3" value="1"/><input type="hidden" name="thut4" value="0"/>
<input type="checkbox" name="thut4" value="1"/><input type="hidden" name="thut5" value="0"/>
<input type="checkbox" name="thut5" value="1"/><input type="hidden" name="thut6" value="0"/>
<input type="checkbox" name="thut6" value="1"/>
</td>
<td><input type="hidden" name="frit1" value="0"/>
<input type="checkbox" name="frit1" value="1"/><input type="hidden" name="frit2" value="0"/>
<input type="checkbox" name="frit2" value="1"/><input type="hidden" name="frit3" value="0"/>
<input type="checkbox" name="frit3" value="1"/><input type="hidden" name="frit4" value="0"/>
<input type="checkbox" name="frit4" value="1"/><input type="hidden" name="frit5" value="0"/>
<input type="checkbox" name="frit5" value="1"/><input type="hidden" name="frit6" value="0"/>
<input type="checkbox" name="frit6" value="1"/>
</td>


</tr>




<tr><td>Select Row</td><td><button type="submit" name="clearrow">Select</button></td>
<td>Periods</td>
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
</td>


</tr>


</table>

<button type="submit" name="sub">SUBMIT</button>&nbsp <button type="submit" name="cnw">Next Week</button>
</form>
</body>
</html>