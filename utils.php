<?php

date_default_timezone_set("Asia/Kolkata");

function sanitize_input($db,$unsanitized_array)
{
	foreach ($unsanitized_array as $key=>$value)
	{
		$_POST[$key]=$db->real_escape_string($value);
	}
}
/* function execute_prepared_statement($db,$query,$params_type_array)
{
	$stmt=$db->prepare($query);
	call_user_func_array(array($stmt,'bind_param'),$params_type_array);
	$stmt->execute();
	$result=$stmt->get_result();
	return $result;
} */
/* function send_response($response)
{
	echo json_encode($response);
} */
?>
