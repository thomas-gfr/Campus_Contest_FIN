<?php
try{
    $user = "root";
    $pass = "root";
    $dbh = new PDO('mysql:host=localhost:8889;dbname=portfolio', $user, $pass);    
} 
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
