<?php
session_start();
if(!isset($_SESSION["login"]))
{
	session_destroy();
	header("location:../login.html");
}
//remember to destroy his session as admin, remove from php global
?>
<html>
<a href="addcentrehead.php">Add Centre Head</a>
<a href="addmentor.php">Add Mentor</a>

</html>