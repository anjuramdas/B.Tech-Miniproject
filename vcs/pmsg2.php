<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['puser']))
{
	header("Location: plogin.php");
}
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

<?php $pageid=$_SESSION['ppageid'];
$pn=$_SESSION['puser'];	$sql = mysql_query("SELECT * FROM chat WHERE name='$pn' AND pageid='$pageid'");
$sql2 = mysql_query("SELECT * FROM chat WHERE pageid='$pn' AND name='$pageid'");
if(isset($_POST['btn']))
{
	$msg=$_POST['msg'];
	$name=$_SESSION['puser'];
	$pageid=$_SESSION['ppageid'];
	//echo $msg;
	//echo $name;
	//echo $pageid;
	mysql_query("INSERT INTO `chat`(name,msg,pageid) VALUES('$name','$msg','$pageid')");
}

//$data = mysql_fetch_array($sql);
while ($row = mysql_fetch_array($sql, MYSQL_NUM)) {
    printf("Name: %s <br/>", $row[1]);
	 printf("message: %s <br/>", $row[2]);
	 echo "<br>";
}
while ($row1 = mysql_fetch_array($sql2, MYSQL_NUM)) {
    printf("Name: %s <br/>", $row1[1]);
	 printf("message: %s <br/>", $row1[2]);
	 echo "<br>";
}



?>

<form method="post">
                            
    <br><br>                
  Comment / Reply:<br><br><form method="post">
<textarea name="msg" id="textarea" cols="30" rows="5">YOUR mESSAGE hERE </textarea>
<button type="submit" name="btn">Post</button>
</form></div>      </div>              
</div>              

	
	
</div>

</body>
</html>