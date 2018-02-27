<?php
/**
* Ajouter deux elements a la fin du tableau $number
* puis afficher le nombre d'élement du tableau ainsi que le 2 eme element.
* 
* Resultat:
* 
* Nombre d'élement : 6
* Deuxieme element : 2
* 
* http://php.net/manual/fr/ref.array.php
*/



$number = [1,2,3,4];        // Tableau de nombre 
echo "<h1>Exercice 2</h1>";
echo "<p>Nombre d'élément dans le tableau avant = ".count($number)."</p>"; // Compte le nombre d'élément
array_push($number,10,6);   // Ajoute les valeurs 10 et 6 dans le tableau number
echo "<p>Nombre d'élément dans le tableau après = ".count($number)."</p>";
echo "<p>Valeur du deuxième élément du tableau = ".$number[1]."</p>";     // Affiche la valeurs du deuxième element