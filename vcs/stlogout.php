<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location: stindex.php");
}
else if(isset($_SESSION['user'])!="")
{
	header("Location: sthome.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	header("Location: stindex.php");
}
?>