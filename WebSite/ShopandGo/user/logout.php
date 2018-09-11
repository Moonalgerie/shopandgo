<?php
	session_start();
	session_unset(id_user);
	header("location:index.php");
?>
