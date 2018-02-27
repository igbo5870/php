<?php
/**
* Inserer le tableau $insert dans $number aprés le 3eme element
* puis afficher le resultat
* 
* Info : pour afficher un tableau utiliser la fonction var_dump()
* http://php.net/manual/fr/ref.array.php
*/



$number = [1,2,3,4];
$insert = ["A","B","C"];


/**
* Coder ici
*/
echo "<p>Avant l'ajout du deuxième tableau : </p>";
var_dump($number);
array_splice( $number, 3, 0, $insert ); // Insert le tableau $insert à la 4ème place du tableau $Number
echo "<p>Après l'ajout du deuxième tableau : </p>";
var_dump($number);
 