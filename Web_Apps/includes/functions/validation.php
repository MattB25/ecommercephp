<?php

function validate_pass($password)
{
	$ok = true;
	//password is set as valid by default
	if (strlen($password) < 8)
	{
		$ok = false;
	}
	//if password is less than 8 cahracters, it becomes invalid
	return $ok;
}


?>