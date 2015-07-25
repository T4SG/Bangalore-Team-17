<?php
require_once 'db_connect.php';

class ReadFromSMS
{
	private $db;
	function __construct()
	{
		$this->db=create_connection();
	}
	function __destruct()
	{
		destroy_connection($this->db);
	}
	function ReadSMS()
	{
		if($_SERVER["REQUEST_METHOD"]=="GET")
		{
			$from=$_GET["From"];
			$body=$_GET["Body"];
			$body_split=explode(" ",$body);
			$name=$body_split[1];
			$course=$body_split[2];
			$query="insert into sms (name,course,phone) values('$name','$course','$from') ";
			$this->db->query($query);
		}
	}
}
$obj=new ReadFromSMS();
$obj->ReadSMS();

?>