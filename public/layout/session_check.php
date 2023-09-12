<?php 
session_start();
if(!isset($_SESSION['admin']))
{
	header("location: ../../logout.php");
}
$user_roll=$_SESSION['user_roll'];
$user_id=$_SESSION['user_id'];
?>