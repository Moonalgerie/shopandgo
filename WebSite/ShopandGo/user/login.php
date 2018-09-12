<?php
	if(ISSET ($_POST['login'])){
		$pseudo = $_POST['pseudo'];
		$nom_user = $_POST['nom_user'];
		$mp_user = $_POST['mp_user'];
		$query = $conn->query("SELECT * FROM `user` WHERE `nom_user` = '$nom_user' && `mp_user` = '$mp_user'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;

		if($row > 0){
			session_start();
			$_SESSION['id_user'] = $fetch['id_user'];
			header('location:home.php');
		}else{
			echo "<center><labe style = 'color:red;'>Nom ou mot de passe invalide</label></center>";
		}
	}
?>
