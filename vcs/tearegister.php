<?php
session_start();//Start new or resume existing session

include_once 'dbconnect.php';//include db

if(isset($_POST['btn-signup']))//Determine if a variable is set and is not NULL,$_post-http variables
{
	$idno = mysql_real_escape_string($_POST['idno']);
	$name = mysql_real_escape_string($_POST['name']);
        $noc = mysql_real_escape_string($_POST['noc']);
	$address = mysql_real_escape_string($_POST['address']);
        $phno = mysql_real_escape_string($_POST['phno']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = md5(mysql_real_escape_string($_POST['password']));
$_SESSION['idno']=$idno;
$_SESSION['namet']=$name;
$_SESSION['noc']=$noc;
$_SESSION['address']=$address;
$_SESSION['email']=$email;
$_SESSION['password']=$password;

$_SESSION['phno']=$phno;
header("Location: tearegisterinter.php");
	}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="idno" placeholder="ID Number" required /></td>
</tr>
<tr>
<td><input type="text" name="name" placeholder="Name" required /></td>
</tr>
<tr>
<td><input type="text" name="address" placeholder="Address" required /></td>
</tr>
<tr>
<td><input type="text" name="phno" placeholder="Phone" required /></td>
</tr>
<tr>
<td><input type="text" name="noc" placeholder="Number of Class" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="default.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>