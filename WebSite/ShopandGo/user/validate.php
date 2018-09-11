<?php
	session_start();
	if(!ISSET($_SESSION['id_user'])){
		header("location:index.php");
	}
