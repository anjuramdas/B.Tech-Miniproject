<?php

session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: stdefault.php");
}
$table=$_SESSION['usertable'];
$admno=$_SESSION['admno'];
$res=mysql_query("SELECT * FROM $table WHERE admno=$admno");
$userRow=mysql_fetch_array($res);



if(isset($_POST['btn-submit']))
{ $assign= array();
	$admno = mysql_real_escape_string($_POST['admno']);
	$subjects = mysql_real_escape_string($_POST['sub']);
	$assignment1 = mysql_real_escape_string($_POST['ass1']);
$assignment2 = mysql_real_escape_string($_POST['ass2']);
$assign[]=$assignment1;
$assign[]=$assignment2;
echo $assign[0];
$string=implode(",",$assign);
	$series1 = mysql_real_escape_string($_POST['series1']);
	$series2 = mysql_real_escape_string($_POST['series2']);
	$attendance =mysql_real_escape_string($_POST['attendance']);
	
	mysql_query("INSERT INTO sessionals2a(admno,subjects,assignments,sereis1,series2,attendance) VALUES('$admno','$subjects','$string','$series1','$series2','$attendance')");
}
        
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
        	hi' <?php echo $userRow['name']; ?>&nbsp;<a href="stlogout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
<form method="post">
<td><input type="text" name="admno" placeholder="Admission Number" required /></td><br>

<td><input type="text" name="sub" placeholder="Subnjects" required /></td><br>

<td><input type="text" name="ass1" placeholder="Assignmet1" required /></td><br>

<td><input type="text" name="ass2" placeholder="Assignment2" required /></td><br>

<td><input type="text" name="series1" placeholder="sereis1" required /></td><br>

<td><input type="text" name="series2" placeholder="series2" required /></td><br>

<td><input type="text" name="attendance" placeholder="Attendance" required /></td><br><br>
<td><button type="submit" name="btn-submit">Submit</button></td>
</form>

</body>
</html>