<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: default.php");
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
    <label>VIRTUAL CLASSROOM</label>
    </div>
    <div id="right">
    	<div id="content">
        	hi' <?php echo $_SESSION['user']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>


<?php

//select class
$teaname=$_SESSION['user'];
$id=$_SESSION['idno'];
$res=mysql_query("SELECT * FROM teacher WHERE idno='$id'");
	$index=mysql_fetch_array($res);



$sem=explode(",",$index['sem']);
$batch=explode(",",$index['batch']);
$subh=explode(",",$index['subjects']);
for($i=0;$i<$index['noc'];$i++)
	echo $sem[$i];

//selection  of class list

if(isset($_POST['sub1']))
{
    $GLOBALS['fsem']=$_POST['sem'];
$GLOBALS['fbatch']=$_POST['batch'];
$_SESSION['tclass']=$fsem[0].$fbatch[0];
header("Location: tmsg1.php");
echo $_SESSION['tclass'];
//$GLOBALS['fsubh']=$_POST['subject'];
//$subject=$fsubh[0];
     // $folder=$fsem[0].$fbatch[0]."uploads";
	  //$table=$fsem[0].$fbatch[0];
	//  echo $folder;
}
	  ?>

   
      
      <form action="" method="POST" enctype="multipart/form-data">
	  Semeseter: <select name="sem[]">
                     <optgroup label="Semester">
					 <?php
					 for($i=0;$i<$index['noc'];$i++)
					 { ?>
                        <option value="<?php echo $sem[$i]; ?>"><?php echo $sem[$i]; ?></option>
					 <?php } ?>
                     </optgroup>

  
              </select>
			  Batch: <select name="batch[]">
                     <optgroup label="Batch">
					 <?php
					 for($i=0;$i<$index['noc'];$i++)
					 { ?>
                        <option value="<?php echo $batch[$i]; ?>"><?php echo $batch[$i]; ?></option>
					 <?php } ?>
                     </optgroup>

  
              </select>
			 
         
		 <button type="submit" name="sub1">Select</button>
      </form>
     
			  


<div id="body">
	
</div>

</body>
</html>