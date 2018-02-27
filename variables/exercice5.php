<?php
 session_start();                                           // Démarrage de la session sur la page courante
 ?>
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
		<label for="field-login">Name : </label>
		<input type="text" id="field-login" value="" name="name">
        <br>
		<input type="submit" value="Valider">
	</form>
    <?php  
        if(isset($_POST["name"])){                          // Si ma requete Post existe et qu'elle n'est pas vide 
            if(!isset($_SESSION["last_name"])){             // Est ce que la vairable de session exist ?
                $_SESSION["last_name"] = $_POST["name"];    // NON ? alors je la créer ici 
                echo "Last name = ".$_SESSION["last_name"];
            }else{
                $_SESSION["first_name"] = $_POST["name"];   // Oui ? Alors j'ajoute la valeur dans une autre variable de session
                echo "Hello ".$_SESSION["first_name"]." ".$_SESSION["last_name"]; // Affichage des valeurs 
                session_unset();                            // Destruction des valeurs pour repartir de zéro (test)
            }
        }
            
    /**
    * INSTRUCTION :
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

