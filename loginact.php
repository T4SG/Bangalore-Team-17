<?php
session_start();
include "config.php";
$username=mysql_real_escape_string($_POST["username"]);
$password=mysql_real_escape_string($_POST["password"]);

if($username=="" || $password=="")
{
header("location: login.html");
}
//echo "$username $password";
$sql="select * from user_autn where username='$username' and password='$password'";
$query=mysql_query($sql);
$nr=mysql_num_rows($query);

echo mysql_error();
if($nr==0)
{
include "login.html";

?>
<script> alert("Incorrect Username/Password");</script>
<?php

}else if($nr==1)
{

while($row=mysql_fetch_array($query))
{
$type =$row["type"];
$id=$row["id"];
}
}else{}

//$type=$_SESSION["usertype"];
 

//die();


if($type=="STUDENT")
{
header("location:student/student.php");

}
if($type=="CH")
{
header("location:ch/ch.php");

}
if($type=="MENTOR")
{
header("location:mentor/mentor.php");

}
if($type=="ADMIN")
{
$_SESSION["login"]=1;
header("location:admin/admin.php");

}






?>