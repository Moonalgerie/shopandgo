<?php
	if(ISSET($_POST['add_produit'])){
		$lib_produit = $_POST['lib_produit'];
		$prix_produit = $_POST['prix_produit'];
		$photo_produit = addslashes(file_get_contents($_FILES['photo_produit']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `produit` (lib_produit, prix_produit, photo_produit) VALUES('$lib_produit', '$prix_produit', '$photo_name')") or die(mysqli_error());
		header("location:room.php");
	}
?>
