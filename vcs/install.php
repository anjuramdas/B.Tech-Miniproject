<?php
include_once 'dbconnect.php';

for($i=3;$i<=8;$i++)
{

	$name="sessionals".$i."a";
	$name1="sessionals".$i."b";
	$name2="sessionals".$i."c";
	$name3="sessionals".$i."d";
	$name4="sessionals".$i."e";
	$name5="sessionals".$i."f";
	$name6="sessionals".$i."g";
	//mysql_query("ALTER TABLE `$name` CHANGE `si` `si` INT(3) NOT NULL");
//	mysql_query("ALTER TABLE `$name1` CHANGE `si` `si` INT(3) NOT NULL");
	//mysql_query("ALTER TABLE `$name2` CHANGE `si` `si` INT(3) NOT NULL");
	//mysql_query("ALTER TABLE `$name3` CHANGE `si` `si` INT(3) NOT NULL");
	//mysql_query("ALTER TABLE `$name4` CHANGE `si` `si` INT(3) NOT NULL");
	//mysql_query("ALTER TABLE `$name5` CHANGE `si` `si` INT(3) NOT NULL");
	//mysql_query("ALTER TABLE `$name6` CHANGE `si` `si` INT(3) NOT NULL");
mysql_query("CREATE TABLE `$name` ( `id` VARCHAR( 50 ) NOT NULL , `admno` VARCHAR( 100 ) NOT NULL PRIMARY KEY , `subjects` VARCHAR( 100 ) NOT NULL , `assignments` VARCHAR( 25 ) NOT NULL, `sereis1` VARCHAR( 25 ) NOT NULL, `series2` VARCHAR( 25 ) NOT NULL, `attendance` VARCHAR( 25 ) NOT NULL, `total` FLOAT NOT NULL) ENGINE = MYISAM");
//mysql_query("CREATE TABLE `$name2` ( `id` VARCHAR( 50 ) NOT NULL , `admno` VARCHAR( 100 ) NOT NULL PRIMARY KEY , `subjects` VARCHAR( 100 ) NOT NULL , `assignments` VARCHAR( 25 ) NOT NULL, `sereis1` VARCHAR( 25 ) NOT NULL, `series2` VARCHAR( 25 ) NOT NULL, `attendance` VARCHAR( 25 ) NOT NULL, `total` FLOAT NOT NULL) ENGINE = MYISAM");
//mysql_query("CREATE TABLE `$name3` ( `id` VARCHAR( 50 ) NOT NULL , `admno` VARCHAR( 100 ) NOT NULL PRIMARY KEY , `subjects` VARCHAR( 100 ) NOT NULL , `assignments` VARCHAR( 25 ) NOT NULL, `sereis1` VARCHAR( 25 ) NOT NULL, `series2` VARCHAR( 25 ) NOT NULL, `attendance` VARCHAR( 25 ) NOT NULL, `total` FLOAT NOT NULL) ENGINE = MYISAM");
//mysql_query("CREATE TABLE `$name4` ( `id` VARCHAR( 50 ) NOT NULL , `admno` VARCHAR( 100 ) NOT NULL PRIMARY KEY , `subjects` VARCHAR( 100 ) NOT NULL , `assignments` VARCHAR( 25 ) NOT NULL, `sereis1` VARCHAR( 25 ) NOT NULL, `series2` VARCHAR( 25 ) NOT NULL, `attendance` VARCHAR( 25 ) NOT NULL, `total` FLOAT NOT NULL) ENGINE = MYISAM");
//mysql_query("CREATE TABLE `$name5` ( `id` VARCHAR( 50 ) NOT NULL , `admno` VARCHAR( 100 ) NOT NULL PRIMARY KEY , `subjects` VARCHAR( 100 ) NOT NULL , `assignments` VARCHAR( 25 ) NOT NULL, `sereis1` VARCHAR( 25 ) NOT NULL, `series2` VARCHAR( 25 ) NOT NULL, `attendance` VARCHAR( 25 ) NOT NULL, `total` FLOAT NOT NULL) ENGINE = MYISAM");
//mysql_query("CREATE TABLE `$name6` ( `id` VARCHAR( 50 ) NOT NULL , `admno` VARCHAR( 100 ) NOT NULL PRIMARY KEY , `subjects` VARCHAR( 100 ) NOT NULL , `assignments` VARCHAR( 25 ) NOT NULL, `sereis1` VARCHAR( 25 ) NOT NULL, `series2` VARCHAR( 25 ) NOT NULL, `attendance` VARCHAR( 25 ) NOT NULL, `total` FLOAT NOT NULL) ENGINE = MYISAM");

//mysql_query("CREATE TABLE `$name6` ( `si` INT( 3 ) NOT NULL AUTO_INCREMENT PRIMARY KEY , `mon` VARCHAR( 50 ) NOT NULL , `tue` VARCHAR( 50 ) NOT NULL , `wed` VARCHAR( 50 ) NOT NULL, `thu` VARCHAR( 50 ) NOT NULL, `fri` VARCHAR( 50 ) NOT NULL, `total` INT( 3 ) NOT NULL, `nop` INT( 3 ) NOT NULL) ENGINE = MYISAM");
//for($x=0;$x<80;$x++)
//{$y=$x+1;
//mysql_query("INSERT INTO `$name`(si,mon,tue,wed,thu,fri,total,nop) VALUES('$x','0','0','0','0','0','0','0')");
//mysql_query("INSERT INTO `$name3`(si,mon,tue,wed,thu,fri,total,nop) VALUES('$x','0','0','0','0','0','0','0')");
//mysql_query("INSERT INTO `$name4`(si,mon,tue,wed,thu,fri,total,nop) VALUES('$x','0','0','0','0','0','0','0')");
//mysql_query("INSERT INTO `$name5`(si,mon,tue,wed,thu,fri,total,nop) VALUES('$x','0','0','0','0','0','0','0')");
//mysql_query("INSERT INTO `$name6`(si,mon,tue,wed,thu,fri,total,nop) VALUES('$x','0','0','0','0','0','0','0')");
//mysql_query("INSERT INTO `$name1`(si,mon,tue,wed,thu,fri,total,nop) VALUES('$x','0','0','0','0','0','0','0')");
//mysql_query("UPDATE $name SET nop='30' WHERE si='$x'");
//mysql_query("UPDATE $name1 SET nop='30' WHERE si='$x'");
//mysql_query("UPDATE $name2 SET nop='30' WHERE si='$x'");
//mysql_query("UPDATE $name3 SET nop='30' WHERE si='$x'");
//mysql_query("UPDATE $name4 SET nop='30' WHERE si='$x'");
//mysql_query("UPDATE $name5 SET nop='30' WHERE si='$x'");
//mysql_query("UPDATE $name6 SET nop='30' WHERE si='$x'");
//mysql_query("ALTER TABLE `$name` CHANGE `si` `si` INT(3) NOT NULL");

//}
}

//ALTER TABLE `attendances2a` ADD `week` INT(3) NOT NULL AFTER `nop`;
?>