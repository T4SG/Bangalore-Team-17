<?php
require_once 'db_config.php';
require_once 'utils.php';


function create_connection()
{
	$con= new mysqli(SERVER_NAME,USERNAME,PASSWORD);
	if($con->connect_error)
	{
		die("Connection to the database failed!");
	}
	$con->select_db(DATABASE_NAME) or die("Unable to select the database");
	return $con;
}
function destroy_connection($con)
{
	mysqli_close($con);
}

?>	