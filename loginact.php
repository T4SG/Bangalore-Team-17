<?php
session_start();
include"config.php";
$username=mysql_real_escape_string($_POST["username"]);
$password=mysql_real_escape_string($_POST["password"]);

if($username==""|| $password=="")
{
header("location:login.html");
}

$sql="select * from user_autn where username='$username' and password='$password'";
$query=mysql_query($sql);
$nr=mysql_num_rows($query);

if($nr==0)
{
include "login.html";
?>
<script> alert("Incorrect Username/Password");</script>
<?php

}else if($nr==1)
{

while($row=mysql_fetch_array("$query"))
{
$_SESSION["usertype"]=$row["type"];
$_SESSION["sid"]=$row["id"];
}

header("location:login.html");
/$sql2="select * from 


}




?>