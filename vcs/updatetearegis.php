<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$idno = $_SESSION['idno'];
	$name = $_SESSION['namet'];
	$noc = $_SESSION['noc'];
	
	$address = $_SESSION['address'];
	$phno = $_SESSION['phno'];
	$email= $_SESSION['email'];
	
	$password= $_SESSION['password'];
	$bgroup=" ";
	$attendance=5;
	
	
	

 $capture_field_vals ="";
    foreach($_POST["sem"] as $key => $text_field){
        $capture_field_vals .= $text_field .",";
    }
    
    echo $capture_field_vals;
	
	echo "<br>";
	
	$capture_field_vals1 ="";
    foreach($_POST["batch"] as $key => $text_field){
        $capture_field_vals1 .= $text_field .",";
    }
    
    echo $capture_field_vals1;
	
	echo "<br>";
	
	$capture_field_vals2 ="";
    foreach($_POST["sub"] as $key => $text_field){
        $capture_field_vals2 .= $text_field .",";
    }
    
    echo $capture_field_vals2;
	
	if(mysql_query("INSERT INTO teacher(idno,name,noc,sem,batch,subjects,address,phno,email,bgroup,attendance,password) VALUES('$idno','$name','$noc','$capture_field_vals','$capture_field_vals1','$capture_field_vals2','$address','$phno','$email','$bgroup','$attendance','$password')"))
	{
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
<?php
$noc=$_SESSION['noc'];
for($i=0;$i<$noc;$i++)
{ ?>






<table align="center" width="60%" border="0">
<td>
<tr>

Semeseter: <select name="sem[]">
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
</td>
<td>
<tr>

Batch: <select name="batch[]">
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

</td>
<td>
<tr>

Subject: <select name="sub[]">
                  
					 
                     <optgroup label="Semester 1,2">
                        <option value="maths1101">Engineering Mathematics 1</option>
                        <option value="phy1102">Engineering Physics</option>
                        <option value="chem1103">Engineering Chemistry</option>
                       <option value="mech1104">Engineering Mechanics</option>
                        <option value="graph1105">Engineering Graphics</option>
                        <option value="civil1106">Basic Civil and Mechanical</option>
                        <option value="ee1107">Basic Electrical and Electronics</option>
                      <option value="cp1108">Computer Programming</option>
                        <option value="tcs1109">Environmental studies and TCS</option>
                        
					 </optgroup>
					 <optgroup label="Semester 3">
                        <option value="maths1301">Engineering Mathematics 2</option>
                        <option value="ld1302">Logic Design (CS)</option>
						<option value="dcs1303">Discrete Computational Structures (CS)</option>
                        <option value="oop1304">Object Oriented Programming (CS)</option>
                       <option value="ppl1305">Principles of Programming Languages (CS)</option>
                        <option value="edc1306">Electroic Devices and Circuits (CS/EE)</option>
                        <option value="prp1302">Probablity and Random Process (EC)</option>
                        <option value="nt1303">Network Theory (EC/EI)</option>
						<option value="de1304">Digital Electronics (EC)</option>
						<option value="sse1305">Solid State Electronics (EC/EI)</option>
						<option value="ec1306">Electronic Circuits 1 (EC/EI)</option>
                     </optgroup>
					 <optgroup label="Semester 4">
                        <option value="maths1401">Engineering Mathematics 3</option>
                        <option value="mp1402">Microprocessors (CS)</option>
                        <option value="cao1403">Computer Architecture and Organisation (CS)</option>
                       <option value="alc1404">Automata Languages and Computations (CS)</option>
                        <option value="dsa1405">Data Structures and Algorithms (CS)</option>
                        <option value="dc1406">Data Communications (CS)</option>
                        <option value="S8">Semester 8</option>
                     </optgroup>
					 <optgroup label="Semester 5">
                        <option value="maths1501">Engineering Mathematics 4</option>
                        <option value="sp1502">System Programming (CS)</option>
                        <option value="se1503">Software Engineering (CS)</option>
                       <option value="cg1504">Computer Graphics (CS)</option>
                        <option value="dbms1505">Database Management Systems (CS)</option>
                        <option value="msd1506">Microprocessor Based System Design (CS)</option>
                        <option value="S8">Semester 8</option>
                     </optgroup>
					 <optgroup label="Semester 6">
                       <option value="dsp1601">Digital Signal Processing (cs)</option>
                        <option value="cc1602">Compiler Construction (cs)</option>
                        <option value="os1603">Operating System (cs)</option>
                       <option value="cn1604">Computer Network(cs)</option>
                        <option value="mcs1605">Modern Control System (cs)</option>
                        <option value="st1606E1">Software Test(cs)</option>
                        <option value="sms1606E2">System Modeling & Simulation (cs)</option>
						<option value="sic1606E3">Security in Computing (cs)</option>
						<option value="es1606E4">Embedded System (cs)</option>
                     </optgroup>
					 <optgroup label="Semester 7">
                        <option value="aapp1701">Inustrial Organization and Management </option>
                        <option value="ai1702">Artificial Intelligence (cs)</option>
                        <option value="acn1703">Advanced Computer Network(cs)</option>
                       <option value="ada1704">Analysis and Design of Algorithms (cs)</option>
                        <option value="spm1705E1">Software Project Mangement (cs)</option>
                        <option value="gc1705E1">Grid Computing (cs)</option>
                       
                       </optgroup>
					 
					<optgroup label="Semester 8">
                        <option value="aapp1801">Advanced Architecture and Parallel Processing (cs)</option>
                        <option value="oomd1802">Object Oriented Modelling and Design (cs)</option>
                        <option value="dc18803">Distributed Computing (cs)</option>
                       <option value="or1804E1">Operations Research</option>
                        <option value="or1804E2">Data Mining(cs)</option>
                        <option value="or1804E3">Mobile Computing (cs)</option>
                        <option value="or1804E4">Agent Based Intelligent System (cs)</option>
                     </optgroup><optgroup label="Subject">
                        <option value="S2">Semester 1,2</option>
                        <option value="S3">Semester 3</option>
                        <option value="S4">Semester 4</option>
                       <option value="S5">Semester 5</option>
                        <option value="S6">Semester 6</option>
                        <option value="S7">Semester 7</option>
                        <option value="S8">Semester 8</option>
                     </optgroup>

  
              </select>
</tr>
</td>
</table>
<?php } ?>
<table>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>