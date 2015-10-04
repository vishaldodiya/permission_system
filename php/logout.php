<?php
	session_start();
	session_destroy();
	header("location:/application_system/login.php");
?>