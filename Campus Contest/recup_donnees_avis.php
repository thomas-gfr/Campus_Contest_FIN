<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "portfolio";
$prenom = $_POST['Prenom'];
$nom = $_POST['Nom'];
$entreprise = $_POST['Entreprise'];
$message = $_POST['Message'];

 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 $sql = "INSERT INTO avis (prenom, nom, entreprise, message)
 VALUES ('$prenom', '$nom', '$entreprise', '$message')";
 
 if ($conn->query($sql) === TRUE) {
     echo "Votre message a bien été envoyé";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
?>