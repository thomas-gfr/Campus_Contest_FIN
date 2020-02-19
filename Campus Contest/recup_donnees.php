<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "portfolio";
$prenom = $_POST['Prenom'];
$nom = $_POST['Nom'];
$mail = $_POST['Mail'];
$objet = $_POST['Objet'];
$message = $_POST['Message'];

 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 $sql = "INSERT INTO contact (prenom, nom, objet, message,mail)
 VALUES ('$prenom', '$nom', '$objet', '$message','$mail')";
 
 if ($conn->query($sql) === TRUE) {
     echo "Votre message a bien été envoyé";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
?>