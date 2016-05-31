<?php
session_start();

include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$rollno = mysql_real_escape_string($_POST['rollno']);
	$name = mysql_real_escape_string($_POST['name']);
	$sem = mysql_real_escape_string($_POST['sem']);

	$batch = mysql_real_escape_string($_POST['batch']);
	$admno = mysql_real_escape_string($_POST['admno']);
	$address =mysql_real_escape_string($_POST['address']);

	$phno = mysql_real_escape_string($_POST['phno']);
	$email = mysql_real_escape_string($_POST['email']);
	$bgroup =mysql_real_escape_string($_POST['bgroup']);

	$attendance=0;
	$password = md5(mysql_real_escape_string($_POST['password']));
$table=$sem.$batch;
echo $table;
	
	if(mysql_query("INSERT INTO $table(rollno,name,sem,batch,admno,address,phno,email,bgroup,attendance,password) VALUES('$rollno','$name','$sem','$batch','$admno','$address','$phno','$email','$bgroup','$attendance','$password')"))
	{mysql_query("INSERT INTO sindex(admno,sem,batch) VALUES('$admno','$sem','$batch')");
		?>
        <script>alert('successfully registered ');</script>

        <?php
	}
	else
	{
		?>
        <script>alert('error while registering you...');</script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="rollno" placeholder="Roll Number" required /></td>
</tr>
<tr>
<td><input type="text" name="name" placeholder="Name" required /></td>
</tr>
<tr>

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
</tr>
<tr>
<td><input type="text" name="admno" placeholder="Admission Number" required /></td>
</tr>
<tr>
<td><input type="text" name="address" placeholder="Address" required /></td>
</tr>
<tr>
<td><input type="text" name="phno" placeholder="Phone Number" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Email" required /></td>
</tr>
<tr>
<td><input type="text" name="bgroup" placeholder="Blood" required /></td>
</tr>
<tr>
<td><input type="text" name="password" placeholder="Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="stindex.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>