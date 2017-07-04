<?php
	define ('BASEPATH','YES');
	session_start();
	
	require("libs/URL.php");
	require("libs/Controller.php");
	require("libs/View.php");
	require("libs/Database.php");
	require("libs/Model.php");
	require("libs/Paginator.php");
	require("libs/File.php");
	
	require("config/paths.php");
	require("config/database.php");
	$url = new URL();
?>