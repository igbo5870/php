<!DOCTYPE html>
<html lang=fr>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercie 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="post">
		<label for="field-login">Last name : </label>
		<input type="text" id="field-login" value="" name="name">
        <br>
        <label for="field-login">First name : </label>
		<input type="text" id="field-login" value="" name="name">
        <br>
		<input type="submit" value="Valider">
	</form>
    <?php 
    if(!empty($_POST)){
        session_start();
        echo  "session status = ".session_status()."<br>";
        $last_name = $_POST["name"];
        echo "Your last name is ".$last_name."<br>";
       
        
    }elseif(!empty($_POST["name"])){
        echo "Blbla"
    }
    /**
    * Creer un formulaire qui demande le nom de l'utilisateur
    * une fois envoyé
    * afficher le nom et demander le prenom
    * enfin afficher le nom ET le prénom après la validation    
    *
    * Indice : il faut utiliser les sessions
    */

    ?>
</body>
</html>

