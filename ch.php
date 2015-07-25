<?php
session_start();
echo $_SESSION["login"];

if(!(isset($_SESSION["login"])))
{
session_destroy();
header("location:../login.html");
}

if(!isset($_SESSION["type"]))
{
session_destroy();
header("location:../login.html");
}

?>
<table>
<tr><td><a href="assesmentresult.php" >Assesment Results</a> </td><td></td></tr>
<tr><td><a href="addstudents.php" >Add Students</a> </td><td></td></tr>
<tr><td><a href="smsdatabase.php" >SMS Students</a> </td><td></td></tr>
<tr><td><a href="createcourse.php" >Create Course</a> </td><td></td></tr>
<tr><td><a href="createevents.php" >Create Events</a> </td><td></td></tr>
<tr><td><a href="logout.php" >Logout</a> </td><td></td></tr>

</table>
<?php

?>