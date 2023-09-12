

<?php 

session_start();
if(!isset($_SESSION['admin']))
{
	header("location:logout.php");
}
else{
	$user_roll=$_SESSION['user_roll'];
include_once 'public/controller/connection.php';
include 'public/layout/navbar.php';
include 'view/dashboard/page.php';
include 'public/layout/footer.php';
}

?>
