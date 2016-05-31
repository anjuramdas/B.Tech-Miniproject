<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['puser']))
{
	header("Location: plogin.php");
}
if(isset($_POST['sub']))
{$_SESSION['ppageid']=$_POST['student'];
echo $_SESSION['ppageid'];  //page id teacher name

	header("Location: pmsg2.php");
}

$ano=$_SESSION['pid'];
$in=mysql_fetch_array(mysql_query("SELECT * FROM parent WHERE admno=$ano"));
$class=$in['class'];
$sql=$sql = mysql_query("SELECT * FROM subindex WHERE class='$class'");
?><form method="post"><select name="student"><optgroup label="teacher">
<?php
while($row=mysql_fetch_array($sql,MYSQL_NUM))
{
//$table=$_SESSION['usertable'];
//$admno=$_SESSION['admno'];
//res=mysql_query("SELECT * FROM parent WHERE admno=$admno");
//$userRow=mysql_fetch_array($res);
?>

 <option value="<?php echo $row[3]; ?>"><?php echo $row[3]; ?></option>
<?php } ?>
</optgroup>
</select>
<button type="submit" name="sub">Select</button>
</form>
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
	
</div>

</body>
</html>