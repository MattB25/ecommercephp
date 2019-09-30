<?php
require "includes/application_top.php";
session_destroy();
header('location: login.php');

//stops session and sends user to login page
?>