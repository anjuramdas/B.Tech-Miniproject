<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: adminlogin.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
    <label>CEC VIRTUAL CLASSROOM</label>
    </div>
    <div id="right">
     <div id="content">
         hi' <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
		 
        </div>
    </div>
</div><center><br><br><br><br><br><br><br>
<tr><td><a href="stregister.php"><button type="submit">REGISTER STUDENT</button></a></td></tr><br><br>
<tr><td><a href="tearegister.php"><button type="submit">REGISTER TEACHER</button></a></td></tr><br><br>
<tr><td><a href="testing.php"><button type="submit">ENTER UNIVERSITY ATTENDANCE</button></a></td></tr><br><br>
<tr><td><a href="http://localhost/phpmyadmin/#PMAURL-0:index.php?db=&table=&server=1&target=&token=7891925a83833afc0653d3aac43adf05"><button type="submit">ACCESS MYSQL DB CONSOLE (phpmyadmin)</button></a></td></tr><br><br>
<tr><td><a href="semchange.php"><button type="submit">CHANGE SEMESTERS</button></a></td></tr><br><br></center>
</body>
</html>
