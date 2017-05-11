<?php 
	include('db/config.php');
	session_destroy();
	{
		header('location:index.php');
	}
?>