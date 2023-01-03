<?php

// Un fichier va toujours s'écrire sans espace, et sans caractères spéciaux

// Un fichier PHP termine toujours par .php (en minuscule)

// Quand je me trouve dans un dossier, le serveur cherche à exécuter un fichier index.php
// => www.monsite.com/dossier
// (Pas besoin de préciser index.php)

// Sinon, il faut préciser le nom du fichier
// => www.monsite.com/dossier/fichier1.php

// L'intérieur d'un fichier PHP commence toujours par 
// <?php
// On est plus obligé de la fermer, avec

/* 

Balise fermante :
?> 

*/

echo 'Mon premier fichier PHP Super !';
// Une instruction PHP termine toujours par un ;

?>

<!-- Là je vais envoyer ce code directement au Client -->
<!-- Ce code n'est pas exécuté -->
<h1>Mon premier fichier PHP Super !</h1>