<!DOCTYPE html>
<html>
<head>
	<title>Exercice 1 - PHP - Variable</title>
</head>
<body>
	<h1>Exercice 1</h1>
	<form method="post">
		<label for="field-login" required>Login : </label>
		<input type="text" id="field-login" value="" name="name">
		<label for="field-password" required >password: </label>
		<input type="password" id="field-password" value="" name="password">
		<input type="submit" value="Valider">
	</form>
	<?php
	if(!empty($_POST)){  // si la requete post est différents de vide alors je traite 
		$name = $_POST['name'];
		$password = $_POST['password'];
		$ip = $_SERVER['REMOTE_ADDR'];

		if(empty($name) || empty($password)){ // Vérification des champs du formulaire
			echo "Entry login or password";
		}else{
			echo '<p>'.'Your login = '.$_POST['name'];
			echo '<br>';
			echo 'Your password = '.$_POST['password'];
			echo '<br>';
			echo 'Your ip adress = '.$_SERVER['REMOTE_ADDR'].'</p>';
		}
	}
/**
*
* Créer un formulaire qui demande un login et un mot de passe
* puis une fois le formulaire validé, afficher :
* 
* - Le login
* - Le mot de passe
* - L'adresse ip du client
*/
?>
</body>
</html>