<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location: default.php");
}
else if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	if(!isset($_SESSION['puser']))
		unset($_SESSION['puser']);
	header("Location: default.php");
}
?>