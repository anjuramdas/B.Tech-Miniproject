
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

$subject=$_SESSION['subsel'];

$table2=$table."uploads";
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
        	hi' <?php echo $userRow['name']; ?>&nbsp<a href="stlogout.php?logout">Sign Out</a> 
        </div>
    </div>
</div>
<div id="container1" style="width:100%;">
<div id="left" style="float:left; width:50%;">
<div id="body">
	
</div>
</body>
</html>
<?php
$sql = mysql_query("SELECT * FROM $table2  WHERE subject='$subject'");
while ($row = mysql_fetch_array($sql, MYSQL_NUM)) {?>
<a href="<?php echo $row[2]; ?>"><?php echo $row[1]; ?></a>


<?php
   //echo $row[1];
 
	 echo "<br>";
}

?>
</div></div>
<div id="container" style="width:100%;">
<div id="right" style="float:right; width:50%;">
<br><br>
<br>
<br><br><h3>ASK dOUBTS?</h3><br><br><br><?php

$sql = mysql_query("SELECT * FROM chat WHERE pageid='$table'");
if(isset($_POST['btn']))
{
	$msg=$_POST['msg'];
	$name=$_SESSION['user'];
	$pageid=$table;
	echo $msg;
	echo $name;
	echo $pageid;
	mysql_query("INSERT INTO `chat`(name,msg,pageid) VALUES('$name','$msg','$pageid')");
	header("Location: homesubview.php");
}

//$data = mysql_fetch_array($sql);
while ($row = mysql_fetch_array($sql, MYSQL_NUM)) {
    printf("Name: %s <br/>", $row[1]);
	 printf("message: %s <br/>", $row[2]);
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
