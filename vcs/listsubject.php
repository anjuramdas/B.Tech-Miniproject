

<?php
session_start();
include_once 'dbconnect.php';
if(isset($_POST['bur']))
{$_SESSION['subsel']=$_POST['subject'];

	header("Location: homesubview.php");
	
}
if(!isset($_SESSION['user']))
{
	header("Location: stdefault.php");
}
$table=$_SESSION['usertable'];
$admno=$_SESSION['admno'];
$res=mysql_query("SELECT * FROM $table WHERE admno=$admno");
$userRow=mysql_fetch_array($res);
$table0=$_SESSION['subview'];
$table2=$table."uploads";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<form method="post">
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
	<tr><td>
	
	
	
	</td></tr>
</div>

</body>
</html> <select name="subject">
                     <optgroup label="Subjects">
<?php
		
		
$sql = mysql_query("SELECT * FROM subindex WHERE class='$table'");
echo "<center>";
echo "Select Subject :"."&nbsp";
while ($row = mysql_fetch_array($sql, MYSQL_NUM)) {?>
   
                        <option value="<?php echo $row[2]; ?>"><?php echo $row[2]; ?></option>
                   
                 
	 
<?php } 

?>    </optgroup>

  
              </select>
<button type="submit" name="bur">Select</button>
</center>
</form>
</div>