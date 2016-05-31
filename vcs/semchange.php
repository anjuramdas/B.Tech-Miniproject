<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: adminlogin.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
if(isset($_POST['allsem']))
{
for($i=7;$i>=2;$i--)
	{
		$j=$i+1;
$preva="s".$i."a";
$prevb="s".$i."b";
$prevc="s".$i."c";
$prevd="s".$i."d";
$preve="s".$i."e";
$prevf="s".$i."f";
$prevg="s".$i."g";
$newa="s".$j."a";
$newb="s".$j."b";
$newc="s".$j."c";
$newd="s".$j."d";
$newe="s".$j."e";
$newf="s".$j."f";
$newg="s".$j."g";
$lasta="s"."8"."a";
$lastb="s"."8"."b";
$lastc="s"."8"."c";
$lastd="s"."8"."d";
$laste="s"."8"."e";
$lastf="s"."8"."f";
$lastg="s"."8"."g";
	if($i==7){
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8a`');
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8b`');
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8c`');
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8d`');
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8e`');
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8f`');
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8g`');
$sql0 = mysql_query("SELECT * FROM `sindex`  WHERE sem='s8'");
	while ($row1 = mysql_fetch_array($sql0, MYSQL_NUM))
	{$admnoe=$row1[0];
		mysql_query("DELETE FROM `vcs`.`sindex` WHERE `sindex`.`admno` = '$admnoe'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8a'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8b'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8c'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8d'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8e'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8f'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8g'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	
	
	
	
	}
	mysql_query("RENAME TABLE `vcs`.`$preva` TO `vcs`.`$newa`");
	mysql_query("RENAME TABLE `vcs`.`$prevb` TO `vcs`.`$newb`");
	mysql_query("RENAME TABLE `vcs`.`$prevc` TO `vcs`.`$newc`");
	mysql_query("RENAME TABLE `vcs`.`$prevd` TO `vcs`.`$newd`");
	mysql_query("RENAME TABLE `vcs`.`$preve` TO `vcs`.`$newe`");
	mysql_query("RENAME TABLE `vcs`.`$prevf` TO `vcs`.`$newf`");
	mysql_query("RENAME TABLE `vcs`.`$prevg` TO `vcs`.`$newg`");
	//dont forget sindex parent and teacher changes and page for teacher edit by admin
	$sem="s".$i;
	$nsem="s".$j;
	
	$sql = mysql_query("SELECT * FROM `sindex`  WHERE sem='$sem'");
	while ($row = mysql_fetch_array($sql, MYSQL_NUM))
	{$admno=$row[0];
		mysql_query("UPDATE `sindex` SET sem='$nsem' WHERE admno='$admno'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$preva'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newa' WHERE si='$si'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$prevb'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newb' WHERE si='$si'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$prevc'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newc' WHERE si='$si'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$prevd'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newd' WHERE si='$si'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$preve'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newe' WHERE si='$si'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$prevf'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newf' WHERE si='$si'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$prevg'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newg' WHERE si='$si'");
		
	}
	
	
	
	}

	
	
	
	mysql_query("CREATE TABLE `s2a` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
mysql_query("CREATE TABLE `s2b` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
mysql_query("CREATE TABLE `s2c` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
mysql_query("CREATE TABLE `s2d` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
mysql_query("CREATE TABLE `s2e` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
mysql_query("CREATE TABLE `s2f` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
mysql_query("CREATE TABLE `s2g` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
$sqc=mysql_query("SELECT * FROM `chat` ");
	while ($rowe = mysql_fetch_array($sqc, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`chat` WHERE `chat`.`si` = '$si'");
		
	}
	}
	
	
	
if(isset($_POST['thirdsem']))
{
for($i=7;$i>=3;$i--)
	{
		$j=$i+1;
$preva="s".$i."a";
$prevb="s".$i."b";
$prevc="s".$i."c";
$prevd="s".$i."d";
$preve="s".$i."e";
$prevf="s".$i."f";
$prevg="s".$i."g";
$newa="s".$j."a";
$newb="s".$j."b";
$newc="s".$j."c";
$newd="s".$j."d";
$newe="s".$j."e";
$newf="s".$j."f";
$newg="s".$j."g";
$lasta="s"."8"."a";
$lastb="s"."8"."b";
$lastc="s"."8"."c";
$lastd="s"."8"."d";
$laste="s"."8"."e";
$lastf="s"."8"."f";
$lastg="s"."8"."g";
	if($i==7){
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8a`');
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8b`');
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8c`');
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8d`');
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8e`');
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8f`');
mysql_query('DROP TABLE IF EXISTS `vcs`.`s8g`');
$sql0 = mysql_query("SELECT * FROM `sindex`  WHERE sem='s8'");
	while ($row1 = mysql_fetch_array($sql0, MYSQL_NUM))
	{$admnoe=$row1[0];
		mysql_query("DELETE FROM `vcs`.`sindex` WHERE `sindex`.`admno` = '$admnoe'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8a'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8b'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8c'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8d'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8e'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8f'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	$sqle = mysql_query("SELECT * FROM `parent`  WHERE class='s8g'"); //del s8 from parent
	while ($rowe = mysql_fetch_array($sqle, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`parent` WHERE `parent`.`si` = '$si'");
		
	}
	
	
	
	
	}
	mysql_query("RENAME TABLE `vcs`.`$preva` TO `vcs`.`$newa`");
	mysql_query("RENAME TABLE `vcs`.`$prevb` TO `vcs`.`$newb`");
	mysql_query("RENAME TABLE `vcs`.`$prevc` TO `vcs`.`$newc`");
	mysql_query("RENAME TABLE `vcs`.`$prevd` TO `vcs`.`$newd`");
	mysql_query("RENAME TABLE `vcs`.`$preve` TO `vcs`.`$newe`");
	mysql_query("RENAME TABLE `vcs`.`$prevf` TO `vcs`.`$newf`");
	mysql_query("RENAME TABLE `vcs`.`$prevg` TO `vcs`.`$newg`");
	//dont forget sindex parent and teacher changes and page for teacher edit by admin
	$sem="s".$i;
	$nsem="s".$j;
	
	$sql = mysql_query("SELECT * FROM `sindex`  WHERE sem='$sem'");
	while ($row = mysql_fetch_array($sql, MYSQL_NUM))
	{$admno=$row[0];
		mysql_query("UPDATE `sindex` SET sem='$nsem' WHERE admno='$admno'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$preva'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newa' WHERE si='$si'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$prevb'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newb' WHERE si='$si'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$prevc'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newc' WHERE si='$si'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$prevd'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newd' WHERE si='$si'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$preve'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newe' WHERE si='$si'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$prevf'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newf' WHERE si='$si'");
		
	}
	$sqlp = mysql_query("SELECT * FROM `parent`  WHERE class='$prevg'");
	while ($row = mysql_fetch_array($sqlp, MYSQL_NUM))
	{$si=$row[0];
		mysql_query("UPDATE `parent` SET class='$newg' WHERE si='$si'");
		
	}
	
	
	
	}
	mysql_query("CREATE TABLE `s3a` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
mysql_query("CREATE TABLE `s3b` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
mysql_query("CREATE TABLE `s3c` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
mysql_query("CREATE TABLE `s3d` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
mysql_query("CREATE TABLE `s3e` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
mysql_query("CREATE TABLE `s3f` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
mysql_query("CREATE TABLE `s3g` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` VARCHAR( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");
$sqc=mysql_query("SELECT * FROM `chat` ");
	while ($rowe = mysql_fetch_array($sqc, MYSQL_NUM))
	{$si=$rowe[0];
		mysql_query("DELETE FROM `vcs`.`chat` WHERE `chat`.`si` = '$si'");
		
	}	
}


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
</div>
<form method="post">
<tr><td><button type="submit" name="allsem">PROMOTE ALL SEMESTERS</button></td></tr>
<tr><td><button type="submit" name="thirdsem">PROMOTE ALL SEMEhhRS</button></td></tr>

</form>
</body>
</html>
