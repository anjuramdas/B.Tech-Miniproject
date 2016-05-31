<div id="container" style="width:100%;">
<div id="right" style="float:right; width:50%;">

<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: stindex.php");
}
$sql = mysql_query("SELECT * FROM chat WHERE pageid='1'");
if(isset($_POST['btn']))
{
	$msg=$_POST['msg'];
	$name=$_SESSION['user'];
	$pageid=1;
	echo $msg;
	echo $name;
	echo $pageid;
	mysql_query("INSERT INTO `chat`(name,msg,pageid) VALUES('$name','$msg','$pageid')");
}

//$data = mysql_fetch_array($sql);
while ($row = mysql_fetch_array($sql, MYSQL_NUM)) {
    printf("Name: %s <br/>", $row[1]);
	 printf("message: %s <br/>", $row[2]);
	 echo "<br>";
}



?>

<form method="post">
                            
   This is left panel     <br><br>                
  Comment / Reply:<br><br><form method="post">
<textarea name="msg" id="textarea" cols="30" rows="5">YOUR mESSAGE hERE </textarea>
<button type="submit" name="btn">Post</button>
</form></div>      </div>              
</div>              
