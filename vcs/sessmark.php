<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: stdefault.php");
}


$teaname=$_SESSION['user'];
$id=$_SESSION['idno'];
$res=mysql_query("SELECT * FROM teacher WHERE idno='$id'");
	$index=mysql_fetch_array($res);



$sem=explode(",",$index['sem']);
$batch=explode(",",$index['batch']);
$subjects=explode(",",$index['subjects']);
for($i=0;$i<$index['noc'];$i++)
	echo $sem[$i];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['name']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
	<div id="left">
    <label>VIRTUAL CLASSROOM</label>
    </div>
    <div id="right">
    	<div id="content">
        	hi' <?php echo $index['name']; ?>&nbsp;<a href="stlogout.php?logout">Sign Out</a>
        </div>
    </div>
</div>

<div id="body">
	      <form action="" method="POST" enctype="multipart/form-data">
	  Semeseter: <select name="sem[]">
                     <optgroup label="Semester">
					 <?php
					 for($i=0;$i<$index['noc'];$i++)
					 { ?>
                        <option value="<?php echo $sem[$i]; ?>"><?php echo $sem[$i]; ?></option>
					 <?php } ?>
                     </optgroup>

  
              </select>
			  Batch: <select name="batch[]">
                     <optgroup label="Batch">
					 <?php
					 for($i=0;$i<$index['noc'];$i++)
					 { ?>
                        <option value="<?php echo $batch[$i]; ?>"><?php echo $batch[$i]; ?></option>
					 <?php } ?>
                     </optgroup>

  
              </select>
<button type="submit" name="btn1">Select</button>
</form>

<?php 
if(isset($_POST['btn1']))
{
	$semt=$_POST['sem'];
	$batcht=$_POST['batch'];
	$classt=$semt[0].$batcht[0];
	$_SESSION['sessclassarr']="sessional".$classt;
	
for($i=0;$i<$index['noc'];$i++)
	{if($semt[0]==$sem[$i]&&$batcht[0]==$batch[$i])
		 $_SESSION['subt']=$subjects[$i];}
	 echo $_SESSION['subt'];
	
	
	$sql = mysql_query("SELECT * FROM $classt"); 
	?><form method="post"> 
	Student: <select name="admno1[]">
                     <optgroup label="Student"> <?php
	while ($row = mysql_fetch_array($sql, MYSQL_NUM)) { ?>
    
					 
                        <option value="<?php echo $row[4]; ?>"><?php echo "Roll Number: ".$row[0]."&nbsp"."Name: ".$row[1]; ?></option>
					 
                     
<?php }  ?>


	
	
	</optgroup>

  
              </select>
			  <button type="submit" name="btn2">Select</button>
</form>
<?php }

   ?>
	
<?php  
if(isset($_POST['btn2']))
{
	$GLOBALS['admno']=$_POST['admno1'];
	$_SESSION['intermediate']=$admno[0];
	$subh=$_SESSION['subt'];
	$admx=$admno[0].$subh;
	$sessclassarr=$_SESSION['sessclassarr'];
	mysql_query("INSERT INTO `$sessclassarr`(id,admno,subjects,assignments,sereis1,series2,attendance) VALUES('$admno[0]','$admx','$subh','0','0','0','0')");

	
?>
<form method="post">
<td><input type="text" name="ass1" placeholder="Assignment1" required /></td><br>

<td><input type="text" name="ass2" placeholder="Assignment2" required /></td><br>

<td><input type="text" name="series1" placeholder="sereis1" required /></td><br>

<td><input type="text" name="series2" placeholder="series2" required /></td><br>

<td><input type="text" name="attendance" placeholder="Attendance" required /></td><br><br>
<td><button type="submit" name="btn3">Submit</button></td>
</form>
<?php  } ?>
<?php
if(isset($_POST['btn3']))
{	$assignment1 = mysql_real_escape_string($_POST['ass1']);
$assignment2 = mysql_real_escape_string($_POST['ass2']);
	$assarr[0]=$assignment1;
	$assarr[1]=$assignment2;
	$assarrstr=implode(",",$assarr);
$series1 = mysql_real_escape_string($_POST['series1']);
	$series2 = mysql_real_escape_string($_POST['series2']);
$admno2=$_SESSION['intermediate'].$_SESSION['subt'];
	$attendance =mysql_real_escape_string($_POST['attendance']);
	$se=($series1+$series2)/4;
	$marks=$assignment1+$assignment2+$se+$attendance;
	
	$sessclassarr=$_SESSION['sessclassarr'];
//mysql_query("INSERT INTO `$sessclassarr`(admno,assignments,sereis1,series2,attendance) VALUES('$admno2','$assignment1','$series1','$series2','$attendance')");
mysql_query("UPDATE `$sessclassarr` SET assignments='$assarrstr' WHERE admno='$admno2'");
mysql_query("UPDATE `$sessclassarr` SET sereis1='$series1' WHERE admno='$admno2'");
mysql_query("UPDATE `$sessclassarr` SET series2='$series2' WHERE admno='$admno2'");
mysql_query("UPDATE `$sessclassarr` SET attendance='$attendance' WHERE admno='$admno2'"); 
mysql_query("UPDATE `$sessclassarr` SET total='$marks' WHERE admno='$admno2'"); 
	}
 ?>
	</div>

</body>
</html>