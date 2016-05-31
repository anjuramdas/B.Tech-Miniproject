<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['puser']))
{
	header("Location: plogin.php");
}
if(isset($_POST['btn']))
{$admno=$_POST['admno'];
$_SESSION['padno']=$admno;
$index=mysql_fetch_array(mysql_query("SELECT * FROM sindex WHERE admno='$admno'"));
$class=$index[sem].$index[batch];
$_SESSION['pclass']=$class;
echo $class;
header("Location: psdetails2.php");}
//$table=$_SESSION['usertable'];
//$admno=$_SESSION['admno'];
//res=mysql_query("SELECT * FROM parent WHERE admno=$admno");
//$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $_SESSION['puser']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
	<div id="left">
    <label>VIRTUAL CLASSROOM</label>
    </div>
    <div id="right">
    	<div id="content">
        	hi' <?php echo $_SESSION['puser']; ?>&nbsp;<a href="stlogout.php?logout">Sign Out</a>
        </div>
    </div>
</div>

<div id="body">
<?php $sql=mysql_query("SELECT * FROM parent");?>
	<center> VIEW STUDENT DETAILS </center>
	<form method="post">
Student: <select name="admno">
<optgroup label="student">
<?php while ($row = mysql_fetch_array($sql, MYSQL_NUM)) {

 ?>
                        <option value="<?php echo $row[3]; ?>"><?php echo $row[2]; ?></option>




<?php
	
}

?>
</optgroup></select>
<button type="submit" name="btn">Select</button>
</form>
</div>

</body>
</html>