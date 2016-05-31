<?php
include_once 'dbconnect.php';
session_start();
$_SESSION['re']="haiooooop";
echo $_SESSION['re'];
$arr = array('Hello','World!','Beautiful','Day!');
echo sizeof($arr);
$z= implode("*",$arr);
$y=explode("*",$z);
$t[0]="hai";
$t[1]="ho";
echo $t[0]."*".$t[1];
$z1= implode("*",$t);
$y1=explode("*",$z1);
echo $y1[1];
echo $y[3];
mysql_query("CREATE TABLE `S4ABUNTY` ( `rollno` INT( 5 ) NOT NULL PRIMARY KEY , `name` VARCHAR( 25 ) NOT NULL , `sem` VARCHAR( 25 ) NOT NULL , `batch` VARCHAR( 25 ) NOT NULL , `admno` INT( 10 ) NOT NULL, `address` VARCHAR( 100 ) NOT NULL , `phno` VARCHAR(20) NOT NULL, `email` VARCHAR( 35 ) NOT NULL , `bgroup` VARCHAR( 4 ) , `attendance` INT( 5 ) , `password` VARCHAR( 50 ) NOT NULL , UNIQUE (`email`) ) ENGINE = MYISAM");

if(isset($_POST["mytext"])){
    
    $capture_field_vals ="";
    foreach($_POST["mytext"] as $key => $text_field){
        $capture_field_vals .= $text_field .", ";
    }
    
    echo $capture_field_vals;
}


?>
<form method="post">
<div class="input_fields_wrap">
    <button class="add_field_button">Add More Fields</button>
    <div><input type="text" name="mytext[]"></div>
    <div><input type="text" name="mytext[]"></div>
    <div><input type="text" name="mytext[]"></div>
    <div><input type="text" name="mytext[]"></div>
    <div><input type="text" name="mytext[]"></div>
</div>
</form>