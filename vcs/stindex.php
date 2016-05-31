<div id="header">
	<div id="left">
    <label><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCEC VIRTUAL CLASSROOM</center></label>
    </div>
    <div id="right">
    	<div id="content">
        	
        </div>
    </div>
</div>
<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: sthome.php");
}

if(isset($_POST['btn-login']))
{
	$admno = mysql_real_escape_string($_POST['admno']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM sindex WHERE admno='$admno'");
	$index=mysql_fetch_array($res);
	 $GLOBALS['table']=$index['sem'].$index['batch'];
	 $_SESSION['subview']=$index['sem'];
 $GLOBALS['admnou']=$admno;



$res1=mysql_query("SELECT * FROM $table WHERE admno='$admno'");
	$sttable=mysql_fetch_array($res1);


	if($sttable['password']==md5($upass))
	{
		$_SESSION['user'] = $sttable['name'];
$_SESSION['usertable']=$table;
$_SESSION['admno']=$admnou;
		header("Location: sthome.php");
	}
	else
	{
		?>
        <script>alert('wrong details');</script>
        <?php
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VIRTUAL CLASS</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="admno" placeholder="Admission Number" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<td><a href="stregister.php">Sign Up Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>