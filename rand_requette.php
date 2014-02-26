<?php 

    $connexion = new PDO("mysql:host=localhost;dbname=haikusgame","root", ""); // connexion à la BDD

    $requette=$connexion->query("SELECT * from haikugame order by RAND() limit 1 "); //Requêtte pour extraire les haikus de l'été. 

    $requette->setFetchMode(PDO::FETCH_OBJ);
    while($resultat = $requette->fetch()){
        echo '<ul>';
        echo '<li id="rand1" draggable="true" ondragstart="drag(event)">'.$resultat->l1.'</li>';
        echo '<li id="rand2" draggable="true" ondragstart="drag(event)">'.$resultat->l2.'</li>';
        echo '<li id="rand3" draggable="true" ondragstart="drag(event)">'.$_SESSION['test'].'</li>';
        echo '</ul>';

    }

      $requette->closeCursor();
     ?>