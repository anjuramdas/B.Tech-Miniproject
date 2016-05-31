<?php
@mysql_connect("localhost","root","");
mysql_select_db("vcs");
mysql_query("CREATE TABLE verumshow(person_id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, first_name CHAR(30) NOT NULL, last_name CHAR(30) NOT NULL, email_address VARCHAR(50))");
?>