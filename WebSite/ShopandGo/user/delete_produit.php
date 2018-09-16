<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `panier` WHERE `id_panier` = '$_REQUEST[id_panier]'") or die(mysqli_error());
	 header("location: cart.php");
