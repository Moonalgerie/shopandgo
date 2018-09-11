<?php 
	session_start();
	if(!ISSET($_SESSION['id_admin'])){
		header("location:index.php");
	}
