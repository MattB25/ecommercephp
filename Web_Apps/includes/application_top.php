<?php
	require "configure.php";


	if(DEBUG) #if debug is true report all errors on the page
	{
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}

	require "functions/user_login.php";
	require "functions/database_connection.php";
	require "functions/add_user.php";
	require "functions/validation.php";

	$link = db_connect();

	session_start();
?>