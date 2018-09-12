
<?php
	if(ISSET($_POST['add_account'])){
		$nom_user = $_POST['nom_user'];
		$mp_user = $_POST['mp_user'];
		$mp_user2 = $_POST['mp_user2'];
		$query = $conn->query("SELECT * FROM `user` WHERE `nom_user` = '$nom_user'") or die(mysqli_error());

			if($mp_user != $mp_user2)
			{
			echo "<center><label style = 'color:red;'>Erreur!! : Mot de passe incorrect</center></label>";
			}
			else
			{
				$conn->query("INSERT INTO `user` (nom_user, mp_user) VALUES('$nom_user' , '$mp_user')") or die(mysqli_error());
			echo "<center><label style = 'color:green;'>Inscription avec success....</center></label>";
				header("location:inscrsucces.php");



			}
	}
?>
