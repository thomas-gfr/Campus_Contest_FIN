<?php


function avis(){
    $user ="root";
    $pass ="root";
    //comptage des avis

    $add = new PDO('mysql:host=localhost:8889;dbname=portfolio', $user, $pass,
    array(
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    )
    );
        $requete2 = $add ->query('SELECT * FROM avis');

        $br = $requete2->rowCount();

        $requete2 ->closeCursor();

        while ($id<$br){

        
        $add = new PDO('mysql:host=localhost:8889;dbname=portfolio', $user, $pass);
        $requete = $add ->query('SELECT * FROM avis');

        $res = $requete->fetchAll();
        $requete->closeCursor();

        return $res;
    }
}

?>