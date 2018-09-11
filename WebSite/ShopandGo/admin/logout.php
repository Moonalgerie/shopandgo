<?php
	session_start();
	session_unset(id_admin);
	header("location:index.php");
?>
