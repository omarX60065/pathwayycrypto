<?php

		
	session_start();
	session_unset();
    session_destroy();
       // Redirecting To Home Page 
    header("Location:../index.php"); 
	exit();

?>