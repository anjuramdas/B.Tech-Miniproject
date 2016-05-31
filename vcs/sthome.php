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

<div id="body">
	<table width="100%"><tr><td><a href="stprofile.php"><button type="submit">PROFILE</button></a></td></tr>
	<tr><td><a href="stupprofile.php"><button type="submit">UPDATE PROFILE</button></a></td></tr>
	
	<tr><td><a href="listsubject.php"><button type="submit">VIEW MATERIALS</button></a></td></tr>
</table>
	</div>

</body>
</html>