<?php
include_once 'dbconnect.php';
session_start();
if(isset($_SESSION['puser'])!="")
{
	header("Location: phome.php");
}
if(isset($_POST['button1']))
{$GLOBALS['admno']=$_POST['student'];
$class=$_SESSION['class12'];
$index=mysql_fetch_array(mysql_query("SELECT * FROM $class WHERE admno='$admno'"));
$sname=$index['name'];
$pname=$_SESSION['p12'];
$pass=md5($_SESSION['pass']);
mysql_query("INSERT INTO parent(pname,sname,admno,class,password) VALUES('$pname','$sname','$admno','$class','$pass')");
}
if(isset($_POST['select']))
{$sem=$_POST['sem'];
$batch=$_POST['batch'];
$_SESSION['p12']=$_POST['pname'];

$_SESSION['pass']=$_POST['pass'];
$_SESSION['class12']=$sem.$batch;
$class=$_SESSION['class12'];
$sql = mysql_query("SELECT * FROM $class");	
?>
<form method="post">
Student: <select name="student">
<optgroup label="student">
<?php while ($row = mysql_fetch_array($sql, MYSQL_NUM)) {

 ?>
                        <option value="<?php echo $row[4]; ?>"><?php echo $row[1]; ?></option>




<?php
	
}}
?>
</select>
<button type="submit" name="button1">Select Student</button>
</form>
<form method="post">
Parent Name:<input type="text" name="pname" placeholder="parent name" required/><br>
Password:<input type="password" name="pass" placeholder="Password" required/><br>
(Note: Students admission number will be taken as the username)
<br>
Semeseter: <select name="sem">
                     <optgroup label="Semester">
                        <option value="s2">Semester 1,2</option>
                        <option value="s3">Semester 3</option>
                        <option value="s4">Semester 4</option>
                       <option value="s5">Semester 5</option>
                        <option value="s6">Semester 6</option>
                        <option value="s7">Semester 7</option>
                        <option value="s8">Semester 8</option>
                     </optgroup>

  
              </select>
</tr>
<tr>

Batch: <select name="batch">
                     <optgroup label="Batch">
                        <option value="a">Batch A</option>
                        <option value="b">Batch B</option>
                        <option value="c">Batch C</option>
                       <option value="d">Batch D</option>
                        <option value="e">Batch E</option>
                        <option value="f">Batch F</option>
                        <option value="g">Batch G</option>
                     </optgroup>

  
              </select>
			  <button type="submit" name="select">Select</button>
			  </form>